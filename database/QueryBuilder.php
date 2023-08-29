<?php

class QueryBuilder {
  public function selectAll($pdo) {
    $query = $pdo->prepare('select * from tasks');
    $query->execute();
    return $query->fetchAll(PDO::FETCH_CLASS, 'Task');
  }
}
