
<html>

    <head>
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="login-page">
            <div class="form">
                <form method="post" action="authenticate.php">
                    <input type="text" placeholder="Identifiant" name="username"/>
                    <input type="password" placeholder="Mot de passe" name="password"/>
                    <button type="submit">login</button>
                    <p class="message">Not registered? <a href="#">Create an account</a></p>
                </form>
            </div>
        </div>
        <script src="js/script.js"></script>
        <script type="text/javascript" src="src/jquery.js"></script>
    </body>

</html>
