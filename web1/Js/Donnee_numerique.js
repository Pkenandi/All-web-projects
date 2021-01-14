// -- L'objet Number --

/*
    NaN : vous connaissez déjà cette propriété qui signifie Not A Number et qui permet, généralement, d'identifier l'échec d'une conversion de chaîne de caractères en un nombre. À noter que cette propriété est aussi disponible dans l'espace global. Passer par l'objet Number pour y accéder n'a donc que peu d'intérêt, surtout qu'il est bien rare d'utiliser cette propriété, car on lui préfère la fonction isNaN(), plus fiable.

    MAX_VALUE : cette propriété représente le nombre maximum pouvant être stocké dans une variable en JavaScript. Cette constante peut changer selon la version du JavaScript utilisée.

    MIN_VALUE : identique à la constante MAX_VALUE sauf que là il s'agit de la valeur minimale.

    POSITIVE_INFINITY : il s'agit ici d'une constante représentant l'infini positif. Vous pouvez l'obtenir en résultat d'un calcul si vous divisez une valeur positive par 0. Cependant, son utilisation est rare, car on lui préfère la fonction isFinite(), plus fiable.

    NEGATIVE_INFINITY : identique à POSITIVE_INFINITY sauf que là il s'agit de l'infini négatif. Vous pouvez obtenir cette constante en résultat d'un calcul si vous divisez une valeur négative par 0
 */
// -- Arrondir et tronquer --
//floor() :  arrondi par defaut;

Math.floor(33.15); // Retourne : 33
Math.floor(33.95); // Retourne : 33
Math.floor(34); // Retourne : 34

//ceil() : arrondi par excès 

Math.ceil(33.15); // Retourne : 34
Math.ceil(33.95); // Retourne : 34
Math.ceil(34); // Retourne : 34

//around : combine le 2 

Math.round(33.15); // Retourne : 33
Math.round(33.95); // Retourne : 34
Math.round(34); // Retourne : 34

// -- Calculs de puissance et de racine carrée --

Math.pow(3, 2); // Le premier paramètre est la base, le deuxième est l'exposant
// Ce calcul donne donc : 3 * 3 = 9
Math.sqrt(9); // Retourne : 3

// -- Les cosinus et sinus --
Math.cos(Math.PI); // Retourne : -1
Math.sin(Math.PI); // Retourne : environ 0

// -- Retrouver les valeurs maximum ou minimum --
Math.max(42, 4, 38, 1337, 105); // Retourne : 1337
Math.min(42, 4, 38, 1337, 105); // Retourne : 4

// -- Choisir un nombre aléatoire --
alert(Math.random()); // Retourne un nombre compris entre 0 et 1, trés limité comme fonction.
// ou encore manuellement

function rand(min, max, integer) { // avec 'integer' qui permet de fixer si on veut un nombre entier ou pas.

    if (!integer) {
        return Math.random() * (max - min) + min;
    } else {
        return Math.floor(Math.random() * (max - min + 1) + min);
    }

}