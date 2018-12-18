<?php
// class to connect to the database an return and instance PDO
class Connection
{
    public static function make($config)
    // make a method accesible globaly
    {
        try{
        return new PDO(
            $config['connection'].';dbname='.$config['name'],
            $config['username'],
            $config['password'],
            $config['options']

         );
        } catch (PDOException $e){
            die($e->getMessage());
        }
  
    }

}