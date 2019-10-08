<?php
session_start();
session_destroy();
header('Location: http://127.0.0.1/W31/TP/TP2/signin.php');

?>