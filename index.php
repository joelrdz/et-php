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
  foreach ($tasks as $task) {
    echo $task['title'] . '<br>';
  }
?>
