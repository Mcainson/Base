<?php

$tasks = $app['database']->selectAll('profesor');
  
require 'views/index.view.php';