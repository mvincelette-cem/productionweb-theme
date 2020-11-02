<?php get_header(); ?>


<div class="wrapper">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <section class="single-chalet-hero animateMe <?php post_class(); ?>" id="post-<?php the_ID(); ?>" data-animation="fadeInLeft">
        <h2><?php the_title(); ?></h2>

        <div>
            <p>
                <?php the_content(); ?>

            </p>
            <?php if ( has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
            <?php endif; ?>
        </div>
    </section>
    <?php endwhile; ?>
</div>


<?php else: ?>


<div class="wrapper">

        <h1><?php _e( 'Aucun contenu disponible.', 'pourvoirie' ); ?></h1>

</div>

<?php endif; ?>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
