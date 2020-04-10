<?php

namespace app\controllers;

class MainController extends AppController
{

    public function indexAction()
    {
        $posts = \R::findAll('test');
        debug($posts);
        $this->setMeta('Название сайта', 'Описание сайта', 'Ключевые слова');
        $products = ['Кофта', 'Футболка', 'Куртка'];
        $name = 'Максим';
        $age = 45;
        $this->setData(compact('name', 'age', 'products', 'posts'));
    }
}
