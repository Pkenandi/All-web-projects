<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <title> Création d'une annonce </title>
    <link rel="stylesheet" href="annonce.css" media="screen" />
</head>

<body>
    <div class="bloc_page">
        <div id="logo">
            <p>
                <a href="../principal/principal.html"><img src="../images/graciasCompte.jpg" alt="logo"></a>
            </p>
        </div>
        <div id="form">
            <h3>----- Soumettre votre annonce ----- </h3>
            <h2>-- Détails de l'annonce --</h2>

            <form method="POST" action="#">
                <label for="titre"> Titre </label> <br> <input required type="text" name="titre" id="titre" placeholder="Titre l'annonce..."> <br><br>
                <label for="categorie"> Categorie </label> <br>
                <select required name="categorie" id="categorie">
                        <option value="Immobilier"> Immobilier </option>
                        <option value="Vehicules"> Vehicules <option>
                        <option value="Informatique"> Informatique </option>
                        <option value="Divertissement"> Divertissement </option>
                        <option value="Emplois"> Emplois et services </option>
                        <option value="Habillement"> Habillement </option>               
                </select> <br><br>
                <label for="date"> Date </label> <br> <input type="date" name="date" id="date" placeholder="Ex: 02/06/1998"><br><br>
                <label for="Prix"> Prix </label> <br> <input required type="number" name="Prix" id="Prix">
                <select required name="devise" id="devise">
                    <option value="FC"> Franc Congolais </option>
                    <option value="FCA"> FCFA</option>
                    <option value="$"> Dollar Americain </option>
                    <option value="£"> Euro </option>
                </select><br><br>
                <label for="pertinance"> Pertinance </label> <br>
                <select name="pertinance" id="pertinance">
                    <option value="vente"> A vendre </option>
                    <option value="troc"> Troc et échange </option>
                    <option value="urgent"> Urgent </option>
                </select><br><br>
                <label for="description" id="dpt"> Description </label> <br> <textarea name="description" id="description" cols="30" rows="10" placeholder="Decrire votre annonce..."> </textarea><br><br>
                <label for="adresse" id="adr"> Adresse </label> <br> <textarea name="adresse" id="adresse" cols="30" rows="10" placeholder="Votre adresse..."></textarea><br><br>
                <label for="numero"> Numero de telephone </label> <br> <input required type="number" name="numero" id="numero"><br><br>
                <label for="Email"> E-mail </label> <br> <input type="email" name="Email" id="Email"><br><br>

                <input type="submit" value="Poster" id="submit">
            </form>

        </div>

     <?php include('../principal/footer.php'); ?>
    </div>
</body>

</html>