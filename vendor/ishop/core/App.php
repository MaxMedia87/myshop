<?php

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
        Router::dispatch($query);
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
