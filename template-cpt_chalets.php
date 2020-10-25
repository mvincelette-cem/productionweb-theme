<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Indiquer le titre de la page</title>

    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,700;1,700&family=Spectral:ital,wght@0,200;0,400;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"/>
    <link rel="stylesheet" href="css/main.css">

    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <script src="js/script.js" defer></script>
</head>
<body>


<div class="menu-menu-princ-overlay" id="overlay">
    <div class="menu-menu-princ-left">
        <a href="front-page.php"><img class="menu-menu-princ-logo" src="images/logo.svg" alt="Logo Pourvoirie Lac-du-cerf"></a>
        <ul class="menu-contacts">
            <li class="menu-contacts-elems"><span class="iconify" data-inline="false" data-icon="bi:telephone"
                                                  style="color: #69b966; font-size: 40px;"></span> <a
                    href="tel:819-597-2011">819 597-2011</a></li>
            <li class="menu-contacts-elems"><span class="iconify" data-inline="false" data-icon="codicon:mail"
                                                  style="color: #69b966; font-size: 40px;"></span> <a
                    href="mailto:pourvoirielacducerf2020@gmail.com">pourvoirielacducerf2020@gmail.com</a>
            </li>
            <li class="menu-contacts-elems"><span class="iconify" data-inline="false" data-icon="carbon:location"
                                                  style="color: #69b966; font-size: 48px;"></span> <a href="">17 chemin
                filion, Lac-du-cerf, QC, J0W1S0</a></li>
        </ul>
        <a href="#" class="menu-langue-desktop menu-menu-princ-langue">En</a>
    </div>
    <div class="menu-menu-princ-right">
        <ul class="menu-elements">
            <li data-animation="fadeInLeft" data-animation-delay="1s" class="animateMe"><a href="template-chalets.html">Nos Chalets</a></li>
            <li data-animation="fadeInLeft" data-animation-delay="1.2s" class="animateMe"><a href="template-activites.html">Pêche</a></li>
            <li data-animation="fadeInLeft" data-animation-delay="1.5s" class="animateMe"><a href="template-activites.html">VTT / Motoneige</a></li>
            <li data-animation="fadeInLeft" data-animation-delay="1.8s" class="animateMe"><a href="#">Villégiature</a></li>
            <li data-animation="fadeInLeft" data-animation-delay="2s" class="animateMe"><a href="#">À propos</a></li>
            <li data-animation="fadeInLeft" data-animation-delay="2.2s" class="animateMe"><a href="#">Nos tarifs</a></li>
            <li data-animation="fadeInLeft" data-animation-delay="2.4s" class="animateMe"><a href="#">Contactez-nous</a></li>
            <li data-animation="fadeInLeft" data-animation-delay="2.6s" class="animateMe"><a href="#">Quoi apporter?</a></li>
            <li data-animation="fadeInLeft" data-animation-delay="2.9s" class="animateMe"><a href="#">Réservez maintenant</a></li>
        </ul>
        <a href="#" class="menu-langue-mobile menu-menu-princ-langue">En</a>
    </div>
</div>

<header class="header">

    <div class="header-content">
        <img class="header-logo" src="images/logo.svg" alt="Logo Pourvoirie Lac-du-cerf">
        <div class="header-menu-bouton">
            <a href="#" class="header-reservez-link">Réservez maintenant</a>
            <a href="#" class="header-hamburger" id="toggle"><span class="iconify" data-inline="false" data-icon="clarity:menu-line"
                                                                   style="font-size: 32px;"></span></a>
        </div>
    </div>

</header>

<section class="tem-chalet-hero">
    <h2 class="animateMe" data-animation="fadeInLeft">NOS CHALETS</h2>
</section>

<div class="wrapper">
    <section class="tem-chalet-info animateMe" data-animation="fadeInLeft">

        <div>
            <p>Le site de la Pourvoirie Lac-du-Cerf, compte 12 chalets dont, présentement, 6 qui contiennent toutes les
                commodités (salle de bain complète). Bien que rustiques, nos chalets sont chaleureux et accueillants.
                Tous sont à proximité du bloc sanitaire qui vous offre 2 douches individuelles et une toilette. Tous nos
                chalets sont équipés de chaudrons, vaisselles et ustensils. La majorité ont un micro-ondes
                (informez-vous)
                et tous ont une cafetière (avec filtres!) et une bouilloire.
            </p>

            <picture>
                <source media="(max-width: 599px)" srcset="images/tem-chalet-info-380w.png">
                <source media="(min-width: 600px) and (max-width: 1023px)" srcset="images/tem-chalet-info-768w.png">
                <source media="(min-width: 1024px)" srcset="images/tem-chalet-info.png">
                <img src="images/tem-chalet-info.png" alt="Chalet le vieux poète">
            </picture>
        </div>
    </section>


    <section class="tem-chalet-liste-chalets">

        <div class="temp-chalet-un-chalet animateMe" data-animation="fadeIn">

            <picture>
                <source media="(max-width: 599px)" srcset="images/pas-photo-chalet-380w.png">
                <source media="(min-width: 600px)" srcset="images/pas-photo-chalet.png">
                <img src="images/pas-photo-chalet.png" alt="Chalet le vieux poète">
            </picture>
            <h4>Le vieux poète</h4>

            <div class="un-chalet-icones">

                <div class="un-chalet-une-icone">
                    <span class="iconify" data-inline="false" data-icon="cil:bathroom"
                          style="font-size: 50px; color: #EB5757;"></span>
                    <p>Toilette extérieure</p>
                </div>

                <div class="un-chalet-une-icone">
                    <span class="iconify" data-inline="false" data-icon="cil:bed"
                          style="font-size: 50px; color: #69B966;"></span>
                    <p>4 chambres fermées</p>
                </div>

                <div class="un-chalet-une-icone">
                    <span class="iconify" data-inline="false" data-icon="ic:outline-people-alt"
                          style="font-size: 50px; color: #69B966;"></span>
                    <p>capacité de 11 personnes</p>
                </div>

            </div>

            <a href="single-chalet.php">
                <button>En savoir plus</button>
            </a>

        </div>


        <div class="temp-chalet-un-chalet animateMe" data-animation="fadeIn">

            <picture>
                <source media="(max-width: 599px)" srcset="images/le-western-380w.png">
                <source media="(min-width: 600px)" srcset="images/le-western.png">
                <img src="images/pas-photo-chalet.png" alt="Chalet le vieux poète">
            </picture>
            <h4>Le western</h4>

            <div class="un-chalet-icones">

                <div class="un-chalet-une-icone">
                    <span class="iconify" data-inline="false" data-icon="cil:bathroom"
                          style="font-size: 50px; color: #69B966;"></span>
                    <p>Douche et eau chaude</p>
                </div>

                <div class="un-chalet-une-icone">
                    <span class="iconify" data-inline="false" data-icon="cil:bed"
                          style="font-size: 50px; color: #69B966;"></span>
                    <p>4 chambres fermées</p>
                </div>

                <div class="un-chalet-une-icone">
                    <span class="iconify" data-inline="false" data-icon="ic:outline-people-alt"
                          style="font-size: 50px; color: #69B966;"></span>
                    <p>capacité de 8 personnes</p>
                </div>

            </div>

            <a href="single-chalet.php">
                <button>En savoir plus</button>
            </a>

        </div>

        <div class="temp-chalet-un-chalet animateMe" data-animation="fadeIn">

            <picture>
                <source media="(max-width: 599px)" srcset="images/pas-photo-chalet-380w.png">
                <source media="(min-width: 600px)" srcset="images/pas-photo-chalet.png">
                <img src="images/pas-photo-chalet.png" alt="Chalet le joyeux naufragé">
            </picture>
            <h4>le joyeux naufragé</h4>

            <div class="un-chalet-icones">

                <div class="un-chalet-une-icone-indisponible">
                    <span class="iconify" data-inline="false" data-icon="whh:construction"
                          style="font-size: 50px; color: #EB5757;"></span>
                    <p>Ce chalet est présentement en rénovation majeure.</p>
                </div>

            </div>

            <a href="single-chalet.php">
                <button>En savoir plus</button>
            </a>

        </div>

        <div class="temp-chalet-un-chalet animateMe" data-animation="fadeIn">

            <picture>
                <source media="(max-width: 599px)" srcset="images/le-retraite-380w.png">
                <source media="(min-width: 600px)" srcset="images/le-retraite.png">
                <img src="images/le-retraite.png" alt="Chalet le retraité">
            </picture>
            <h4>Le retraité</h4>

            <div class="un-chalet-icones">

                <div class="un-chalet-une-icone">
                    <span class="iconify" data-inline="false" data-icon="cil:bathroom"
                          style="font-size: 50px; color: #69B966;"></span>
                    <p>Douche et eau chaude</p>
                </div>

                <div class="un-chalet-une-icone">
                    <span class="iconify" data-inline="false" data-icon="cil:bed"
                          style="font-size: 50px; color: #69B966;"></span>
                    <p>2 chambres fermées</p>
                </div>

                <div class="un-chalet-une-icone">
                    <span class="iconify" data-inline="false" data-icon="ic:outline-people-alt"
                          style="font-size: 50px; color: #69B966;"></span>
                    <p>capacité de 5 personnes</p>
                </div>

            </div>

            <a href="single-chalet.php">
                <button>En savoir plus</button>
            </a>

        </div>

        <div class="temp-chalet-un-chalet animateMe" data-animation="fadeIn">

            <picture>
                <source media="(max-width: 599px)" srcset="images/place-a-party-380w.png">
                <source media="(min-width: 600px)" srcset="images/place-a-party.png">
                <img src="images/place-a-party.png" alt="Chalet la place à party">
            </picture>
            <h4>La place à party</h4>

            <div class="un-chalet-icones">

                <div class="un-chalet-une-icone">
                    <span class="iconify" data-inline="false" data-icon="cil:bathroom"
                          style="font-size: 50px; color: #EB5757;"></span>
                    <p>Aucune douche</p>
                </div>

                <div class="un-chalet-une-icone">
                    <span class="iconify" data-inline="false" data-icon="cil:bed"
                          style="font-size: 50px; color: #69B966;"></span>
                    <p>3 chambres fermées</p>
                </div>

                <div class="un-chalet-une-icone">
                    <span class="iconify" data-inline="false" data-icon="ic:outline-people-alt"
                          style="font-size: 50px; color: #69B966;"></span>
                    <p>capacité de 10 personnes</p>
                </div>

            </div>

            <a href="single-chalet.php">
                <button>En savoir plus</button>
            </a>

        </div>

        <div class="temp-chalet-un-chalet animateMe" data-animation="fadeIn">

            <picture>
                <source media="(max-width: 599px)" srcset="images/le-rustique-380w.png">
                <source media="(min-width: 600px)" srcset="images/le-rustique.png">
                <img src="images/le-rustique.png" alt="Chalet le rustique">
            </picture>
            <h4>Le rustique</h4>

            <div class="un-chalet-icones">

                <div class="un-chalet-une-icone">
                    <span class="iconify" data-inline="false" data-icon="cil:bathroom"
                          style="font-size: 50px; color: #EB5757;"></span>
                    <p>Salle de bain complète</p>
                </div>

                <div class="un-chalet-une-icone">
                    <span class="iconify" data-inline="false" data-icon="cil:bed"
                          style="font-size: 50px; color: #69B966;"></span>
                    <p>2 chambres fermées</p>
                </div>

                <div class="un-chalet-une-icone">
                    <span class="iconify" data-inline="false" data-icon="ic:outline-people-alt"
                          style="font-size: 50px; color: #69B966;"></span>
                    <p>capacité de 4 personnes</p>
                </div>

            </div>

            <a href="single-chalet.php">
                <button>En savoir plus</button>
            </a>

        </div>


        <div class="temp-chalet-un-chalet animateMe" data-animation="fadeIn">

            <picture>
                <source media="(max-width: 599px)" srcset="images/le-famillial-380w.png">
                <source media="(min-width: 600px)" srcset="images/le-famillial.png">
                <img src="images/le-famillial.png" alt="Chalet le famillial">
            </picture>
            <h4>Le famillial</h4>

            <div class="un-chalet-icones">

                <div class="un-chalet-une-icone">
                    <span class="iconify" data-inline="false" data-icon="cil:bathroom"
                          style="font-size: 50px; color: #EB5757;"></span>
                    <p>toilette intérieure</p>
                </div>

                <div class="un-chalet-une-icone">
                    <span class="iconify" data-inline="false" data-icon="cil:bed"
                          style="font-size: 50px; color: #69B966;"></span>
                    <p>4 chambres fermées</p>
                </div>

                <div class="un-chalet-une-icone">
                    <span class="iconify" data-inline="false" data-icon="ic:outline-people-alt"
                          style="font-size: 50px; color: #69B966;"></span>
                    <p>capacité de 11 personnes</p>
                </div>

            </div>

            <a href="single-chalet.php">
                <button>En savoir plus</button>
            </a>

        </div>


        <div class="temp-chalet-un-chalet animateMe" data-animation="fadeIn">

            <picture>
                <source media="(max-width: 599px)" srcset="images/le-solitaire-380w.png">
                <source media="(min-width: 600px)" srcset="images/le-solitaire.png">
                <img src="images/le-solitaire.png" alt="Chalet le solitaire">
            </picture>
            <h4>le solitaire</h4>

            <div class="un-chalet-icones">

                <div class="un-chalet-une-icone-indisponible">
                    <span class="iconify" data-inline="false" data-icon="whh:construction"
                          style="font-size: 50px; color: #EB5757;"></span>
                    <p>Ce chalet est présentement en cours d'amélioration, il n'est pas en location.</p>
                </div>

            </div>

            <a href="single-chalet.php">
                <button>En savoir plus</button>
            </a>

        </div>

        <div class="temp-chalet-un-chalet animateMe" data-animation="fadeIn">

            <picture>
                <source media="(max-width: 599px)" srcset="images/pas-photo-chalet-380w.png">
                <source media="(min-width: 600px)" srcset="images/pas-photo-chalet.png">
                <img src="images/pas-photo-chalet.png" alt="Chalet le rétro">
            </picture>
            <h4>le rétro</h4>

            <div class="un-chalet-icones">

                <div class="un-chalet-une-icone-indisponible">
                    <span class="iconify" data-inline="false" data-icon="whh:construction"
                          style="font-size: 50px; color: #EB5757;"></span>
                    <p>Ce chalet est présentement indisponible.</p>
                </div>

            </div>

            <a href="single-chalet.php">
                <button>En savoir plus</button>
            </a>

        </div>

        <div class="temp-chalet-un-chalet animateMe" data-animation="fadeIn">

            <picture>
                <source media="(max-width: 599px)" srcset="images/le-romantique-380w.png">
                <source media="(min-width: 600px)" srcset="images/le-romantique.png">
                <img src="images/le-romantique.png" alt="Chalet le retraité">
            </picture>
            <h4>Le romantique</h4>

            <div class="un-chalet-icones">

                <div class="un-chalet-une-icone">
                    <span class="iconify" data-inline="false" data-icon="cil:bathroom"
                          style="font-size: 50px; color: #69B966;"></span>
                    <p>Toilette extérieure</p>
                </div>

                <div class="un-chalet-une-icone">
                    <span class="iconify" data-inline="false" data-icon="cil:bed"
                          style="font-size: 50px; color: #69B966;"></span>
                    <p>2 chambres fermées</p>
                </div>

                <div class="un-chalet-une-icone">
                    <span class="iconify" data-inline="false" data-icon="ic:outline-people-alt"
                          style="font-size: 50px; color: #69B966;"></span>
                    <p>capacité de 4 personnes</p>
                </div>

            </div>

            <a href="">
                <button>En savoir plus</button>
            </a>

        </div>
    </section>

    <section class="tem-chalet-bloc-sanitaire animateMe" data-animation="fadeInLeft">

        <h3>Le bloc sanitaire</h3>
        <div>
            <picture>
                <source media="(max-width: 599px)" srcset="images/bloc-sanitaire-380w.png">
                <source media="(min-width: 600px) and (max-width: 1023px)" srcset="images/bloc-sanitaire-768w.png">
                <source media="(min-width: 1024px)" srcset="images/bloc-sanitaire.png">
                <img src="images/bloc-sanitaire.png" alt="Le bloc sanitaire">
            </picture>

            <div>
                <p>Le bloc sanitaire de la Pourvoirie Lac-du-Cerf est situé au cœur des 12 chalets en location afin de
                    <strong>permettre
                        aux visiteurs qui n'ont pas accès à de salle de bain complète à l'intérieur de leur chalet de se
                        prévaloir d'une
                        bonne douche!</strong> Munie de 2 douches individuelles intimes, d'une toilette et d'un lavabo,
                    le bloc sanitaire est récent
                    et propre. <strong>VOUS POUVEZ VERRROUILLER LA PORTE PRINCIPALE POUR PLUS D'INTIMITÉ!</strong> <br>
                    <br>

                    <strong class="gras-vert">Une laveuse à linge pour dépannage est maintenant disponible pour les
                        clients qui en font la demande.</strong>
                </p>

            </div>
        </div>
    </section>
    </div>

    <footer class="footer">

        <div class="footer-a-propos">

            <a href=""><img class="footer-logo" src="images/logo.svg" alt="Logo Pourvoirie Lac-du-cerf"></a>

            <p class="footer-a-propos-text">L'endroit idéal pour les pêcheur, amateurs de Quad ou familles qui rêvent d'un endroit paisible et
                accueillant où venir décompresser du stress de la ville dans le confort d'un mignon chalet rustique...</p>

            <a href="" class="footer-a-propos-link">À propos de nous</a>

        </div>

        <div class="menu-footer">
            <ul class="menu-elements">
                <li><a href="">Nos Chalets</a></li>
                <li><a href="">Pêche</a></li>
                <li><a href="">VTT / Motoneige</a></li>
                <li><a href="">Villégiature</a></li>
                <li><a href="">À propos</a></li>
                <li><a href="">Nos tarifs</a></li>
                <li><a href="">Contactez-nous</a></li>
                <li><a href="">Quoi apporter?</a></li>
                <li><a href="">Réservez maintenant</a></li>
            </ul>

            <a href="" class="footer-menu-langue">En</a>

            <p class="footer-copyrights">Pourvoirie Lac-du-Cerf ©2020</p>

        </div>

        <div class="footer-image-langue">
            <img src="images/bloc-sanitaire-380w.png" alt="">
            <div class="footer-langue"><a href="" class="footer-menu-langue footer-langue-bouton">En</a></div>
        </div>



    </footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
</body>
</html>