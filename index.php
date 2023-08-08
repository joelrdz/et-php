<?php
require 'functions.php';
require 'Models/Task.php';
require 'Enums/ColorsEnum.php';

$greeting = 'Hello world';

$tasks = [
  new Task(completed: true, title: 'Study PHP'),
  new Task('Buy food'),
  new Task('Workout', true),
];

$tasks[0]->setColor(ColorsEnum::BLUE->name);
$tasks[1]->setColor(ColorsEnum::GREEN->name);
$tasks[2]->setColor(ColorsEnum::RED->name);

$completedTasks = array_filter($tasks, function ($task) {
  return $task->completed;
});

$pendingTasks = array_filter($tasks, function ($task) {
  return !$task->completed;
});

// dd($pendingTasks);

require 'index.view.php';
