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
		<title>Changer de mot de passe</title>
	</head>
	<body>
		<h1>Changer de mot de passe</h1>
		<form action="changepassword.php" method="post">
			<label for="password">password</label> <input type="password"     id="password"    name="password"required autofocus>
			<label for="repassword">repassword</label> <input type="password" id="repassword" name="repassword" required>
			<input type="submit" value="Valider le changement">
		</form>
<?php if ( isset($_SESSION['message']) && !empty($_SESSION['message']) ) { ?>
		<section>
			<p><?= $_SESSION['message']; ?></p>
		</section>
<?php } ?>
	</body>
</html>

