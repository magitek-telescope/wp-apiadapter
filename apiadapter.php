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

class APIAdapter{
  private $hooksLib;
  private $basename;
  private $hookNames = [
    "publish_post"
  ];

  private $hooks = [];

  public static function get_instance() {
    static $instance;
    if ( ! $instance instanceof self ) {
      $instance = new static;
    }
    return $instance;
  }

  private function __construct() {
    $this->basename = plugin_basename( __FILE__ );
    $this->add_actions();
    $this->hooksLib = APIAdapter_Hooks::get_instance();
    $this->hooksLib->setAdapter($this);
  }

  private function add_actions() {
    add_action("admin_menu", [ $this, "admin_init"]);
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
      if($name == $hook["name"]) $this->request($data, $hook);
    }
  }

  public function request($data, $hook){
    $body = [];

    foreach ($hook["params"]["body"] as $key => $template) {
      $output = $template;
      while(true){
        if(preg_match('/(.*){{([a-zA-z-_]+)\.([a-zA-Z-_]+)}}(.*)/', $output, $matches) !== 0){
          $target = $matches[2];
          $name = $matches[3];
          $replateText = get_post($data)->{$name};
          $output = preg_replace(
            "/(.*){{" . $target . "\." . $name . "}}(.*)/",
            "$1{$replateText}$4",
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
