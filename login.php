<html>
    <head>
        <link href="css/style1.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <?php include './_menu.php'; ?>
        <div class="formulaire">
            <h1>Identification</h1>
            <form method="POST" action="loginPOST.php?pageActuelle=index">
                <label>Login</label>
                <input id="login" name="login" type="text"/>
                <br>
                <label>M-d-p</label>
                <input id="mdp" name="mdp" type="password" />
                <br>
               
                
                <input type="submit" value="Connexion"/>
            </form>
        </div>
    </body>
</html>
