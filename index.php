<?php
require 'functions.php';
require 'Models/Task.php';
require 'Enums/ColorsEnum.php';

$greeting = 'Hello world';

new PDO('mysql:host=127.0.0.1;dbname=todos', 'root', '');

$tasks = [
  new Task(completed: true, title: 'Study PHP'),
  new Task('Buy food'),
  new Task('Workout', true),
];

$tasks[0]->setColor(ColorsEnum::BLUE->value);
$tasks[1]->setColor(ColorsEnum::GREEN->value);
$tasks[2]->setColor(ColorsEnum::RED->value);

$completedTasks = array_filter($tasks, function ($task) {
  return $task->completed;
});

$pendingTasks = array_filter($tasks, function ($task) {
  return !$task->completed;
});

// dd($pendingTasks);

require 'index.view.php';
