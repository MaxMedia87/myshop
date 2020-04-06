<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 31.03.2020
 * Time: 15:24
 */

namespace ishop;


class Router
{
    protected static $routes = [];
    protected static $route = [];

    public static function add($regexp, $route = [])
    {
        self::$routes[$regexp] = $route;
    }
    public static function getRoutes()
    {
        return self::$routes;
    }

    public static function getRoute()
    {
        return self::$route;
    }

    public static function dispatch($url)
    {
        if(self::matchRoute($url)){
            $controller = 'app\controllers\\' . self::$route['prefix'] . self::$route['controller'] . 'Controller';
            //проверка на наличие класса
            if(class_exists($controller)){
                $controllerObject = new $controller(self::$route);
                $action = self::lowerCamelCase(self::$route['action']) . 'Action';
                //проверка на наличие метода внутри класса
                if(method_exists($controllerObject, $action)) {
                    $controllerObject->$action();
                    //вызывает соответствующий метод внутри класса
                    $controllerObject->getView();
                } else {
                    throw new \Exception("Метод $controller::$action не найден", 404);
                }
            } else {
                throw new \Exception("Контроллер $controller не найден", 404);
            }
        } else {
            throw new \Exception('Страница не найдена', 404);
        }
    }

    public static function matchRoute($url)
    {
       foreach(self::$routes as $pattern => $route) {
           if(preg_match("#{$pattern}#", $url, $matches)){
               foreach($matches as $key => $value){
                   if(is_string($key)) {
                       $route[$key] = $value;
                   }
               }
               if(empty($route['action'])){
                   $route['action'] = 'index';
               }
               if(!isset($route['prefix'])){
                   $route['prefix'] = '';
               } else {
                   $route['prefix'] .= '\\';
               }
               $route['controller'] = self::upperCamelCase($route['controller']);
               self::$route = $route;
               return true;
           }
       }
       return false;
    }
    //CamelCase
    protected static function upperCamelCase($name)
    {
        return str_replace(' ', '', ucwords(str_replace('-', ' ', $name)));
    }
    //camelCase
    protected static function lowerCamelCase($name)
    {
       return lcfirst(self::upperCamelCase($name));
    }
}
