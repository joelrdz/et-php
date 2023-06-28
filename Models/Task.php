<?php

class Task {
  public function __construct(
    public $title,
    public $completed = false
  ) {}

  public function complete() {
    $this->completed = true;
  }

  public function buildString() {
    return "Title: {$this->title}\n" .
    "Completed: " . ($this->completed ? 'Si' : 'No');
  }

  public function save($name) {
    $file = fopen($name, 'w');
    fwrite($file, $this->buildString());
    fclose($file);
  }
}

$task = new Task('Buy food', true);
$task->save('task-1.txt');
