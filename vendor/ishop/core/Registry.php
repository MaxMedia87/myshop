<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 27.03.2020
 * Time: 15:38
 */

namespace ishop;


class Registry
{
    use TSinglton;

    public static $poperties = [];

    public function setProperty($name, $value)
    {
        self::$poperties[$name] = $value;
    }

    public function getProperty($name)
    {
        if(isset(self::$poperties[$name])){
            return self::$poperties[$name];
        }
        return null;
    }

    public function getProperties(){
        return self::$poperties;
    }
}