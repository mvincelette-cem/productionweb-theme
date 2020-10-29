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

        <?php wp_nav_menu( array(
        'menu'              => "", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
        'menu_class'        => "", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
        'menu_id'           => "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
        'container'         => "", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
        'container_class'   => "menu-menu-princ-right", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
        'container_id'      => "", // (string) The ID that is applied to the container.
        'fallback_cb'       => "", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
        'before'            => "", // (string) Text before the link markup.
        'after'             => "", // (string) Text after the link markup.
        'link_before'       => "", // (string) Text before the link text.
        'link_after'        => "", // (string) Text after the link text.
        'echo'              => "", // (bool) Whether to echo the menu or return it. Default true.
        'depth'             => "", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
        'walker'            => "", // (object) Instance of a custom walker class.
        'theme_location'    => "menu_principal", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
        'items_wrap'        => '<ul class="menu-elements">%3$s</ul>', // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
        'item_spacing'      => "", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
        ) );
        ?>

<!--        <ul class="menu-elements">-->
<!--            <li data-animation="fadeInLeft" data-animation-delay="1s" class="animateMe"><a href="template-cpt_chalets.php">Nos-->
<!--                    Chalets</a></li>-->
<!--            <li data-animation="fadeInLeft" data-animation-delay="1.2s" class="animateMe"><a-->
<!--                        href="template-cpt_activites.php">Pêche</a></li>-->
<!--            <li data-animation="fadeInLeft" data-animation-delay="1.5s" class="animateMe"><a-->
<!--                        href="template-cpt_activites.php">VTT / Motoneige</a></li>-->
<!--            <li data-animation="fadeInLeft" data-animation-delay="1.8s" class="animateMe"><a href="#">Villégiature</a>-->
<!--            </li>-->
<!--            <li data-animation="fadeInLeft" data-animation-delay="2s" class="animateMe"><a href="#">À propos</a></li>-->
<!--            <li data-animation="fadeInLeft" data-animation-delay="2.2s" class="animateMe"><a href="#">Nos tarifs</a>-->
<!--            </li>-->
<!--            <li data-animation="fadeInLeft" data-animation-delay="2.4s" class="animateMe"><a href="#">Contactez-nous</a>-->
<!--            </li>-->
<!--            <li data-animation="fadeInLeft" data-animation-delay="2.6s" class="animateMe"><a href="#">Quoi apporter?</a>-->
<!--            </li>-->
<!--            <li data-animation="fadeInLeft" data-animation-delay="2.9s" class="animateMe"><a href="#">Réservez-->
<!--                    maintenant</a></li>-->
<!--        </ul>-->
<!--        <a href="" class="menu-langue-mobile menu-menu-princ-langue">En</a>-->

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

