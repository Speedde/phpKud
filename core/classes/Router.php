<?php

namespace myfrm;

class Router {

    protected $uri;
    public $routes = [];
    protected $method;

    public function __construct()
    {
        $this->uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');
        $this->method = $_SERVER['REQUEST_METHOD'];

    }

    public function matches()
    {
        $match = false;

        foreach($this->routes as $route) {

            if(($route['uri'] === $this->uri) && ($route['method'] === $this->method)) {
                require APP . "/{$route['controller']}";
                $match = true;
                break;
            }
        }
        if(!$match) {
            abort();
        }
    }
    public function add($uri, $controller, $method)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,

        ];
    }
    public function get($uri, $controller)
    {
        $this->add($uri, $controller, 'GET');
    }
    public function post($uri, $controller)
    {
        $this->add($uri, $controller, 'POST');
    }





}
