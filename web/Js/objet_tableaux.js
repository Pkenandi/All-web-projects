var nom = ['prince', 'cecile', 'grace', 'benedicte'];
var list = 'j aimerai rentrer chez moi ',
    Narray, Narray2;

nom.unshift('theophile', 'nestor'); // ajoute au debut de la chaine

alert(nom);
nom.shift(); //supprime au debut de la chaine
alert(nom);

for (var i = 0; i < nom.length; i++) // parcour d'un tableau
    alert(nom[i]);

Narray = list.split(' '); //permet de couper une chaine de caractere a chaque espace et stock dans une variable;
alert(Narray);

Narray2 = Narray.join('-');
alert(Narray2);

//objets litteraux def
var famille = {
    oncle: 'emma',
    tente: 'berthellla',
    frere: 'Winner'
};

for (var i in famille) { // parcours d'un objet
    alert(famille[i]);
}