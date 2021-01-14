<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Creation d'un compte</title>
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <link rel="stylesheet" href="compte.css" media="screen">
</head>

<body>
    <div id="bloc_page">
        <div id="bloc">
            <p>
                <a href="../principal/principal.php"><img src="../images/graciasCompte.jpg" alt="LogoCompte" title="Acceuil"></a>
            </p>
            <div class="form">
                <form method="POST" action="solution.php">

                    <h3> Création d'un compte </h3>
                    <label for="nom"> Nom  </label> <br><input type="text" name="nom" id="nom" required><br/> <br/>
                    <label for="prenom"> Prénom   </label> <br><input type="text" name="prenom" id="prenom" required><br/> <br/>
                    <label for="Email"> E-mail   </label> <br> <input type="email" name="Email" id="Email" required><br/> <br/>
                    <label for="password"> Mot de passe   </label> <br><input type="password" name="password" required id="password" placeholder="au moins 6 caracteres"><br/> <br/>
                    <label for="password1"> Confirmer le mot de passe   </label> <br> <input type="password" name="password1" required id="password1"><br/> <br/>

                    <input type="submit" value="Créer" id="submit">

                </form>
                <p> <strong>-----</strong> Vous possédez déjà un compte ? <a href="connection.php"> Identifiez-vous </a> <strong>-----</strong> </p>
            </div>

            <footer>
                <div id="piedPage">
                    <ul>
                        <li><a href="#"> Aide ? </a></li>
                        <li><a href="#"> Contactez-nous </a></li>
                        <li><a href="#"> Fonctionnement </a></li>
                        <li><a href="#"> A propos </a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>