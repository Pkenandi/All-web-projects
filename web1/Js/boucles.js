    /*
            while (true) {
                nicks = prompt('Saisir le prenom : ');

                if (nicks)
                    nick += nicks + ' ';
                else
                    break;

            }

            alert(nick);
            */

    for (var nick = '', nicks; true;) {
        nicks = prompt('Nom :');

        if (nicks)
            nick += nicks + ' ';
        else
            break;
    }

    alert(nick);