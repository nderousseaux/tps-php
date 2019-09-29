<?php

include "users.php";
  if(($_SERVER["REQUEST_METHOD"] != "POST") or !isset($_POST["username"]) or !isset($_POST["password"])){
    header('Location: http://127.0.0.1/W31/TP/TP2/signin.php');
}

  if(!is_string($_POST["username"]) or ($_POST["username"] == "") or ($_POST["password"] == "")){
      echo "Nom d'utilisateur invalide ou mot de passe invalide";
      header('Location: http://127.0.0.1/W31/TP/TP2/signin.php');
  }

  else if(array_key_exists($_POST["username"], $users )){
      if($users[$_POST["username"]] == $_POST["password"]){
          session_start();
          $_SESSION["login"]= $_POST["username"];
          header('Location: http://127.0.0.1/W31/TP/TP2/welcome.php');
      }
      else{
          echo $users[$_POST["username"]];
          echo " \n Mot de passe incorrect";
          header('Location: http://127.0.0.1/W31/TP/TP2/signin.php');
      }

  }
  else{
      echo "L'utilisateur n'existe pas !";
      header('Location: http://127.0.0.1/W31/TP/TP2/signin.php');
  }

  ?>