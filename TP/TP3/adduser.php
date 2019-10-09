<?php
/**
 * Created by PhpStorm.
 * User: natha
 * Date: 09/10/2019
 * Time: 16:46
 */


include "bdd.php";

session_start();

if ( $_SERVER['REQUEST_METHOD'] != 'POST' )
{
    header('Location: signup.php');
    exit();
}
unset($_SESSION['messageA']);

// Incusion de la bdd
try {
    $pdo = new PDO(SQL_DSN, SQL_USERNAME, SQL_PASSWORD);
}
catch( PDOException $e ) {
    echo 'Erreur : '.$e->getMessage();
    exit;
}


$login = htmlspecialchars($_POST['login']);
$password = htmlspecialchars($_POST['password']);
$password1 = htmlspecialchars($_POST['password1']);



if($password !== $password1){
    $_SESSION["messageA"] = "Les deux mpd ne sont pas identiques";
    header('Location: signup.php');
    exit();
}

try{
    $result = $pdo->prepare("INSERT INTO users(login, password, username) VALUES (:login, :password, :login)");
    $result->bindValue(':login', $login, PDO::PARAM_STR);
    $result->bindValue(':password', $password, PDO::PARAM_STR);
    $result->execute();
    $result = $pdo->prepare("commit");
    $result->execute();
}
catch (Exception $e){
    $_SESSION["messageA"] = $e;
    header('Location: signup.php');
    exit();
}

header('Location: signin.php');
exit();




