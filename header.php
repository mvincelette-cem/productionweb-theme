<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>

    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,700;1,700&family=Spectral:ital,wght@0,200;0,400;1,400;1,600&display=swap"
          rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class() ?> >

<div class="menu-menu-princ-overlay" id="overlay">
    <div class="menu-menu-princ-left">
        <a href="<?php bloginfo('url') ?>"><img class="menu-menu-princ-logo"
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
        <a href="#" class="menu-langue-desktop menu-menu-princ-langue">En</a>
    </div>

        <?php wp_nav_menu( array(
        'container_class'   => "menu-menu-princ-right", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
        'theme_location'    => "menu_principal", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
        'items_wrap'        => '<ul class="menu-elements">%3$s</ul>', // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
        ) );
        ?>

</div>

<?php if (is_front_page() || is_404()) : ?>

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
            <a href="<?php bloginfo('url') ?>"><img class="header-logo" src="<?php bloginfo('template_url'); ?>/images/logo.svg"
                 alt="Logo Pourvoirie Lac-du-cerf"></a>
            <div class="header-menu-bouton">
                <a href="<?php bloginfo('url') ?>" class="header-reservez-link">Réservez maintenant</a>
                <a href="#" id="toggle" class="header-hamburger"><span class="iconify" data-inline="false"
                                                          data-icon="clarity:menu-line"
                                                          style="font-size: 32px;"></span></a>
            </div>
        </div>

    </header>

<? endif; ?>

