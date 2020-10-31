<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="wrapper">
    <section class="single-chalet-hero animateMe " <?php post_class(); ?> id="post-<?php the_ID();?>" data-animation="fadeInLeft" >
        <h2><?php the_title(); ?></h2>

        <div>
            <?php the_content(); ?>

            <picture>
                <source media="(max-width: 999px)" srcset="<?php the_post_thumbnail_url(); ?>">
                <source media="(min-width: 1024px)" srcset="<?php the_post_thumbnail_url(); ?>">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="Chalet le retraité">
            </picture>
        </div>

    </section>
</div>
    <section class="single-chalet-composantes">

        <?php if( have_rows('cpt-chalet_fonctionnalites_bain') ): ?>
        <div class="single-chalet-une-icone animateMe" data-animation="fadeIn">
            <?php while( have_rows('cpt-chalet_fonctionnalites_bain') ): the_row(); ?>
                <?php $image = get_sub_field('cpt-chalet_fonctionnalites_icone_bain'); ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <p><?php the_sub_field('cpt-chalets_specification_bain'); ?></p>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </section>

    <?php endwhile; ?>
<?php else: ?>

<?php endif; ?>
<div class="wrapper">

    <section class="single-chalet-gallerie animateMe" data-animation="fadeInLeft">
<?php if( have_rows('cpt-chalet_gallerie') ): ?>
    <?php while( have_rows('cpt-chalet_gallerie') ): the_row(); ?>
        <?php $image = get_sub_field('cpt-chalets_photos'); ?>
        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
    <?php endwhile; ?>
<?php endif; ?>

</section>
</div>
<?php get_footer(); ?>
