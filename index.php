<?php
require 'functions.php';
require 'Models/Task.php';
require 'Enums/ColorsEnum.php';
require 'database/Connection.php';

$greeting = 'Hello world';

$pdo = (new Connection)->start();

$tasks = getAllTasks($pdo);

$completedTasks = array_filter($tasks, function ($task) {
  return $task->completed;
});

$tasks[0]->setColor(ColorsEnum::BLUE->value);

$pendingTasks = array_filter($tasks, function ($task) {
  return !$task->completed;
});

require 'index.view.php';
