<?php
require 'functions.php';
require 'Models/Task.php';

$greeting = 'Hello world';

$tasks = [
  new Task(completed: true, title: 'Study PHP'),
  new Task('Buy food'),
  new Task('Workout', true),
];

$completedTasks = array_filter($tasks, function ($task) {
  return $task->completed;
});

$pendingTasks = array_filter($tasks, function ($task) {
  return !$task->completed;
});

// dd($pendingTasks);

require 'index.view.php';
