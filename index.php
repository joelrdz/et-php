<?php

$query = require 'Core/bootstrap.php';
require 'Controllers/index.php';

$routes = [
  '' => 'Controllers/index.php',
  'about' => 'Controllers/about.php',
  'contact' => 'Controllers/contact.php',
  'services' => 'Controllers/services.php',
];

$router = new Router;
$router->register($routes);
