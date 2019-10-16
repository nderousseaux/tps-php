<?php
include "bdd.php";

if ( !isset($_SESSION['user']) )
{
    header('Location: signin.php');
    exit();
}

// Incusion de la bdd
try {
    $pdo = new PDO(SQL_DSN, SQL_USERNAME, SQL_PASSWORD);
}
catch( PDOException $e ) {
    echo 'Erreur : '.$e->getMessage();
    exit;
}
$result = $pdo->prepare("DELETE users WHERE login = :login");
$result->bindValue(':login', $_SESSION["user"], PDO::PARAM_STR);
$win = $result->execute();
if($win){
    session_destroy();
    header("Location: sigin.php");
    exit();
}
else{
    header('Location: welcome.php');
    exit();
}