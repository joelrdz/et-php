<?php

$query = require 'Core/bootstrap.php';

$url = trim($_SERVER['REQUEST_URI'], '/');

$routes = [
  '' => 'Controllers/index.php',
  'about' => 'Controllers/about.php',
  'contact' => 'Controllers/contact.php',
  'services' => 'Controllers/services.php',
];

$router = new Router;
$router->register($routes);
require $router->handle($url);
