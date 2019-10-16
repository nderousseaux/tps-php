<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Signup</title>
	</head>
	<body>
		<h1>Signup</h1>
		<form action="adduser.php" method="post">
			<label for="login">Login</label>       <input type="text"     id="login"    name="login"    required autofocus>
			<label for="password">Password</label> <input type="password" id="password" name="password" required>
            <label for="password1">Re-Password</label> <input type="password" id="password1" name="password1" required>
			<input type="submit" value="Signup">
		</form>
<?php if ( isset($_SESSION['messageA']) && !empty($_SESSION['messageA']) ) { ?>
		<section>
			<p><?= $_SESSION['messageA']; ?></p>
		</section>
<?php } ?>
	</body>
</html>
