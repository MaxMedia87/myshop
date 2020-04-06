<?php

namespace ishop\base;

class View
{
    public $route;
    public $controller;
    public $model;
    public $view;
    public $template;
    public $prefix;
    public $data = [];//Контент
    public $meta = [];//Метаданные

    public function __construct($route, $template = '', $view = '', $meta)
    {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->view = $view;
        $this->model = $route['controller'];
        $this->prefix = $route['prefix'];
        $this->meta = $meta;
        if($template === false) {
            $this->template = false;
        } else {
            $this->template = $template ?: TEMPLATE; // Запись говорит если $template пусто, то подставляем TEMPLATE
        }
    }
}
