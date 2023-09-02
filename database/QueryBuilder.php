<?php
require 'functions.php';

class QueryBuilder {
  protected $pdo;

  public function __construct($pdo) {
    $this->pdo = $pdo;
  }

  public function selectAll($table, $class) {
    $query = $this->pdo->prepare("select * from {$table}");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_CLASS, $class);
  }

  public function create($params) {
    $sql = "insert into tasks (title, completed) values (:title, :completed)";

    try {
      $query = $this->pdo->prepare($sql);
      $query->execute($params);
    } catch (PDOException $error) {
      die($error->getMessage());
    }
  }
}
