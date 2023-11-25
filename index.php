<?php

$query = require 'Core/bootstrap.php';

$url = Request::url();

$routes = require('routes.php');

$router = new Router;
$router->register($routes);
require $router->handle($url);
