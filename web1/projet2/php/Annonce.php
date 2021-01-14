<?php 

$objetpdo = new PDO('mysql:host=localhost;dbname=compte','root','root');

$pdostat = $objetpdo->prepare('INSERT INTO annonce VALUES (NULL,:Titre,:Categorie,:Dates,:Prix,:Devise,:Pertinance,:Images,:Descriptions,:Adresse,:Numero,:Email)');

$pdostat->bindValue(':Titre', $_POST['titre'], PDO::PARAM_STR);
    $pdostat->bindValue(':Categorie', $_POST['categorie'], PDO::PARAM_STR); 
        $pdostat->bindValue(':Dates', $_POST['date'], PDO::PARAM_STR);
            $pdostat->bindValue(':Prix', $_POST['Prix'], PDO::PARAM_STR);
                $pdostat->bindValue(':Devise', $_POST['devise'], PDO::PARAM_STR);
                $pdostat->bindParam(':Images', $_POST['image'], PDO::PARAM_STR);
            $pdostat->bindValue(':Description', $_POST['description'], PDO::PARAM_STR);
        $pdostat->bindValue(':Adresse', $_POST['adresse'], PDO::PARAM_STR);
    $pdostat->bindParam(':Numero', $_POST['numero'], PDO::PARAM_INT);
$pdostat->bindValue(':Email', $_POST['Email'], PDO::PARAM_STR);


$test = $pdostat->execute();

if ($test) {
    $rep = " Votre annonce a eté bien creer ";

}else 
{
    $rep = " Echec de creation ";
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <title> Creation d'une annonce </title>
</head>

<body>
    <p> <?php echo $rep ?>
    </p>
</body>

</html>