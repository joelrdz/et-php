<?php
require 'functions.php';

$greeting = 'Hello world';

class Task {
  public $title;
  public $completed = false;

  public function complete() {
    $this->completed = true;
  }
}

$task = new Task;
$task->complete();
dd($task);

$tasks = [
  [
    'title' => 'Study PHP',
    'completed' => true,
  ],
  [
    'title' => 'Buy food',
    'completed' => false,
  ],
  [
    'title' => 'Workout',
    'completed' => true,
  ],
];

$completedTasks = array_filter($tasks, function ($task) {
  return $task['completed'];
});

$pendingTasks = array_filter($tasks, function ($task) {
  return !$task['completed'];
});

// dd($pendingTasks);

require 'index.view.php';
