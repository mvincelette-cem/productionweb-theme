

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
        <h1>Nos grands pêcheurs</h1>
    </div>
    <div class="wrapper animateMe" data-animation="fadeIn" data-animation-delay="1.5s">

        <div class="upper">
            <div class="item"><a href="#" alt="#"><img src="images/gallery/1.jpg" alt="img1"></a></div>
            <div class="item"><a href="#" alt="#"><img src="images/gallery/2.jpg" alt="img1"></a></div>
            <div class="item"><a href="#" alt="#"><img src="images/gallery/3.jpg" alt="img1"></a></div>
            <div class="item"><a href="#" alt="#"><img src="images/gallery/4.jpg" alt="img1"></a></div>
            <div class="item"><a href="#" alt="#"><img src="images/gallery/1.jpg" alt="img1"></a></div>
            <div class="item"><a href="#" alt="#"><img src="images/gallery/2.jpg" alt="img1"></a></div>
            <div class="item"><a href="#" alt="#"><img src="images/gallery/3.jpg" alt="img1"></a></div>
            <div class="item"><a href="#" alt="#"><img src="images/gallery/4.jpg" alt="img1"></a></div>

        </div>
        <div class="lower">
            <div class="item"><a href="#" alt="#"><img src="images/gallery/5.jpg" alt=""></a></div>
            <div class="item"><a href="#" alt="#"><img src="images/gallery/6.jpg" alt=""></a></div>
            <div class="item"><a href="#" alt="#"><img src="images/gallery/7.jpg" alt=""></a></div>
            <div class="item"><a href="#" alt="#"><img src="images/gallery/8.jpg" alt=""></a></div>
            <div class="item"><a href="#" alt="#"><img src="images/gallery/5.jpg" alt=""></a></div>
            <div class="item"><a href="#" alt="#"><img src="images/gallery/6.jpg" alt=""></a></div>
            <div class="item"><a href="#" alt="#"><img src="images/gallery/7.jpg" alt=""></a></div>
            <div class="item"><a href="#" alt="#"><img src="images/gallery/8.jpg" alt=""></a></div>

        </div>
    </div>
</section>

<section class="pub">
    <div class="left-side">
        <h1>Vous souhaitez d’un beau séjour en famille?</h1>
        <div>
            <h2>Les nuitées pour les enfants de 12 ans et moins sont gratuites !</h2>
            <p>Cette gratuité s'applique pour les nuitées seulement et non pour les forfaits et il doit y avoir deux adultes présents dans le chalets</p>
            <div class="align-btn"><a href="#" class="btn" alt="reserver">Réserver maintenant !</a></div>
        </div>
    </div>
    <div class="right-side animateMe" data-animation="fadeInRight"><img src="images/img-pub.jpg" alt="pub" width="821" height="981"></div>
</section>

<section class="infolettre animateMe" data-animation="fadeInUp" data-animation-delay="0.5s">
    <div class="wrapper">
        <h1>Abonnez-vous à notre infolettre !</h1>
        <p>Pour toutes informations et promotions pour notre pourvoirie, inscrivez-vous à notre infolettre.</p>
        <input type="email" placeholder="courriel">
        <a class="btn" href="#" alt="soumettre">Soumettre</a>
    </div>
</section>
<?php get_footer(); ?>
