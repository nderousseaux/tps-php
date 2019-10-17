<?php include "models/bdd.php";
include "models/Users.php";

// On reprend la session
session_start();

//Si la méthode n'est pas post, redirection
if ( $_SERVER['REQUEST_METHOD'] != 'POST' )
{
    header('Location: signin.php');
    exit();
}

//Si les variables ne sont pas créée
if ( !isset($_POST['login'],$_POST['password']) )
{
    header('Location: signin.php');
    exit();
}

//On supprime le message
unset($_SESSION['message']);

// Incusion de la bdd
$login = htmlspecialchars($_POST['login']);
$password = htmlspecialchars($_POST['password']);
$user = new User($login, $password);

//Test d'existance de l'utilisateur
$ok = false;
try{
    $ok =  $user->exists();
}
catch(Exception $e){
    $_SESSION["message"] = $e;
    header('Location: signin.php');
    exit();
}

if(!$ok){
    $_SESSION["message"] = "Mot de passe incorect";
    header('Location: signin.php');
    exit();
}
else {
    $_SESSION["user"] = $login;
    header('Location: welcome.php');
    exit();
}








