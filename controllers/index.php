<?php

$tasks = $database->selectAll('profesor');
  
require 'views/index.view.php';