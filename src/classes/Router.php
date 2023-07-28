<?php
    namespace XPA\Classes;
    
    class Router {
        public $routes = [];
    
        public function add_route($route, $path, $method = 'GET') {
            $this->routes[$method][$route] = $path;
        }

        public function route($route, $method) {
            if(array_key_exists($method, $this->routes)) {
                if(array_key_exists($route, $this->routes[$method])) {
                    if(is_callable($this->routes[$method][$route])) {
                        call_user_func($this->routes[$method][$route]);
                    }
                    else {
                        include $this->routes[$method][$route];
                    }
                }
                else {
                    include "views/pages/404.php";
                }
            }
            else {
                include "views/pages/404.php";
            }
        }
    }