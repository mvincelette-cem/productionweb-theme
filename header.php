<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title(''); ?></title>

    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,700;1,700&family=Spectral:ital,wght@0,200;0,400;1,400;1,600&display=swap"
          rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class() ?> >

<div class="menu-menu-princ-overlay" id="overlay">
    <div class="menu-menu-princ-left">
        <a href="front-page.php"><img class="menu-menu-princ-logo"
                                      src="<?php echo get_template_directory_uri(); ?>/images/logo.svg"
                                      alt="Logo Pourvoirie Lac-du-cerf"></a>
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
        <a href="" class="menu-langue-desktop menu-menu-princ-langue">En</a>
    </div>
    <div class="menu-menu-princ-right">
        <ul class="menu-elements">
            <li data-animation="fadeInLeft" data-animation-delay="1s" class="animateMe"><a href="template-cpt_chalets.php">Nos
                    Chalets</a></li>
            <li data-animation="fadeInLeft" data-animation-delay="1.2s" class="animateMe"><a
                        href="template-cpt_activites.php">Pêche</a></li>
            <li data-animation="fadeInLeft" data-animation-delay="1.5s" class="animateMe"><a
                        href="template-cpt_activites.php">VTT / Motoneige</a></li>
            <li data-animation="fadeInLeft" data-animation-delay="1.8s" class="animateMe"><a href="#">Villégiature</a>
            </li>
            <li data-animation="fadeInLeft" data-animation-delay="2s" class="animateMe"><a href="#">À propos</a></li>
            <li data-animation="fadeInLeft" data-animation-delay="2.2s" class="animateMe"><a href="#">Nos tarifs</a>
            </li>
            <li data-animation="fadeInLeft" data-animation-delay="2.4s" class="animateMe"><a href="#">Contactez-nous</a>
            </li>
            <li data-animation="fadeInLeft" data-animation-delay="2.6s" class="animateMe"><a href="#">Quoi apporter?</a>
            </li>
            <li data-animation="fadeInLeft" data-animation-delay="2.9s" class="animateMe"><a href="#">Réservez
                    maintenant</a></li>
        </ul>
        <a href="" class="menu-langue-mobile menu-menu-princ-langue">En</a>
    </div>
</div>

<?php if (is_front_page()) : ?>

    <header class="h-accueil">
        <div>
            <a href="<?php bloginfo('url') ?>" alt="reserver"><h4>RÉSERVEZ MAINTENANT</h4></a>
            <a href="#" id="toggle" alt="menu"><span class="iconify" data-inline="false" data-icon="clarity:menu-line"
                                                     style="color: #141a26; font-size: 32px;"></span></a>
        </div>
    </header>

<?php else: ?>

    <header class="header">

        <div class="header-content">
            <img class="header-logo" src="<?php bloginfo('template_url'); ?>/images/logo.svg"
                 alt="Logo Pourvoirie Lac-du-cerf">
            <div class="header-menu-bouton">
                <a href="#" class="header-reservez-link">Réservez maintenant</a>
                <a href="#" class="header-hamburger"><span class="iconify" data-inline="false"
                                                          data-icon="clarity:menu-line"
                                                          style="font-size: 32px;"></span></a>
            </div>
        </div>

    </header>

<? endif; ?>

