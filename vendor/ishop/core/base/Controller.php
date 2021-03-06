<?php

namespace ishop\base;


abstract class Controller
{
    public $route;
    public $controller;
    public $model;
    public $view;
    public $template;
    public $prefix;
    public $data = [];//Контент
    public $meta = ['title' => '', 'description' => '', 'keywords' => ''];//Метаданные

    public function __construct($route)
    {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->model = $route['controller'];
        $this->view = $route['action'];
        $this->prefix = $route['prefix'];
    }

    public function getView()
    {
        $viewObject = new View($this->route, $this->template, $this->view, $this->meta);
        $viewObject->render($this->data);
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function setMeta($title = '', $description = '', $keywords = '')
    {
        $this->meta['title'] = $title;
        $this->meta['description'] = $description;
        $this->meta['keywords'] = $keywords;

    }
}
