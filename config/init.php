<?php

require '../src/Router.php';
$params = require '../config/config.php';
$routes = $params['routes'];
Router::addRoutes($routes);
return $params['pages_dir'];