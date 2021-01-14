<?php

$objetpdo = new PDO('mysql:host=localhost;dbname=compte','root','');

$pdostat = $objetpdo->prepare('INSERT INTO enregistrement VALUES (NULL,:Nom,:Prenom,:Email,:Mpass,:ConfirmPassword)');

$pdostat->bindValue(':Nom',$_POST['nom'],PDO::PARAM_STR);
$pdostat->bindValue(':Prenom',$_POST['prenom'],PDO::PARAM_STR);
$pdostat->bindValue('Email',$_POST['Email'],PDO::PARAM_STR);
$pdostat->bindValue('Mpass',$_POST['password'],PDO::PARAM_STR);
$pdostat->bindValue('ConfirmPassword',$_POST['Cpassword'],PDO::PARAM_STR);

$test = $pdostat->execute();

if($test)
{
    $rep = " Compte creer ";
}else {
    $rep = " Echec de la creation" ;
}

?>