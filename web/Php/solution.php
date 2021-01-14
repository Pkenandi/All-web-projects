<?php
if ($_POST['password'] == $_POST['password1']) 
{
 echo "Bienvenu  "; 
 echo $_POST['nom'];
 echo " Votre mot de passe est ";
 echo $_POST['password'];

}else {
    echo ' reverifiez votre mot de passe de confirmation';
}
 ?>
