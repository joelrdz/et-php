<?php
require 'Models/Task.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

$greeting = 'Hello world';

$pdo = Connection::start();

$query = new QueryBuilder;

$tasks = $query->selectAll($pdo);

$completedTasks = array_filter($tasks, function ($task) {
  return $task->completed;
});

$pendingTasks = array_filter($tasks, function ($task) {
  return !$task->completed;
});

require 'index.view.php';
