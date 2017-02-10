<?php

class APIAdapter_Hooks {
  private $adapter;

  public static function get_instance() {
    static $instance;
    if ( ! $instance instanceof self ) {
      $instance = new static;
    }
    return $instance;
  }

  private function __construct() {
    {adds}
  }

  public function setAdapter($adapter){
    $this->adapter = $adapter;
  }

  public function execute_hook($data, $name){
    $this->adapter->execute_hook($data, $name);
  }

  {functions}
}
