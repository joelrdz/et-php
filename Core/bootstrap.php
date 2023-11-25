<?php
require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'Core/App.php';
require 'Core/Request.php';
require 'Core/Router.php';
require 'Models/Task.php';
require 'functions.php';

App::set('config', require 'config.php');

$config = App::get('config');

$pdo = Connection::start($config['database']);

return new QueryBuilder($pdo);
