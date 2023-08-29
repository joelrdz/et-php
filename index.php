<?php
require 'functions.php';
require 'Models/Task.php';
require 'Enums/ColorsEnum.php';

$greeting = 'Hello world';

$pdo = dbConnect();

$tasks = getAllTasks($pdo);

$completedTasks = array_filter($tasks, function ($task) {
  return $task->completed;
});

$pendingTasks = array_filter($tasks, function ($task) {
  return !$task->completed;
});

require 'index.view.php';
