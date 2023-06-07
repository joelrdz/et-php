<?php
require 'functions.php';

$greeting = 'Hello world';

class Task {
  public $title;
  public $completed = false;

  public function __construct($title, $completed) {
    $this->title = $title;
    $this->completed = $completed;
  }

  public function complete() {
    $this->completed = true;
  }
}

$tasks = [
  new Task('Study PHP', true),
  new Task('Buy food', false),
  new Task('Workout', true),
];

$completedTasks = array_filter($tasks, function ($task) {
  return $task['completed'];
});

$pendingTasks = array_filter($tasks, function ($task) {
  return !$task['completed'];
});

// dd($pendingTasks);

require 'index.view.php';
