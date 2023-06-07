<?php

class Task {
  public function __construct(
    public $title,
    public $completed = false
  ) {}

  public function complete() {
    $this->completed = true;
  }
}
