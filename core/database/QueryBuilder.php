<?php

class QueryBuilder
{
    // The query builder to do his job needs access to the PDO object 
    // to have an instance of the PDO class
    protected $pdo;

    // Create a new QueryBuilder instance
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    // Select all records from a database table.
    public function selectAll($table)
    {
           $stmt = $this->pdo->prepare("select * from {$table}");
           $stmt->execute();
           return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    //Insert a record into a table.
    public function insert($table, $parameters)
    {
         $sql = sprintf(
          'insert into %s (%s) values (%s)',
          $table,
          implode(', ', array_keys($parameters)),
          ':'.implode(', :', array_keys($parameters))
         );

        try{
              $statement = $this->pdo->prepare($sql);
              $statement->execute($parameters);
      }
         catch(Exception $e){

          die('Whoops');
         }
    }
}