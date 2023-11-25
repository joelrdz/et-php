<?php

$query = require 'Core/bootstrap.php';

$url = trim($_SERVER['REQUEST_URI'], '/');

$routes = require('routes.php');

$router = new Router;
$router->register($routes);
require $router->handle($url);
