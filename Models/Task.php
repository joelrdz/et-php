<?php

class Model {
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

class Task extends Model {
  public function __construct(
    public $title,
    public $completed = false
  ) {}

  public function complete() {
    $this->completed = true;
  }
}

class Exam extends Model {
  public function __construct(
    public $title,
    public $completed = false
  ) {}
}

$task = new Task('Buy food', true);
$task->save('task-1.txt');

$exam = new Exam('PHP Exam', true);
$exam->save('exam-1.txt');
