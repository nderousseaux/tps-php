<?php

if($_SERVER["REQUEST_METHOD"] != "POST"){
        header('Location: http://127.0.0.1/W31/TP/TP1/Ex2/formulaire.php');
    }



$item = "<p> Salut </p>";

if(isset($_POST['nb'])){
    $nb = ((int)$_POST['nb']);


    for($i=0; $i<$nb; $i++){
        echo $item;
    }
}
?>