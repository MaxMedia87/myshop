<?php

define('DEBUG', 0); //# 0 не показывать ошибки 1 показывать
define('ROOT', dirname(__DIR__));
define('WWW', ROOT . '/public');
define('APP', ROOT . '/app');
define('CORE', ROOT . '/vendor/ishop/core');
define('LIBS', ROOT . '/vendor/ishop/core/libs');
define('CACHE', ROOT . '/tmp/cache');
define('CONF', ROOT . '/config');
define('LAYOUT', 'default'); //шаблон сайта

$path = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
$path = preg_replace('#[^/]+$#', '', $path);
$path = str_replace('/public/', '', $path);

define('BASE_URL', $path);
define('ADMIN', BASE_URL . '/admin');

require_once ROOT . '/vendor/autoload.php';