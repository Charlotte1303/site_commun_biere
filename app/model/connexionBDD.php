<?php 
function getDatabaseConnection() {
$dsn='mysql:dbname=infinite_biere;host=localhost;charset=utf8';
$username='root';
$password='';

try {
    $pdo= new PDO($dsn,$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
}

catch (PDOException $e) {
    die('Erreur de connexion à la base de données');
}
return $pdo;
}