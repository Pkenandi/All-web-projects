if (/raclette/.test('Je mangerais bien une raclette savoyarde !')) {
    alert('Ça semble parler de raclette');
} else {
    alert('Pas de raclette à l\'horizon');
}

//ou encore et pour evité la casse des maj et min, on ajoute 'i' apres le slash ;

var mot = /prince/i;

if (mot.test('Mon nom est prince'))
    alert(mot + ' existe dans la phrase')
else
    alert(mot + "n'existe pas dans la phrase ");

//pour la recherche d'un mot ou un autre en mm temps;

if (/Raclette|Tartiflette/i.test('Je mangerais bien une tartiflette savoyarde !')) {
    alert('Ça semble parler de trucs savoyards');
} else {
    alert('Pas de plats légers à l\'horizon');
}

//Début et fin de chaîne (^ = debut, $ = fin d'une phrase)
if (/^Raclette Tartiflette$/i.test('Je mangerais bien une tartiflette savoyarde !')) { //renverra 'faux'
    alert('Ça semble parler de trucs savoyards');
} else {
    alert('Pas de plats légers à l\'horizon');
}

//Les caractères et leurs classes
var condition = /pr[ie]nce/;
if (condition.test('Il doit etre un prince peut etre '))
    alert(' Exacte ')
else
    alert('non exacte ');
// pour trouver un caracteere quelconque "/pr.nce/i";

//--Les quantificateurs--
/*
    Les trois symboles quantificateurs :

? : ce symbole indique que le caractère qui le précède peut apparaître 0 ou 1 fois ;

+ : ce symbole indique que le caractère qui le précède peut apparaître 1 ou plusieurs fois ;

* : ce symbole indique que le caractère qui le précède peut apparaître 0, 1 ou plusieurs fois.
*/


// /raclett?e/, : que le caractere 't' venant juste avant ? peut apparaitre 0 ou 1 fois max ;
// /raclet+e/ //: que le caractere 't' venant juste vant + peut apparaitre 1 ou 2 fois max ;
// /raclett*e/ //: que le caractere 't' venant juste vant + peut apparaitre 0, 1  ou +++ fois;

//-- Les accolades --
/* 
    {n} : le caractère est répété n fois ;

    {n,m} : le caractère est répété de n à m fois. Par exemple, si on a {0, 5}, le caractère peut être présent de 0 à 5 fois ;

    {n,} : le caractère est répété de n fois à l'infini.
*/

// Hellowwwwwwwww : /Hellow+/ true;
// Goooooogle : /Go{2,}gle/ true;
// Le 1er septembre : /Le [1-9][a-z]{2,3} septembre/ true
// Le 1er septembre : /Le [1-9][a-z]{2,3}[a-z]+/ false