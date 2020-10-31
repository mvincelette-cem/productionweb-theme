<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) :
        the_post(); ?>

        <div class="wrapper">
            <section class="single-activite-info animateMe" <?php post_class(); ?> data-animation="fadeInLeft">
                <h2><?php the_title(); ?></h2>
                <div>
                    <?php the_content(); ?>

                    <picture>
                        <source media="(max-width: 599px)" srcset="<?php the_post_thumbnail_url(); ?>">
                        <source media="(min-width: 600px) and (max-width: 1023px)"
                                srcset="<?php the_post_thumbnail_url(); ?>">
                        <source media="(min-width: 1024px)" srcset="<?php the_post_thumbnail_url(); ?>">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="Chalet le vieux poète">
                    </picture>
                </div>

            </section>
        </div>


        <section class="periode-peche-info animateMe" data-animation="fadeIn">
            <p><strong>Période de pêche 2020 </strong><br>(ces dates sont à titre indicatives et ne remplacent pas
                celles pouvant se trouver sur les sites officiels du gouvernement)
                lac du Cerf (mun. Lac-du-Cerf) ZONE 10</p>
        </section>

        <?php
        query_posts(array(
            'post_type' => 'cpt_periodes',
            'post_status' => 'publish',
            'showposts' => -1
        ));
        ?>

        <div class="wrapper">
            <section class="calendrier-pêche">


                <h3 class="animateMe" data-animation="fadeInDown">Plans d’eau – Exceptions réglementaires</h3>


                <article class="une-periode animateMe" data-animation="fadeInLeft">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>

                            <h5><?php the_title(); ?></h5>
                            <div class="contenu-periode">

                                <?php echo the_content(); ?>

                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </article>

            </section>
        </div>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>