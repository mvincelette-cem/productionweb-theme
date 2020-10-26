<?php
/* Template Name: template-cpt_chalets */
?>

<?php get_header(); ?>


<section class="tem-chalet-hero">
    <h2 class="animateMe" data-animation="fadeInLeft"><?php the_title(); ?></h2>
</section>



<div class="wrapper">
    <?php while ( have_posts() ) : the_post(); ?>
    <section class="tem-chalet-info animateMe" data-animation="fadeInLeft">

        <div>
            <p><?php echo the_content(); ?>
            </p>

            <picture>
                <source media="(max-width: 599px)" srcset="<?php the_post_thumbnail_url(); ?>">
                <source media="(min-width: 600px) and (max-width: 1023px)" srcset="<?php the_post_thumbnail_url(); ?>">
                <source media="(min-width: 1024px)" srcset="<?php the_post_thumbnail_url(); ?>">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="Hero">
            </picture>
        </div>
    </section>

<?php endwhile; ?>

    <?php
    query_posts(array(
        'post_type' => 'cpt_chalets',
        'post_status' => 'publish',
        'showposts' => -1
    ));
    ?>


    <section class="tem-chalet-liste-chalets">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
        <div class="temp-chalet-un-chalet animateMe" data-animation="fadeIn">

            <picture>
                <source media="(max-width: 599px)" srcset="<?php the_post_thumbnail_url(); ?>">
                <source media="(min-width: 600px)" srcset="<?php the_post_thumbnail_url(); ?>">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="Chalet le vieux poète">
            </picture>
            <h4><?php the_title(); ?></h4>


        <?php if( have_rows('cpt-chalet_fonctionnalites_bain') ): ?>
            <div class="un-chalet-icones">


            <?php while( have_rows('cpt-chalet_fonctionnalites_bain') ): the_row(); ?>
                <div class="un-chalet-une-icone">
                    <?php $image = get_sub_field('cpt-chalet_fonctionnalites_icone_bain'); ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <p><?php the_sub_field('cpt-chalets_specification_bain'); ?></p>
                </div>
                <?php endwhile; ?>


            </div>
            <?php endif; ?>


            <a href="<?php the_permalink(); ?>">
                <button>En savoir plus</button>
            </a>

        </div>

            <?php endwhile; ?>
            <?php wp_reset_query(); ?>

        <?php endif; ?>
    </section>



<!---->
<!--    <section class="tem-chalet-bloc-sanitaire animateMe" data-animation="fadeInLeft">-->
<!---->
<!--        <h3>Le bloc sanitaire</h3>-->
<!--        <div>-->
<!--            <picture>-->
<!--                <source media="(max-width: 599px)" srcset="images/bloc-sanitaire-380w.png">-->
<!--                <source media="(min-width: 600px) and (max-width: 1023px)" srcset="images/bloc-sanitaire-768w.png">-->
<!--                <source media="(min-width: 1024px)" srcset="images/bloc-sanitaire.png">-->
<!--                <img src="images/bloc-sanitaire.png" alt="Le bloc sanitaire">-->
<!--            </picture>-->
<!---->
<!--            <div>-->
<!--                <p>Le bloc sanitaire de la Pourvoirie Lac-du-Cerf est situé au cœur des 12 chalets en location afin de-->
<!--                    <strong>permettre-->
<!--                        aux visiteurs qui n'ont pas accès à de salle de bain complète à l'intérieur de leur chalet de se-->
<!--                        prévaloir d'une-->
<!--                        bonne douche!</strong> Munie de 2 douches individuelles intimes, d'une toilette et d'un lavabo,-->
<!--                    le bloc sanitaire est récent-->
<!--                    et propre. <strong>VOUS POUVEZ VERRROUILLER LA PORTE PRINCIPALE POUR PLUS D'INTIMITÉ!</strong> <br>-->
<!--                    <br>-->
<!---->
<!--                    <strong class="gras-vert">Une laveuse à linge pour dépannage est maintenant disponible pour les-->
<!--                        clients qui en font la demande.</strong>-->
<!--                </p>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
    </div>

<?php get_footer(); ?>