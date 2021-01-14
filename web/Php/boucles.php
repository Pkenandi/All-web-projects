<?php

//while
$nombre_de_lignes = 1;

while ($nombre_de_lignes <= 100)
{
    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
    $nombre_de_lignes++;
}
?>

<?php

//for
for ($nombre_de_lignes = 1; $nombre_de_lignes <= 100; $nombre_de_lignes++)
{
    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
}
?>