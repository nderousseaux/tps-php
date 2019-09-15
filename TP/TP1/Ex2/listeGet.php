<?php

$item = "<p> Salut </p>";

if(isset($_GET['nb'])){
    $nb = ((int)$_GET['nb']);


    for($i=0; $i<$nb; $i++){
        echo $item;
    }
}





?>