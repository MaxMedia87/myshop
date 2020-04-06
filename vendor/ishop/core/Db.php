<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 06.04.2020
 * Time: 17:41
 */

namespace ishop;


class Db
{
    use TSinglton;

    protected function __construct()
    {
        $db = require CONF . '/config_db.php;
    }
}
