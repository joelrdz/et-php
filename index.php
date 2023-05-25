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

  echo '<h1>My tasks</h1>';

  echo '<h2>Completed</h2>';
  foreach ($tasks as $task) {
    if ($task['completed']) {
      echo $task['title'] . ($task['completed'] ? '✅' : '❌') . '<br>';
    }
  }

  echo '<h2>Pending</h2>';
  foreach ($tasks as $task) {
    if (!$task['completed']) {
      echo $task['title'] . ($task['completed'] ? '✅' : '❌') . '<br>';
    }
  }
?>
