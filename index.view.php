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
      <li style="color: <?= $task->color ?>;">
        <?= $task->title ?>
        <form action="toggle-task.php" method="POST" style="display: inline;">
          <input type="hidden" name="completed" value="0">
          <input type="hidden" name="id" value="<?= $task->id ?>">
          <button type="submit">➖</button>
        </form>
        <form action="delete-task.php" method="POST" style="display: inline;">
          <input type="hidden" name="id" value="<?= $task->id ?>">
          <button type="submit">❌</button>
        </form>
      </li>
    <?php endforeach; ?>
  </ul>

  <h2>Pending</h2>
  <ul>
    <?php foreach ($pendingTasks as $task): ?>
      <li style="color: <?= $task->color ?>;">
        <?= $task->title ?>
        <form action="toggle-task.php" method="POST" style="display: inline;">
          <input type="hidden" name="completed" value="1">
          <input type="hidden" name="id" value="<?= $task->id ?>">
          <button type="submit">✅</button>
        </form>
        <form action="delete-task.php" method="POST" style="display: inline;">
          <input type="hidden" name="id" value="<?= $task->id ?>">
          <button type="submit">❌</button>
        </form>
      </li>
    <?php endforeach; ?>
  </ul>

  <form action="create-task.php" method="POST">
    <input type="text" name="title">
    <input type="color" name="color">
    <button type="submit">Save</button>
  </form>
</body>
</html>
