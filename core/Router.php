<?php

class Router{

    private $routes = [
        'GET' => [],
        'POST' => []
    ];
    public function get($uri, $controller) {
        $this->routes['GET'][$uri] = $controller;
    }
    public function post($uri, $controller)  {
        $this->routes['POST'][$uri] = $controller;
    }
    public function direct($uri, $request){
        if (array_key_exists($uri, $this->routes[$request])) {
            return $this->routes[$request][$uri];
        }
        else {
          return $this->routes['GET'][''];
        }
    }
}