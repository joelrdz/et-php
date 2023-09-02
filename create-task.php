<?php
$query = require 'bootstrap.php';

$query->create('tasks', [
  'title' => $_POST['title'],
  'completed' => 0,
]);
