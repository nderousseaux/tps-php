<?php

if(!isset($_COOKIE["counter"])){
    echo "la";
    setcookie("counter", 0, time()+60*60*24*10);
}
setcookie("counter", $_COOKIE["counter"]+1, time()+60*60*24*10);
echo $_COOKIE["counter"];?>

<body>
    <br>
    <a href="http://127.0.0.1/W31/TP/TP1/Ex4/resetCounter.php">Reset</a>
</body>



