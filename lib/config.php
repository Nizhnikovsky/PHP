<?php
/**
 * Created by PhpStorm.
 * User: Nizhn
 * Date: 24.03.2018
 * Time: 13:19
 */

class Config
{
    protected static $settings = array();
    
    public static function get($key)
    {
      return isset(self::$settings[$key]) ? self::$settings[$key] : null;
    }
    
    public static function set($key,$value)
    {
        self::$settings[$key] = $value;
    }
    
}