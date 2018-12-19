<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<body>

	<?php require('partials/nav.php')  ?>
    <ul>
    	<h1>My tasks</h1>
      <?php
      
      foreach($tasks as $tasks=>$valor){
        echo '<li>'.$valor['Nombre'].'</li>';
    }
        ?>
    </ul>
</body>
</html>