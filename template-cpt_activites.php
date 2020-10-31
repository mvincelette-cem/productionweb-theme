<!<?php
/* Template Name: template-cpt_activites */
?>

<?php get_header(); ?>


<section class="tem-activite-description animateMe" data-animation="fadeInLeft">

    <div class="wrapper">
        <div>
            <h2><?php the_title(); ?></h2>
            <?php while (have_posts()): the_post(); ?>

                <?php echo the_content(); ?>

            <?php endwhile; ?>
        </div>
    </div>
</section>

<?php
query_posts(array(
    'post_type' => 'cpt_activites',
    'post_status' => 'publish',
    'showposts' => -1
));
?>

<div class="wrapper">
    <section class="tem-activite-liste animateMe" data-animation="fadeIn">

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

                <a href="<?php the_field('lien_activite_#1'); ?>">
                    <div class="une-activite">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <h4><?php the_title(); ?></h4>
                    </div>
                </a>
            <?php endwhile; ?>
        <?php endif; ?>

    </section>

</div>

<?php get_footer(); ?>