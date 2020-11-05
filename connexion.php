<?php

/* Connexion à une base MySQL avec l'invocation de pilote */
$dsn = 'mysql:dbname=mwmDB;host=localhost';
$user = 'root';
$password = '';

try {
    $db = new PDO($dsn, $user, $password);

    if(isset($_POST["login"])){

        header('Location: main.php');

    }

} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}


?>
