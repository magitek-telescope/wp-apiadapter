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

require_once(__DIR__ . "/libs/hooks.php");

add_action( "plugins_loaded", array( "APIAdapter", "get_instance" ) );

class APIAdapter{
  private $hooksLib;
  private $basename;
  private $hooks;

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
        echo "<h1>API Adapter</h1>";
      },
      NULL,
      79.124
    );
  }

  public function execute_hook($data, $name){
    if($name == "publish_post"){
      echo "やった";
      exit;
    }
    // echo $name;
  }
}
