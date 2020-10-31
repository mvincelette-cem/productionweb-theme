<?php get_header(); ?>


        <div class="wrapper">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) :
                    the_post(); ?>

                    <section class="single-activite-info animateMe " <?php post_class(); ?> id="post-<?php the_ID();?>" data-animation="fadeInLeft">
                <h2><?php the_title(); ?></h2>
                <div>
                    <?php the_content(); ?>
                    <picture>
                      <?php the_post_thumbnail('custom_size');?>




<!--                        <img src="--><?php //the_post_thumbnail_url('custom_size'); ?><!--" alt="--><?php //the_title(); ?><!--">-->
                    </picture>
                </div>
            </section>
            <?php endwhile; ?>

            <?php endif; ?>

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

                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <article class="une-periode animateMe" data-animation="fadeInLeft">


                            <h5><?php the_title(); ?></h5>
                            <div class="contenu-periode">

                                <?php echo the_content(); ?>

                            </div>

                </article>
          <?php endwhile; ?>
                    <?php endif; ?>
            </section>
        </div>


<?php get_footer(); ?>
