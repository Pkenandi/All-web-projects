//Les methodes 
// Concatenation

var myArray = ['test1', 'test2'] + ['test3', 'test4'];
alert(myArray);

// avec concat():
var myArray = ['test1', 'test2'].concat(['test3', 'test4']);
alert(myArray);

//parcours d'un tableau avec forEach() qui a 3 parametres :
/**
 * Le premier contient la valeur contenue à l'index actuel ;

  Le deuxième contient l'index actuel ;

  Le troisième est une référence au tableau actuellement parcouru.
 */

var myArray = ["C'est", "un", "test"];

myArray.forEach(function(value, index, array) {
    alert(
        'Index : ' + index + '\n' +
        'Valeur : ' + value
    );
});

//Recherche d'un element
// Avec indexOf() :

var element2 = ['test'],
    myArray = ['test', element2];

alert(myArray.indexOf(element2)); // Affiche : 1

// -- Tri d'un tableau ;

// La méthode reverse() 

var myArray = [1, 2, 3, 4, 5];

myArray.reverse();

alert(myArray); // Affiche : 5,4,3,2,1

// La méthode sort() tri selon l'ordre alphabetique

var myArray = [3, 1, 5, 10, 4, 2];

myArray.sort();

alert(myArray); // Affiche : 1,10,2,3,4,5

// en utilisant le deuxieme argument de sort() qui es un fonction qu'on definie : 
var myArray = [3, 1, 5, 10, 4, 2];

myArray.sort(function(a, b) {

    if (a < b) {
        return -1;
    } else if (a > b) {
        return 1;
    } else {
        return 0;
    }

});

alert(myArray); // Affiche : 1,2,3,4,5,10

//Extraire une partie d'un tableau avec slice()

var myArray = [1, 2, 3, 4, 5];

alert(myArray.slice(1, 3)); // Affiche : 2,3
alert(myArray.slice(2)); // Affiche : 3,4,5

// ou encore 

var myArray = [1, 2, 3, 4, 5];

alert(myArray.slice(1, -1)); // Affiche : 2,3,4

// -- Remplacer une partie d'un tableau avec splice() --

var myArray = [1, 2, 3, 4, 5];

var result = myArray.splice(1, 2); // On retire 2 éléments à partir de l'index 1

alert(myArray); // Affiche : 1,4,5

alert(result); // Affiche : 2,3

// Piles et Files 
/**
 *  push() : ajoute un ou plusieurs éléments à la fin du tableau (un argument par élément ajouté) et retourne la nouvelle taille de ce dernier.

    pop() : retire et retourne le dernier élément d'un tableau.

    unshift() : ajoute un ou plusieurs éléments au début du tableau (un argument par élément ajouté) et retourne la nouvelle taille de ce dernier.

    shift() : retire et retourne le premier élément d'un tableau.
 */

// -- Les piles --

// avec push() et pop()
var myArray = ['Livre 1'];

var result = myArray.push('Livre 2', 'Livre 3');

alert(myArray); // Affiche : « Livre 1,Livre 2,Livre 3 »
alert(result); // Affiche : « 3 »

result = myArray.pop();

alert(myArray); // Affiche : « Livre 1,Livre 2 »
alert(result); // Affiche : « Livre 3 »

// avec shift() et unshift() 
var myArray = ['Livre 3'];

var result = myArray.unshift('Livre 1', 'Livre 2');

alert(myArray); // Affiche : « Livre 1,Livre 2,Livre 3 »
alert(result); // Affiche : « 3 »

result = myArray.shift();

alert(myArray); // Affiche : « Livre 2,Livre 3 »
alert(result); // Affiche : « Livre 1 »

// -- Les files --

// avec push() et shift()
var myArray = ['Fanboy 1', 'Fanboy 2'];

var result = myArray.push('Fanboy 3', 'Fanboy 4');

alert(myArray); // Affiche : « Fanboy 1,Fanboy 2,Fanboy 3,Fanboy 4 »
alert(result); // Affiche : « 4 »

result = myArray.shift();

alert(myArray); // Affiche : « Fanboy 2,Fanboy 3,Fanboy 4 »
alert(result); // Affiche : « Fanboy 1 »

// avec unshift() et pop()
var myArray = ['Fanboy 3', 'Fanboy 4'];

var result = myArray.unshift('Fanboy 1', 'Fanboy 2');

alert(myArray); // Affiche : « Fanboy 1,Fanboy 2,Fanboy 3,Fanboy 4 »
alert(result); // Affiche : « 4 »

result = myArray.pop();

alert(myArray); // Affiche : « Fanboy 1,Fanboy 2,Fanboy 3 »
alert(result); // Affiche : « Fanboy 4 »