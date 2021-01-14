// L''objet Date
// Le constructeur

// les 4 maniere de creer une instance

new Date();
new Date(timestamp);
new Date(dateString);
new Date(année, mois, jour, [heure, minutes, secondes, millisecondes]);

// Les méthodes statiques
// Parse();
var timestamp = Date.parse('Sat, 04 May 1991 20:00:00 GMT+02:00');

alert(timestamp); // Affiche : 673380000000

// -- Les méthodes des instances de l'objet Date --

/**
getFullYear() : renvoie l'année sur 4 chiffres ;

getMonth() : renvoie le mois (0 à 11) ;

getDate() : renvoie le jour du mois (1 à 31) ;

getDay() : renvoie le jour de la semaine (0 à 6, la semaine commence le dimanche) ;

getHours() : renvoie l'heure (0 à 23) ;

getMinutes() : renvoie les minutes (0 à 59) ;

getSeconds() : renvoie les secondes (0 à 59) ;

getMilliseconds() : renvoie les millisecondes (0 à 999).
 */

var myDate = new Date('Sat, 04 May 1991 20:00:00 GMT+02:00');

alert(myDate.getMonth()); // Affiche : 4
alert(myDate.getDay()); // Affiche : 6

//Mise en pratique : calculer le temps d'exécution d'un script

var firstTimestamp = new Date().getTime(); // On obtient le timestamp avant l'exécution

slow(); // La fonction travaille…

var secondTimestamp = new Date().getTime(), // On récupère le timestamp après l'exécution
    result = secondTimestamp - firstTimestamp; // On fait la soustraction

alert("Le temps d'exécution est de : " + result + " millisecondes.");

// -- Les fonctions temporelles --
// setTimeout() : permet de déclencher un code au bout d'un temps donné et setInterval() : déclenche un code à un intervalle régulier que vous aurez spécifié.