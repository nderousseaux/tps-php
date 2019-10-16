<?php
	session_start();
	if ( !isset($_SESSION['user']) )
	{
        header('Location: signin.php');
        exit();
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My account</title>
    </head>
    <body>
        <p>
			Hello <?= $_SESSION['user']; ?> !<br>
			Welcome on your account.
		</p>
        <p><a href="signout.php">Sign out</a></p>
        <p><a href="formpassword.php">Change password</a></p>
        <p><a href="deleteuser.php">Supprimer le compte</a></p>
    </body>
</html>
