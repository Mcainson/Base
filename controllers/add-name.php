<?php 

$app['database']->insert('users', [
    'usuario' => $_POST['name'],
    'tipo' => 1
]);

header('Location: /');