<?php
error_reporting(E_ALL);
require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';

new ishop\App();

\ishop\App::$app->setProperty('test', 'Тут значение');

debug(ishop\App::$app->getProperties());