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
            <?php echo the_content(); ?>

            <picture>
                <source media="(max-width: 599px)" srcset="<?php the_post_thumbnail_url(); ?>">
                <source media="(min-width: 600px) and (max-width: 1023px)" srcset="<?php the_post_thumbnail_url(); ?>">
                <source media="(min-width: 1024px)" srcset="<?php the_post_thumbnail_url(); ?>">
                <img src="<?php the_post_thumbnail_url(); ?>">
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
    </div>

<?php get_footer(); ?>