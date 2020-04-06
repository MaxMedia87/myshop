<?php
error_reporting(E_ALL);
require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';
require_once CONF . '/routes.php';

new ishop\App();

//debug(\ishop\Router::getRoutes());

//\ishop\App::$app->setProperty('test', 'Тут значение');

//debug(ishop\App::$app->getProperties());
//
//throw new Exception('Страница не найдена', 500);

