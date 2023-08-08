<?php
require __DIR__ . '/../functions.php';

class Model {
  public function buildString() {
    $me = new ReflectionClass($this);
    $properties = $me->getProperties();

    $string = '';
    foreach ($properties as $property) {
      $propertyName = $property->name;
      $string = $string . "{$propertyName}: {$this->$propertyName}\n";
    }

    return $string;
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
    public $topic,
    public $info,
    public $completed = false
  ) {}
}

$task = new Task('Buy food', true);
$task->save('task-1.txt');

$exam = new Exam('PHP Exam', 'PHP 8');
$exam->save('exam-1.txt');
