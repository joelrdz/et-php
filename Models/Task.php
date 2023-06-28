<?php

class Task {
  public function __construct(
    public $title,
    public $completed = false
  ) {}

  public function complete() {
    $this->completed = true;
  }

  public function save($name) {
    $file = fopen($name, 'w');
    fwrite($file, "Title: {$this->title}\nCompleted: {$this->completed}");
    fclose($file);
  }
}

$task = new Task('Buy food');
$task->save('task-1.txt');
