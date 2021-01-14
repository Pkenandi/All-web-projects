<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <title> Gracias </title>
    <link rel="stylesheet" href="principal.css" media="screen" />
    <link rel="stylesheet" href="animation/animation.html" media="screen" />
    <script src="principal.js">
    </script>
</head>

<body>
    <header id="haut">
        <div id="titre_principal">
            <a href="../principal/principal.html">
                <img src="../images/graciasCompte.jpg" alt="logo">
            </a>
        </div>
        <div id="reseach">
            <form method="POST" action="#">
                <label for="recherche" id="clicLabel"> Recherche : </label><input type="search" placeholder="Recherche... " id="recherche" name="recherche" size="30" maxlength="10">
            </form>
        </div>
        <div id="Connect_Annonce">
            <h3 id="welcom"> Bienvenue sur <strong>Gracias</strong></h3>
            <ul>
                <li><a href="../creation/connection.php"> Se connecter </a></li>
                <li><a href="../creation/compte.php"> Créer un compte </a></li>
                <li><a href="../creation/annonce.php"> Créer une Annonce </a></li>
            </ul>
        </div>

        <div id="banniere_image">
            <div id="banniere_description">
                <a href="principal.html" class="bouton_rouge"> <img src="../images/flecheblanchedroite.png" alt="Accueil" /></a>
            </div>
        </div>
    </header>
    <div id="bloc_page">

        <p id="TriBloc">
            <label for="Tri" id="Trilabel"> Trier par : </label>
            <select name="Tri" id="Tri"> 
                <option value="Recent" selected> Plus Recent </option>
                <option value="Croissant"> Prix croissant </option>
                <option value="Decroissant"> Prix decroissant </option>
            </select>
        </p>

        <section>
            <script>
                var i = 0,
                    image = [],
                    time = 4000;

                image[0] = 'animation/header5.jpg';
                image[1] = 'animation/header6.jpeg';
                image[2] = 'animation/header7.jpg';
                image[3] = 'animation/header8.jpg';
                image[4] = 'animation/header9.jpg';

                function animation() {
                    document.slide.src = image[i];

                    if (i < image.length - 1)
                        i++;
                    else
                        i = 0;

                    setTimeout("animation()", time);
                }

                window.onload = animation;
            </script>

            <img name="slide" width="1000" height="1000" id="slide" />

            <nav>
                <h3>Toutes nos categories </h3>
                <ul>
                    <li>
                        <a href="#"><img src="../images/immo.jpg" alt="Immobilier"> Immobilier </a>
                    </li>
                    <li>
                        <a href="#"><img src="../images/vehicule.jpg" alt="Vehicules"> Vehicules </a>
                    </li>
                    <li>
                        <a href="#"><img src="../images/maison.png" alt="Maison"> Maison </a>
                    </li>
                    <li>
                        <a href="#"><img src="../images/info.png" alt="Informatique"> Informatique </a>
                    </li>
                    <li>
                        <a href="#"><img src="../images/loisirs.jpg" alt="Divertissement"> Divertissement </a>
                    </li>
                    <li>
                        <a href="#"><img src="../images/services.jpg" alt="services"> Emplois et services </a>
                    </li>
                    <li>
                        <a href="#"><img src="../images/habillement.jpg" alt="Habillements"> Habillements </a>
                    </li>
                    <li><a href="#"> ... </a></li>
                </ul>
            </nav>

            <aside>
                <h3> Retrouvez-nous : </h3>
                <p>
                    <a href="facebook.com"><img src="../images/facebook.png" alt="Facebook" title="Facebook"></a>
                    <a href="twitter.com"><img src="../images/twitter.png" alt="Twitter" title="Twitter"></a>
                    <a href="instagram.com"><img src="../images/Instagram.jpg" alt="Instagram" title="Insta"></a>
                </p>
            </aside>
        </section>

        <footer>
            <div id="piedPage">
                <ul>
                    <li><a href="#"> Aide ? </a></li>
                    <li><a href="#"> Contactez-nous </a></li>
                    <li><a href="#"> Fonctionnement </a></li>
                    <li><a href="#"> A propos </a></li>
                </ul>
            </div>
        </footer>
    </div>

</body>

</html>