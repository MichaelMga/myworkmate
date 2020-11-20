<?php

$dsn = 'mysql:dbname=mwmdb;host=localhost';
$user = 'root';
$password = '';

try {
    $db = new PDO($dsn, $user, $password);

    echo'vous êtes connectés <br><br><br>';

} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
