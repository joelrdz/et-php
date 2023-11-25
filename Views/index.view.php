<?php require('partials/head.view.php') ?>
  <h1><?= $greeting; ?></h1>

  <h2>Completed</h2>
  <ul>
    <?php foreach ($completedTasks as $task): ?>
      <li style="color: <?= $task->color ?>;">
        <?= $task->title ?>
        <form action="task/toggle" method="POST" style="display: inline;">
          <input type="hidden" name="completed" value="0">
          <input type="hidden" name="id" value="<?= $task->id ?>">
          <button type="submit">➖</button>
        </form>
        <form
          action="task/delete"
          method="POST"
          onsubmit="return confirm('Delete task?');"
          style="display: inline;"
        >
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
        <form action="task/toggle" method="POST" style="display: inline;">
          <input type="hidden" name="completed" value="1">
          <input type="hidden" name="id" value="<?= $task->id ?>">
          <button type="submit">✅</button>
        </form>
        <form
          action="task/delete"
          method="POST"
          onsubmit="return confirm('Delete task?');"
          style="display: inline;"
        >
          <input type="hidden" name="id" value="<?= $task->id ?>">
          <button type="submit">❌</button>
        </form>
      </li>
    <?php endforeach; ?>
  </ul>

  <form action="task/create" method="POST">
    <input type="text" name="title">
    <input type="color" name="color">
    <button type="submit">Save</button>
  </form>
<?php require('partials/footer.view.php') ?>
