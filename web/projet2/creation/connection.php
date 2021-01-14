<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <title>Se connecter</title>
    <link rel="stylesheet" href="connection.css" media="screen" />
</head>

<body>
    <div id="bloc_general">
        <div id="bloc_page">
            <p>
                <a href="../principal/principal.html"> <img src="../images/graciasCompte.jpg" alt="logo"></a>
            </p>
        </div>
        <div id="bloc">
            <div class="form">
                <form method="POST" action="#">

                    <h3> Se connecter </h3>
                    <label for="compte"> Compte </label> <br> <input type="email" name="compte" id="compte" placeholder="E-mail"><br><br>
                    <label for="password"> Mot de passe </label> <br> <input type="password" name="password" id="password" placeholder="password"> <br/><br/>
                    <input type="checkbox" name="checked" id="checked"> <label for="checked"> Restez connecté.<a href="#"> Détails </a></label> <br><br>
                    <input type="submit" name="submit" id="submit" value="Se connecter ">
                    <a id="forget" href="#"> Mot de passe oublié ?</a></p>
                </form>
                <p> <strong>-----</strong> Nouveau ? <a href="compte.html"> Créer votre compte. </a> <strong>-----</strong> </p>
            </div>

            <?php include('../principal/footer.php'); ?>
            
        </div>
    </div>
</body>

</html>