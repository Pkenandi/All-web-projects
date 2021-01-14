// Accéder aux caractères;

var myString = 'Pauline';

var first = myString.charAt(0); // P
var last = myString.charAt(myString.length - 1); // e

//Créer une chaîne de caractères depuis une chaîne ASCII

var myString = String.fromCharCode(74, 97, 118, 97, 83, 99, 114, 105, 112, 116); // le mot JavaScript en ASCII

alert(myString); // Affiche : « JavaScript »

//pour savoir quelle touche l'utilisateur a pressé

/*<textarea onkeyup = "listenKey(event)" > < /textarea>*/

function listenKey(event) {

    var key = event.keyCode;

    alert('La touche numéro ' + key + ' a été pressée. Le caractère ' + String.fromCharCode(key) + ' a été inséré.');
}

//Rechercher, couper et extraire

//Connaître la position avec indexOf() et lastIndexOf()

var myString = 'Le JavaScript est plutôt cool';
var result = myString.indexOf('JavaScript');

if (result > -1) {
    alert('La chaîne contient le mot "JavaScript" qui débute à la position ' + result);
}

//Couper une chaîne en un tableau avec split()

var myCSV = 'Pauline,Guillaume,Clarisse'; // CSV = Comma-Separated Values

var splitted = myCSV.split(','); // On coupe à chaque fois qu'une virgule est rencontrée

alert(splitted.length); // 3

/*

match() : retourne un tableau contenant toutes les occurrences recherchées ;

search() : retourne la position d'une portion de texte (semblable à indexOf() mais avec une regex);

split() : la fameuse méthode split(), mais avec une regex en paramètre ;

replace() : effectue un rechercher/remplacer.

*/