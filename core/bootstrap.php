<?php


$app = [];

$app['config'] = require 'config.php';

require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php'; //coneccion a la base de datos
require 'core/database/QueryBuilder.php'; //Generador de consultas

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);