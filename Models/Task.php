<?php
require 'Model.php';

#[AllowDynamicProperties]

class Task extends Model {
  public $color = 'black';

  // public function __construct(
  //   public $title = '',
  //   public $completed = false
  // ) {}

  public function complete() {
    $this->completed = true;
  }

  public function setColor($color) {
    $this->color = $color;
  }
}

$task = new Task('Buy food', true);
$task->save();
