<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Le tchat en AJAX !</title>
</head>

<body>
    <div id="bloc_tchat">
        <div id="messages">
            <!-- les messages du tchat -->
            
            <?php

            // on se connecte à notre base de données
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=tchat', 'root', '');
            }
            catch (Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }

            // on récupère les 10 derniers messages postés
            $requete = $bdd->query('SELECT * FROM messages ORDER BY id DESC LIMIT 0,10');

            while($donnees = $requete->fetch()){
                // on affiche le message (l'id servira plus tard)
                echo "<p id=\"" . $donnees['id'] . "\">" . $donnees['pseudo'] . " dit : " . $donnees['message'] . "</p>";
            }

            $requete->closeCursor();

        ?>

        </div>

        <form method="POST" action="miniTchat.php">
            Pseudo : <input type="text" name="pseudo" id="pseudo" /><br /> Message : <textarea name="message" id="message"></textarea><br />
            <input type="submit" name="submit" value="Envoyez votre message !" id="envoi" style="background-color: black; color: blueviolet;" />
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
        $('#envoi').click(function(e) {
            e.preventDefault(); // on empêche le bouton d'envoyer le formulaire

            var pseudo = encodeURIComponent($('#pseudo').val()); // on sécurise les données
            var message = encodeURIComponent($('#message').val());

            if (pseudo != "" && message != "") { // on vérifie que les variables ne sont pas vides
                $.ajax({
                    url: "traitement.php", // on donne l'URL du fichier de traitement
                    type: "POST", // la requête est de type POST
                    data: "pseudo=" + pseudo + "&message=" + message // et on envoie nos données
                });
                $('#messages').append("<p>" + pseudo + " dit : " + message + "</p>"); // on ajoute le message dans la zone prévue
            }

        });

        function charger()
        {
            setTimeout( function()
            {
                // on lance une requête AJAX
                $.ajax({
                    url : "charger.php",
                    type : GET,
                    success : function(html){
                        $('#messages').prepend(html); // on veut ajouter les nouveaux messages au début du bloc #messages
                    }
                });

                charger(); // on relance la fonction

            }, 5000); // on exécute le chargement toutes les 5 secondes

        }

charger();

        
    </script>
</body>

</html>