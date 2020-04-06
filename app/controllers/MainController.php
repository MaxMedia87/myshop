<?php

namespace app\controllers;

class MainController extends AppController
{
    //public $template = 'test';

    public function indexAction()
    {
        $this->setMeta('Название сайта', 'Описание сайта', 'Ключевые слова');
        $products = ['Кофта', 'Футболка', 'Куртка'];
        $name = 'Максим';
        $age = 45;
        $this->setData(compact('name', 'age', 'products'));
        //$this->setMeta(App::$app->getProperty('shopName'), 'Описание сайта', 'Ключевые слова');
    }
}
