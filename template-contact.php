<!<?php
/* Template Name: Contact */
?>

<?php get_header(); ?>


<section class="contact  animateMe" data-animation="fadeInLeft">
    <h1><?php the_title(); ?></h1>
    <div class="wrapper">
        <div>
            <?php while (have_posts()): the_post(); ?>

                <?php echo the_content(); ?>

            <?php endwhile; ?>
        </div>
    </div>
</section>



<?php get_footer(); ?>
