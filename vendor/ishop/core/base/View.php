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
    public function render($data)
    {
        if(is_array($data)) {
            extract($data);
        }
        $viewFile = APP . "/views/{$this->prefix}{$this->controller}/{$this->view}.php";
        if(file_exists($viewFile)) {
            ob_start();
            require $viewFile;
            $content = ob_get_clean();
        } else {
            throw new \Exception("Не найден файл {$viewFile}", 500);
        }
        if(false !== $this->template) {
            $templateFile = APP . "/views/templates/{$this->template}.php";
            if(file_exists($templateFile)) {
                require $templateFile;
            } else {
                throw new \Exception("Не найден шаблон {$this->template}", 500);
            }
        }
    }

    public function getMeta()
    {
        $out = '<title>' . $this->meta['title'] . '</title>' . PHP_EOL;
        $out .= '<meta name="description" content="' . $this->meta['description'] . '">' . PHP_EOL;
        $out .= '<meta name="keywords" content="' . $this->meta['keywords'] . '">' . PHP_EOL;

        return $out;
    }


}
