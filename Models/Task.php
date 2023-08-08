<?php
require __DIR__ . '/../functions.php';

class Model {
  public function buildString() {
    $me = new ReflectionClass($this);
    $properties = $me->getProperties();

    $string = '';
    foreach ($properties as $property) {
      $propertyName = $property->name;
      $propertyValue = $this->$propertyName;
      $string = $string . "{$propertyName}: " . (is_bool($propertyValue) ? var_export($propertyValue, true) : $propertyValue) . "\n";
    }

    return $string;
  }

  public function save($name = null) {
    if (is_null($name)) {
      $me = new ReflectionClass($this);
      $fileName = $me->getName();
      $name = lcfirst($fileName) . '.txt';
    }

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
$task->save();

$exam = new Exam('PHP Exam', 'PHP 8');
$exam->save('exam-1.txt');
