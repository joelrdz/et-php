<?php
require 'Models/Task.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

$greeting = 'Hello world';

$pdo = Connection::start();

$query = new QueryBuilder($pdo);

$tasks = $query->selectAll();

$completedTasks = array_filter($tasks, function ($task) {
  return $task->completed;
});

$pendingTasks = array_filter($tasks, function ($task) {
  return !$task->completed;
});

require 'index.view.php';
