<html lang="français">
<head>
    <title>bonjourPost</title>
    <?php  if($_SERVER["REQUEST_METHOD"] != "POST"){
        header('Location: http://127.0.0.1/W31/TP/TP1/Ex1/formulaire.html');
    }
    ?>
</head>
<body>



    <?php echo $_SERVER["REQUEST_METHOD"] ?>
    <?php echo 'Bonjour ' .$_POST['firstname']. ' ' .$_POST['lastname'] ?>
    
</body>
</html>c