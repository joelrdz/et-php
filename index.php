<?php
require 'Models/Task.php';
$query = require 'bootstrap.php';

$greeting = 'Hello world';

$tasks = $query->selectAll();

$completedTasks = array_filter($tasks, function ($task) {
  return $task->completed;
});

$pendingTasks = array_filter($tasks, function ($task) {
  return !$task->completed;
});

require 'index.view.php';
