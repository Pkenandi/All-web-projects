//Utilisation en javascript 
//Pour testé si une donnée envoyer est une adresse email ou non 
var adr = prompt(' Saisir une adresse email : ');

if (/^[a-z0-9-_.]+@[a-z0-9-_.]\.[a-z]{2,6}/.test(adr))
    alert(" Email valide ")
else
    alert(' Email non valide ');

// Objet "RegExp"
// Methodes exec() : renvoi un bout de caractere trouvé

var sentence = "Si ton tonton";

var result = /\bton\b/.exec(sentence); // On cherche à récupérer le mot « ton »

if (result) { // On vérifie que ce n'est pas null
    alert(result); // Affiche « ton »
}

// -- Les parenthèses --
// Les parenthèses capturantes

var birth = 'Je suis né en mars';

/^Je suis né en (\S+)$/.exec(birth);

alert(RegExp.$1); // Affiche : « mars »

// en utilisant l'objet RegExp
var email = prompt("Entrez votre Email : ");

if (/^([a-z0-9._-]+)@([a-z0-9._-]+)\.([a-z]{2,6})$/.test(email)) {
    alert('Partie locale : ' + RegExp.$1 + '\nDomaine : ' + RegExp.$2 + '\nExtension : ' + RegExp.$3);
} else {
    alert('Adresse e-mail invalide !');
}

// --Rechercher et remplacer --

var sentence = 'Je m\'appelle Sébastien';

var result = sentence.replace(/Sébastien/, 'Johann');

alert(result); // Affiche : « Je m'appelle Johann »

// sans regex : 
var result = 'Je m\'appelle Sébastien'.replace('Sébastien', 'Johann');

alert(result); // Affiche : « Je m'appelle Johann »

//-- Option "g" :  permettant de faire une recherche multiple jusqu'a la fin de la chaine.

var sentence = 'Il s\'appelle Sébastien. Sébastien écrit un tutoriel.';

var result = sentence.replace(/Sébastien/g, 'Johann');

alert(result); // Il s'appelle Johann. Johann écrit un tutoriel.

// -- Rechercher et capturer --

var date = '05/26/2011';

date = date.replace(/^(\d{2})\/(\d{2})\/(\d{4})$/, 'Le $2/$1/$3'); //change le format de la date de m/j/a à j/m/a;

alert(date); // Le 26/05/2011;

// --Rechercher la position d'une occurrence--

var sentence = 'Si ton tonton';

var result = sentence.search(/\bton\b/);

if (result > -1) { // On vérifie que quelque chose a été trouvé
    alert('La position est ' + result); // 3
}

// -- Récupérer toutes les occurrences --

var sentence = 'Si ton tonton tond ton tonton, ton tonton tondu sera tondu';

var result = sentence.match(/\btonton\b/g);

alert('Il y a ' + result.length + ' "tonton" :\n\n' + result);

// -- Couper avec une regex --

var family = 'Guillaume,Pauline;Clarisse:Arnaud;Benoît;Maxime';
var result = family.split(/[,:;]/);

alert(result);