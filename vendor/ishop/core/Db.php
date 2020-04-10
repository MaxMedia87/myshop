<?php

namespace ishop;

class Db
{
    use TSinglton;

    protected function __construct()
    {
        $db = require CONF . '/config_db.php';
        class_alias('\RedBeanPHP\R', '\R');
        \R::setup($db['dsn'], $db['user'], $db['pass']);
        if(!\R::testConnection()) {
            throw new \Exception('Нет соединения с БД', 500);
        } else {
            echo 'Соединение установлено';
        }
    }
}
