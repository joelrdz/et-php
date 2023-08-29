<?php
require 'functions.php';
require 'Models/Task.php';
require 'Enums/ColorsEnum.php';

$greeting = 'Hello world';

function dbConnect() {
  try {
    return new PDO('mysql:host=127.0.0.1;dbname=todos', 'root', '');
  } catch (PDOException $error) {
    die($error->getMessage());
  }
}

$pdo = dbConnect();

$query = $pdo->prepare('select * from tasks');

$query->execute();

$tasks = $query->fetchAll(PDO::FETCH_OBJ);

// $tasks = [
//   new Task(completed: true, title: 'Study PHP'),
//   new Task('Buy food'),
//   new Task('Workout', true),
// ];

// $tasks[0]->setColor(ColorsEnum::BLUE->value);
// $tasks[1]->setColor(ColorsEnum::GREEN->value);
// $tasks[2]->setColor(ColorsEnum::RED->value);

$completedTasks = array_filter($tasks, function ($task) {
  return $task->completed;
});

$pendingTasks = array_filter($tasks, function ($task) {
  return !$task->completed;
});

// dd($pendingTasks);

require 'index.view.php';
