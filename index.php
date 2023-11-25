<?php

$query = require 'Core/bootstrap.php';

$url = trim($_SERVER['REQUEST_URI'], '/');

$routes = [
  '' => 'Controllers/index.php',
  'about' => 'Controllers/about.php',
  'contact' => 'Controllers/contact.php',
  'services' => 'Controllers/services.php',
  'task/create' => 'Controllers/create-task.php',
  'task/toggle' => 'Controllers/toggle-task.php',
  'task/delete' => 'Controllers/delete-task.php',
];

$router = new Router;
$router->register($routes);
require $router->handle($url);
