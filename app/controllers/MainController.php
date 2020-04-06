<?php

namespace app\controllers;

class MainController extends AppController
{
    public function indexAction()
    {
        $this->setMeta('Название сайта', 'Описание сайта', 'Ключевые слова');
        echo __METHOD__;
    }
}
