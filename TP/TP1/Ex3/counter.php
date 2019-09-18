<?php
session_start();
if(!isset($_SESSION["counter"])){
    $_SESSION["counter"] = 0;
}

$_SESSION["counter"]++;
echo $_SESSION["counter"];?>

<body>
    <br>
    <a href="http://127.0.0.1/W31/TP/TP1/Ex3/resetCounter.php">Reset</a>
</body>



