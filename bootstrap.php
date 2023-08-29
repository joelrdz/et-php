<?php
require 'database/Connection.php';
require 'database/QueryBuilder.php';
$config = require 'config.php';

$pdo = Connection::start($config['database']);

return new QueryBuilder($pdo);
