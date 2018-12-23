<?php

$database = require 'core/bootstrap.php';

//$router = new Router;

//require 'routes.php';


//$uri = trim($_SERVER['REQUEST_URI'],'/');
//require $router->direct($uri);
// var_dump($_SERVER);

require Router::load('routes.php')
->direct(Request::uri(), REQUEST::method());