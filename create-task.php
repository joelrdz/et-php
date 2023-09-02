<?php
$query = require 'bootstrap.php';

$query->create([
  'title' => $_POST['title'],
  'completed' => 0,
]);
