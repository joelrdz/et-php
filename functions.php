<?php

function dd($value) {
  return die(var_dump($value));
}

function getAllTasks($pdo) {
  $query = $pdo->prepare('select * from tasks');
  $query->execute();
  return $query->fetchAll(PDO::FETCH_CLASS, 'Task');
}
