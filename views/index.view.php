<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<body>
    <ul>
      <?php
      
      foreach($tasks as $tasks=>$valor){
        echo '<li>'.$valor['Nombre'].'</li>';
    }
        ?>
    </ul>
</body>
</html>