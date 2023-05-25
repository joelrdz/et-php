<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP and HTML</title>
</head>
<body>
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
  ?>
  <h1><?= $greeting; ?></h1>

  <h2>Completed</h2>
  <ul>
    <?php
      foreach ($completedTasks as $task) {
        echo '<li>' . $task['title'] . '</li>';
      }
    ?>
  </ul>

  <h2>Pending</h2>
  <ul>
    <?php
      foreach ($pendingTasks as $task) {
        echo '<li>' . $task['title'] . '</li>';
      }
    ?>
  </ul>
</body>
</html>
