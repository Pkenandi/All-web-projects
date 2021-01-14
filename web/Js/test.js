var age;

age = parseInt(prompt('Saisir votre age : '));

if (age == 1 || age <= 17)
    alert(" << vous n'etes pas encore majeur. >>");
else
if (age >= 18 || age <= 49)
    alert(" << Vous etes majeur mais pas senior. >>");
else
if (age >= 50 || age <= 59)
    alert(" << Vous etes senior mais pas encore retraité. >>");
else
if (age >= 60 || age <= 120)
    alert(" << Vous etes retraité, profitez de votre temps libre. >> ");