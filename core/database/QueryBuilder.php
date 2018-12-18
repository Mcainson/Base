<?php

class QueryBuilder
{
    protected $pdo;
    // The query builder to do his job needs access to the PDO object 
    // to have an instance of the PDO class

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
           $stmt = $this->pdo->prepare("select * from {$table}");
           $stmt->execute();
           return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}