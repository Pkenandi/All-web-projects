<?php
// Un array numeroté

$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');

$size = sizeof($prenoms);

for ($i=0; $i < $size; $i++) { 
    echo $prenoms[$i];
}


// Un array associatif

$prenoms = array (
    'Nom' => 'prince ',
    'prenom ' => 'kenandi',
    'age' => '25'
);

foreach ($prenoms as $i) {
    echo $i;
}

?>

<?php
//Recherche
//Vérifier si une clé existe dans l'array :array_key_exists

$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

if (array_key_exists('nom', $coordonnees))
{
    echo 'La clé "nom" se trouve dans les coordonnées !';
}

if (array_key_exists('pays', $coordonnees))
{
    echo 'La clé "pays" se trouve dans les coordonnées !';
}

?>


<?php

//Vérifier si une valeur existe dans l'array :in_array

$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

if (in_array('Myrtille', $fruits))
{
    echo 'La valeur "Myrtille" se trouve dans les fruits !';
}

if (in_array('Cerise', $fruits))
{
    echo 'La valeur "Cerise" se trouve dans les fruits !';
}
?>

<?php
//Récupérer la clé d'une valeur dans l'array :array_search

$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

$position = array_search('Fraise', $fruits);
echo '"Fraise" se trouve en position ' . $position . '<br />';

$position = array_search('Banane', $fruits);
echo '"Banane" se trouve en position ' . $position;
?>