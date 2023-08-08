<?php
require 'Model.php';

class Exam extends Model {
  public function __construct(
    public $topic,
    public $info,
    public $completed = false
  ) {}
}

$exam = new Exam('PHP Exam', 'PHP 8');
$exam->save('exam-1.txt');
