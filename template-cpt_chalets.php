<?php
/* Template Name: template-cw4_invites */
?>

<?php get_header(); ?>


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

    <?php
    query_posts(array(
        'post_type' => 'cpt_chalets',
        'post_status' => 'publish',
        'showposts' => -1
    ));
    ?>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
    <section class="tem-chalet-liste-chalets">

        <div class="temp-chalet-un-chalet animateMe" data-animation="fadeIn">

            <picture>
                <source media="(max-width: 599px)" srcset="<?php the_post_thumbnail_url(); ?>">
                <source media="(min-width: 600px)" srcset="<?php the_post_thumbnail_url(); ?>">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="Chalet le vieux poète">
            </picture>
            <h4><?php the_title(); ?></h4>

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

            <a href="<?php the_permalink(); ?>">
                <button>En savoir plus</button>
            </a>

        </div>
    </section>

        <?php endwhile; ?>
        <?php wp_reset_query(); ?>

    <?php endif; ?>


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