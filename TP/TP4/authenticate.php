<?php

include "bdd.php";

session_start();

if ( $_SERVER['REQUEST_METHOD'] != 'POST' )
{
    header('Location: signin.php');
    exit();
}

unset($_SESSION['message']);

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

/*
//Requête simple
$requete = "SELECT password FROM users WHERE login='" .$login ."'; ";
$result = $pdo->query( $requete );


$passwordTrue = $row["password"];
*/

//Requête préparée

$result = $pdo->prepare("SELECT password FROM users WHERE login = :login");
$result->bindValue(':login', $login, PDO::PARAM_STR);
$result->execute();
if($result->rowCount()!=0){
    $row = $result->fetch();
}
else{
    $_SESSION["message"] = "Login incorect.";
    header('Location: signin.php');
    exit();
}
$passwordBdd = $row["password"];





if ( !isset($_POST['login'],$_POST['password']) )
{
    header('Location: signin.php');
    exit();
}




if ( !password_verify($password, $passwordBdd))
{

    $_SESSION["message"] = "Mot de passe incorect";
    header('Location: signin.php');
    exit();
}

$_SESSION['user'] = $login;
header('Location: welcome.php');
exit();
