<?php
  $greeting = 'Hello world';

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

  require 'index.view.php';
