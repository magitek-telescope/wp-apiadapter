<?php
/**
 * @package APIAdapter
 * @version 1.0
**/

/*
Plugin Name: API Adapter
Description: WordPressの各種動作をフックしてWeb APIとの連携を図る汎用プラグインです。
Author: Potato4d
Version: 0.1
*/

require_once __DIR__ . "/libs/hooks.php";

add_action( "plugins_loaded", array( "APIAdapter", "get_instance" ) );
register_activation_hook( __FILE__, [ "APIAdapter", "activate"]);

class APIAdapter{
  private $hooksLib;
  private $basename;
  private $hookNames = [];

  private $hooks = [];

  public static function get_instance() {
    static $instance;
    if ( ! $instance instanceof self ) {
      $instance = new static;
    }
    return $instance;
  }

  private function __construct() {
    $this->hooks = json_decode(get_option("apiadapter_hooks", []), true);
    if($this->hooks){
      foreach ($this->hooks as $key => $hook) {
        if($this->hookName){
          if(!in_array($hook["target"], $this->hookName)){
            $this->hookNames[] = $hook["target"];
          }
        }else{
          $this->hookNames[] = $hook["target"];
        }
      }
    }
    $this->basename = plugin_basename( __FILE__ );
    $this->add_actions();
    $this->hooksLib = APIAdapter_Hooks::get_instance();
    $this->hooksLib->setAdapter($this);
  }

  private function add_actions() {
    add_action("admin_init"         , [ $this, "save_settings"]);
    add_action("admin_menu"         , [ $this, "admin_init"]);
  }

  public static function activate(){
    global $wpdb;
    $wpdb->query(
      "CREATE TABLE `{$wpdb->prefix}_apiadapter_editor` (
        `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
        `name` varchar(127) DEFAULT '',
        `method` varchar(127) DEFAULT '',
        `target` text,
        `url` text,
        `type` varchar(255) DEFAULT NULL,
        `headers` text,
        `bodies` text,
        PRIMARY KEY (`id`)
      )"
    );
  }

  public function save_settings(){
    if(!array_key_exists("apiadapter-editor-setting", $_POST)) return;
    update_option("apiadapter_hooks", json_encode($_POST["hooks"]));
    header("Location: " . $_SERVER["REQUEST_URI"]);
    exit;
  }

  public function admin_init(){
    add_menu_page(
      "API Adapter",
      "API Adapter",
      "administrator",
      "apiadapter",
      function(){
        require_once __DIR__ . "/libs/admin.php";
      },
      NULL,
      79.124
    );
  }

  public function execute_hook($data, $name){
    if(!in_array($name, $this->hookNames)) return;

    foreach ($this->hooks as $key => $hook) {
      if($name == $hook["target"]){
        $result = $this->request($data, $hook);
      }
    }
  }

  public function request($data, $hook){
    $body = [];

    foreach ($hook["bodies"] as $_ => $template) {
      $key = $template["key"];
      $output = $template["value"];
      while(true){
        if(preg_match('/(.*){{([a-zA-z-_]+)\.([a-zA-Z-_]+)}}(.*)/', $output, $matches) !== 0){
          $target = $matches[2];
          $name = $matches[3];
          $replateText = get_post($data)->{$name};
          $output = preg_replace(
            "/(.*){{" . $target . "\." . $name . "}}(.*)/",
            "$1{$replateText}$2",
            $output);
        }else{
          break;
        }
      }
      $body[$key] = $output;
    }

    if($hook["type"] == "json"){
      $body = json_encode($body);
    }

    return wp_remote_request(
      $hook["url"],
      [
        "method" => $hook["params"]["method"],
        "headers" => $hook["params"]["headers"],
        "body" => $body
      ]
    );
  }
}
