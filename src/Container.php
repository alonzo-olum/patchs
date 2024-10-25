<?php 

namespace patcher\test;

class Container{
    static protected $registry = [];

    public static function get( $key ){
        if(!array_key_exists($key, static::$registry))
            static::$registry[$key] = new $key;
            return static::$registry[$key];
        }
}
