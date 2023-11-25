<?php
require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'Core/Router.php';
require 'Models/Task.php';
require 'functions.php';
$config = require 'config.php';

$pdo = Connection::start($config['database']);

return new QueryBuilder($pdo);
