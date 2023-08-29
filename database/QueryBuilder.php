<?php

class QueryBuilder {
  protected $pdo;

  public function __construct($pdo) {
    $this->pdo = $pdo;
  }

  public function selectAll() {
    $query = $this->pdo->prepare('select * from tasks');
    $query->execute();
    return $query->fetchAll(PDO::FETCH_CLASS, 'Task');
  }
}
