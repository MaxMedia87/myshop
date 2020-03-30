<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 27.03.2020
 * Time: 15:19
 */

namespace ishop;


class App
{
    public static $app;

    public function __construct()
    {
        $query = trim($_SERVER['QUERY_STRING'], '/');
        session_start();
        self::$app = Registry::instance();
        $this->getParams();
        new ErrorHandler();
    }

    public function getParams()
    {
        $params = include CONF . '/params.php';
        if(!empty($params)) {
            foreach($params as $key => $param) {
                self::$app->setProperty($key, $param);
            }
        }
    }
}