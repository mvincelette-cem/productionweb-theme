<?php if (!is_front_page() || !is_404()) : ?>
    </div>
<?php else: ?>
<? endif; ?>
<footer class="footer" style="position:relative">

    <div class="footer-a-propos">

        <a href=""><img class="footer-logo" src="<?php bloginfo('template_url'); ?>/images/logo.svg"
                        alt="Logo Pourvoirie Lac-du-cerf"></a>

        <p class="footer-a-propos-text">L'endroit idéal pour les pêcheur, amateurs de Quad ou familles qui rêvent d'un
            endroit paisible et
            accueillant où venir décompresser du stress de la ville dans le confort d'un mignon chalet rustique...</p>

        <a href="" class="footer-a-propos-link">À propos de nous</a>

    </div>

    <div>
        <?php wp_nav_menu(array(
            'container_class' => "menu-footer", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
            'theme_location' => "menu_footer", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
            'items_wrap' => '<ul class="menu-elements">%3$s</ul>', // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
        ));
        ?>

        <div>
            <p class="footer-copyrights"><a href="<?php bloginfo('url') ?>/notre-equipe/">Pourvoirie Lac-du-Cerf ©2020</a></p>
        </div>
    </div>

    <div class="footer-image-langue">
        <img src="<?php bloginfo('template_url'); ?>/images/bloc-sanitaire-380w.png" alt="">
        <div class="footer-langue"><a href="" class="footer-menu-langue footer-langue-bouton">En</a></div>
    </div>


</footer>

<?php wp_footer(); ?>

</body>
</html>
