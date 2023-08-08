<?php
require 'Model.php';

class Task extends Model {
  public function __construct(
    public $title,
    public $completed = false
  ) {}

  public function complete() {
    $this->completed = true;
  }
}

$task = new Task('Buy food', true);
$task->save();
