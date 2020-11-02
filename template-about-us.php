<!<?php
/* Template Name: Section À Propos*/
?>

<?php get_header(); ?>


<section class="tem-activite-description animateMe" data-animation="fadeInLeft">

    <div class="wrapper">
        <div>
            <?php while (have_posts()): the_post(); ?>

                <?php echo the_content(); ?>

            <?php endwhile; ?>
        </div>
    </div>
</section>


<section class="team">
    <h1><?php the_title(); ?></h1>
    <div class="team-row wrapper">

        <div class="team-item">
            <img src="<?php bloginfo('template_url'); ?>/images/max.jpg" alt="max">
            <h4>Maxime Vincelette</h4>
        </div>
        <div class="team-item">
            <img src="<?php bloginfo('template_url'); ?>/images/juliette.jpg" alt="juliette">
            <h4>Juliette Gagnon</h4>
        </div>
        <div class="team-item">
            <img src="<?php bloginfo('template_url'); ?>/images/jc.jpg" alt="jc">
            <h4>Jean-Christophe Gagnon</h4>
        <p></p>
        </div>
    </div>
</section>


<?php get_footer(); ?>
