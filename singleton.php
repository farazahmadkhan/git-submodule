<?php
error_reporting(-1);
ini_set('display_errors', 'On');

class SingletonPattern
{
    private static $instance;
    private function __construct() {
    }
    public static function get_instance() {
        if (! self::$instance)
        {
            self::$instance = new SingletonPattern();
        }
        return self::$instance;
    }
}
$obj = SingletonPattern :: get_instance();
print_r($obj);

