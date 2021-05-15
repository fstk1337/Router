<?php


class Router {
    private static $routes;
    private static $instance;

    private function __construct($routes) {
        self::$routes = $routes;
    }

    public static function getInstance(): Router {
        if (self::$instance === null) {
            self::$instance = new self(self::$routes);
        }
        return self::$instance;
    }

    public static function getRoutes(): array
    {
        return self::$routes;
    }

    public static function addRoutes(array $routes) {
        foreach ($routes as $key => $value) {
            self::$routes[$key] = $value;
        }
    }

    public static function match($uri) {
        foreach (self::$routes as $k => $v) {
            if ($uri == $k) {
                return true;
            }
        }
        return false;
    }
}