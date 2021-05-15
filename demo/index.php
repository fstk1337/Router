<?php
$pages_dir = require '../config/init.php';
$routes = Router::getRoutes();
$uri = rtrim($_SERVER["REQUEST_URI"], '/');

if (Router::match($uri)) {
    require $pages_dir . "$routes[$uri]";
} else {
    require $pages_dir . '404.php';
}