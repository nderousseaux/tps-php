<?php
session_start();
include "bdd.php";

unset($_SESSION['message']);

if ( !isset($_SESSION['user']) )
{
    header('Location: signin.php');
    exit();
}

if ( $_SERVER['REQUEST_METHOD'] != 'POST' )
{
    header('Location: formpassword.php');
    exit();
}


if (!is_string($_POST["password"])){
    $_SESSION["message"] = "Le mot de passe n'est pas du bon format";
    header('Location: formpassword.php');
    exit();
}

if ($_POST["password"] != $_POST["repassword"]){
    $_SESSION["message"] = "Les mots de passe ne correspondent pas";
    header('Location: formpassword.php');
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
$result = $pdo->prepare("UPDATE users SET password = :pass WHERE login = :login");
$result->bindValue(':login', $_SESSION["user"], PDO::PARAM_STR);
$result->bindValue(':pass', password_hash($_POST["password"], PASSWORD_DEFAULT), PDO::PARAM_STR);
$win = $result->execute();
if($win){
    header("Location: welcome.php");
    exit();
}
else{
    $_SESSION["message"] = "Echec du changement de mot de passe";
    header('Location: formpassword.php');
    exit();
}






