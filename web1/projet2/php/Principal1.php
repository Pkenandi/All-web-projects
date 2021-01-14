<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <title> Gracias </title>
    <link rel="stylesheet" href="Principal1.css" media="screen" />
    <link rel="stylesheet" href="../../principal/animation/animation.html" media="screen" />
    <script src="principal.js">
    </script>
</head>

<body>
    <header>
        <div id="titre_principal">
            <a href="../principal/principal.html">
                <img src="../../images/graciasCompte.jpg" alt="logo">
            </a>
        </div>
        <div id="reseach">
            <form method="POST" action="#">
                <label for="recherche" id="clicLabel"> Recherche : </label><input type="search" placeholder="Recherche... " id="recherche" name="recherche" size="30" maxlength="10">
            </form>
        </div>

        <div id="logIn">
            <a href="#">
                <img src="../logo/login.png" alt="LogIn">
            </a>
        </div>
        <div id="Connect_Annonce">
            
            <h3 id="welcom"> Bienvenue sur <strong>Gracias</strong></h3>
            <ul>
                <li><a href="../annonce.html"> Créer une Annonce </a></li>
            </ul>
        </div>

        <div id="banniere_image">
            <div id="banniere_description">
                <a href="principal.html" class="bouton_rouge"> <img src="../../images/flecheblanchedroite.png" alt="Accueil" /></a>
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
        <div id="slideshow">
            <ul>

                <li><img src="../../principal/img/img1.jpg" alt="" width="700" height="400" /></li>
                <li><img src="../../principal/img/img2.jpg" alt="" width="700" height="400" /></li>
                <li><img src="../../principal/img/img3.jpg" alt="" width="700" height="400" /></li>
                <li><img src="../../principal/img/img4.jpg" alt="" width="700" height="400" /></li>
                <li><img src="../../principal/img/img5.jpg" alt="" width="700" height="400" /></li>
                <li><img src="../../principal/img/img6.jpg" alt="" width="700" height="400" /></li>
                <li><img src="../../principal/img/img7.jpg" alt="" width="700" height="400" /></li>
                <li><img src="../../principal/img/img8.jpg" alt="" width="700" height="400" /></li>
                <li><img src="../../principal/img/img9.jpg" alt="" width="700" height="400" /></li>
                <li><img src="../../principal/img/img10.jpg" alt="" width="700" height="400" /></li>
                <li><img src="../../principal/img/img11.jpg" alt="" width="700" height="400" /></li>
                <li><img src="../../principal/img/img12.jpg" alt="" width="700" height="400" /></li>
                <li><img src="../../principal/img/img13.jpg" alt="" width="700" height="400" /></li>
                <li><img src="../../principal/img/img14.jpeg" alt="" width="700" height="400" /></li>
                <li><img src="../../principal/img/img15.jpg" alt="" width="700" height="400" /></li>
                <li><img src="../../principal/img/img16.jpg" alt="" width="700" height="400" /></li>
                <li><img src="../../principal/img/img17.jpg" alt="" width="700" height="400" /></li>
                <li><img src="../../principal/img/img18.jpg" alt="" width="700" height="400" /></li>
            </ul>


        </div>
            <nav>
                <h3>Toutes nos categories </h3>
                <ul>
                    <li>
                        <a href="#"><img src="../../images/immo.jpg" alt="Immobilier"> Immobilier </a>
                    </li>
                    <li>
                        <a href="#"><img src="../../images/vehicule.jpg" alt="Vehicules"> Vehicules </a>
                    </li>
                    <li>
                        <a href="#"><img src="../../images/maison.png" alt="Maison"> Maison </a>
                    </li>
                    <li>
                        <a href="#"><img src="../../images/info.png" alt="Informatique"> Informatique </a>
                    </li>
                    <li>
                        <a href="#"><img src="../../images/loisirs.jpg" alt="Divertissement"> Divertissement </a>
                    </li>
                    <li>
                        <a href="#"><img src="../../images/services.jpg" alt="services"> Emplois et services </a>
                    </li>
                    <li>
                        <a href="#"><img src="../../images/habillement.jpg" alt="Habillements"> Habillements </a>
                    </li>
                    <li><a href="#"> ... </a></li>
                </ul>
            </nav>

            <aside>
                <h3> Retrouvez-nous : </h3>
                <p>
                    <a href="facebook.com"><img src="../../images/facebook.png" alt="Facebook" title="Facebook"></a>
                    <a href="twitter.com"><img src="../../images/twitter.png" alt="Twitter" title="Twitter"></a>
                    <a href="instagram.com"><img src="../../images/Instagram.jpg" alt="Instagram" title="Insta"></a>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
    $(function() {

        setInterval(function() {

            $("#slideshow ul").animate({
                marginLeft: -350
            }, 1000, function() {

                $(this).css({
                    marginLeft: 0
                }).find("li:last").after($(this).find("li:first"));

            })

        }, 5000);

    });

    $(function() {
        $('#Tri').css({
            width: '150px',
            borderColor: 'rgba(22, 144, 192, 0.849)'
        });

        $('Tri').animate({
            fontSize: '50px',
            width: '200px'
        }, 'slow')

        $('#Tri').click({
            backgroundColor: 'blue'
        })
    })
</script>

</body>

</html>