<?php
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

  echo '<h1>My tasks</h1>';

  echo '<h2>Completed</h2>';
  foreach ($completedTasks as $task) {
    echo $task['title'] . ' ✅<br>';
  }

  echo '<h2>Pending</h2>';
  foreach ($pendingTasks as $task) {
    echo $task['title'] . ' ❌<br>';
  }
?>
