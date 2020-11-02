

<?php
get_header();

?>



<section class="hero-accueil">
    <div class="left-side">
        <?php $img = get_field('prod_hero_logo'); ?>
        <a href="#" alt="home"><img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>"></a>

        <p class="animateMe" data-animation="fadeInLeft"><?php the_field('prod_hero_description'); ?></p>

        <a href="#"><?php the_field('prod_hero_btn'); ?></a>

    </div>
    <div class="right-side">
        <?php $img = get_field('prod_hero_image'); ?>
        <img class="hero-bg" src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>"/>
    </div>

</section>

<section class="info-vente">
    <div class="wrapper" >
        <h3 style="text-transform: uppercase"><?php the_field('prod_infovente_titre'); ?></h3>
        <p><?php the_field('prod_infovente_upper_d'); ?></p>
        <p><?php the_field('prod_infovente_lower_d'); ?></p>
    </div>
</section>

<section class="contenu">
    <div class="wrapper">
        <article class="animateMe" data-animation="fadeInUp" data-animation-delay="0.5s">
            <a href="<?php the_field('section_contenu_lien_1'); ?>">
                <?php $img = get_field('section_contenu_image_1'); ?>
                <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>"/>
                <div>
                    <h2><?php the_field('section_contenu_title_1'); ?></h2>
                </div>
            </a>
        </article>
        <article class="animateMe" data-animation="fadeInUp" data-animation-delay="1s">
            <a href="<?php the_field('section_contenu_lien_2'); ?>">
                <?php $img = get_field('section_contenu_image_2'); ?>
                <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>"/>
                <div>
                    <h2><?php the_field('section_contenu_title_2'); ?></h2>
                </div>
            </a>
        </article>
        <article class="animateMe" data-animation="fadeInUp" data-animation-delay="1.5s">
            <a href="<?php the_field('section_contenu_lien_3'); ?>">
                <?php $img = get_field('section_contenu_image_3'); ?>
                <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>"/>
                <div>
                    <h2><?php the_field('section_contenu_title_3'); ?></h2>
                </div>
            </a>
        </article>
    </div>
</section>

<section class="info-accueil">
    <div class="wrapper animateMe" data-animation="fadeIn">
        <div>
            <h3><?php the_field('section_info_titre');?></h3>
            <p><?php the_field('section_info_description');?></p>
        </div>

        <!--   GOOGLE MAPS EMBED -->
        <iframe width="100%" height="450" id="gmap_canvas" src="<?php the_field('section_info_map_link'); ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
</section>


<section class="pecheurs">
    <div class="title">
        <h1><?php the_field('section_pecheurs_titre');?></h1>
    </div>
    <div class="wrapper animateMe" data-animation="fadeIn" data-animation-delay="0.5s">
        <?php
        query_posts(array(
            'post_type' => 'cpt_gallerie_fp',
            'post_status' => 'publish',
            'showposts' => 8,
            'orderby' => 'title',
            'order' => 'ASC'
        ));
        ?>
        <div class="upper">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="item"><a href="#" title="<?php the_title_attribute(); ?>">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail(); ?>

                            <?php endif; ?>
                        </a>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        <?php wp_reset_query();?>

        </div>
        <?php
        query_posts(array(
            'post_type' => 'cpt_gallerie_fp',
            'post_status' => 'publish',
            'showposts' => 8,
            'orderby' => 'title',
            'order' => 'DESC'
        ));
        ?>
        <div class="lower">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="item"><a href="#" title="<?php the_title_attribute(); ?>">
                            <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail(); ?>

                            <?php endif; ?>
                        </a>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query();?>

        </div>
    </div>
</section>

<section class="pub">
    <div class="left-side">
        <h1><?php the_field('section_pub_titre'); ?></h1>
        <div>
            <h2><?php the_field('section_pub_info_titre'); ?></h2>
            <p><?php the_field('section_pub_info_description'); ?></p>
            <div class="align-btn"><a href="#" class="btn" alt="reserver"><?php the_field('section_pub_info_bouton'); ?></a></div>
        </div>
    </div>
    <?php $img = get_field('section_pub_info_image'); ?>
    <div class="right-side animateMe" data-animation="fadeInRight"><img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" width="821" height="981"></div>
</section>

<section class="infolettre animateMe" data-animation="fadeInUp" data-animation-delay="0.5s">
    <div class="wrapper">
        <h1><?php the_field('section_infolettre_titre');?></h1>
        <p><?php the_field('section_infolettre_description');?></p>
        <input type="email" placeholder="courriel">
        <a class="btn" href="#" alt="soumettre"><?php the_field('section_infolettre_bouton_texte');?></a>
    </div>
</section>
<?php get_footer(); ?>
