<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP and HTML</title>
</head>
<body>
  <h1><?= $greeting; ?></h1>

  <h2>Completed</h2>
  <ul>
    <?php foreach ($completedTasks as $task): ?>
      <li style="color: <?= $task->color ?>;"><?= $task->title ?></li>
    <?php endforeach; ?>
  </ul>

  <h2>Pending</h2>
  <ul>
    <?php foreach ($pendingTasks as $task): ?>
      <li style="color: <?= $task->color ?>;"><?= $task->title ?></li>
    <?php endforeach; ?>
  </ul>

  <form action="create-task.php" method="POST">
    <input type="text" name="title">
    <button type="submit">Save</button>
  </form>
</body>
</html>
