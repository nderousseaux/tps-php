<?php

session_start();
if(!isset($_SESSION["login"])){
    header('Location: http://127.0.0.1/W31/TP/TP2/sigin.php');
}

else{
    echo "Bienvenue" .$_SESSION["login"];
}

?>


<a href="signout.php">Se déconnecter </a>
