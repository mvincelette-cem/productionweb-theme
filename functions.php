<?php

add_theme_support('post-thumbnails');
set_post_thumbnail_size(800, 480);
add_image_size('vignette', 220, 100, true);

function new_excerpt_length($length) {
    return 10; // Nombre de mots limite
}
add_filter('excerpt_length', 'new_excerpt_length');

// menu
function cw4_creer_menu() {
	register_nav_menu('menu_principal', 'Menu principal');
}
add_action('init', 'cw4_creer_menu');

// acf options
if ( function_exists('acf_add_options_page') ) {

    // on ajoute une page d'option
    acf_add_options_page(array(
        'page_title'   => 'Options générales',
        'menu_title'   => 'Options générales',
        'menu_slug'    => 'cw4-theme-options-generales',
        'capability'   => 'edit_posts',
        'redirect'     => false
    ));

    // on ajoute une sous-page à la page précédente via le paramètre parent_slug
    acf_add_options_sub_page(array(
        'page_title'   => 'Options du pied de page',
        'menu_title'   => 'Pied de page',
        'parent_slug'  => 'cw4-theme-options-generales',
    ));
}

// Register Custom Post Type
function cw4_films() {

	$labels = array(
		'name'                  => _x( 'Films', 'Post Type General Name', 'cinetim' ),
		'singular_name'         => _x( 'Film', 'Post Type Singular Name', 'cinetim' ),
		'menu_name'             => __( 'Films', 'cinetim' ),
		'name_admin_bar'        => __( 'Post Type', 'cinetim' ),
		'archives'              => __( 'Item Archives', 'cinetim' ),
		'attributes'            => __( 'Item Attributes', 'cinetim' ),
		'parent_item_colon'     => __( 'Parent Item:', 'cinetim' ),
		'all_items'             => __( 'Tous les films', 'cinetim' ),
		'add_new_item'          => __( 'Ajouter un film', 'cinetim' ),
		'add_new'               => __( 'Ajouter un film', 'cinetim' ),
		'new_item'              => __( 'Nouveau film', 'cinetim' ),
		'edit_item'             => __( 'Éditer le film', 'cinetim' ),
		'update_item'           => __( 'MAJ le film', 'cinetim' ),
		'view_item'             => __( 'View Item', 'cinetim' ),
		'view_items'            => __( 'View Items', 'cinetim' ),
		'search_items'          => __( 'Search Item', 'cinetim' ),
		'not_found'             => __( 'Not found', 'cinetim' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'cinetim' ),
		'featured_image'        => __( 'Featured Image', 'cinetim' ),
		'set_featured_image'    => __( 'Set featured image', 'cinetim' ),
		'remove_featured_image' => __( 'Remove featured image', 'cinetim' ),
		'use_featured_image'    => __( 'Use as featured image', 'cinetim' ),
		'insert_into_item'      => __( 'Insert into item', 'cinetim' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'cinetim' ),
		'items_list'            => __( 'Items list', 'cinetim' ),
		'items_list_navigation' => __( 'Items list navigation', 'cinetim' ),
		'filter_items_list'     => __( 'Filter items list', 'cinetim' ),
	);
	$args = array(
		'label'                 => __( 'Film', 'cinetim' ),
		'description'           => __( 'Films', 'cinetim' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-editor-video',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'film', $args );

}
add_action( 'init', 'cw4_films', 0 );

function cw4_acteurs() {

	$labels = array(
		'name'                  => _x( 'Acteurs', 'Post Type General Name', 'cinetim' ),
		'singular_name'         => _x( 'Acteur', 'Post Type Singular Name', 'cinetim' ),
		'menu_name'             => __( 'Acteurs', 'cinetim' ),
		'name_admin_bar'        => __( 'Post Type', 'cinetim' ),
		'archives'              => __( 'Item Archives', 'cinetim' ),
		'attributes'            => __( 'Item Attributes', 'cinetim' ),
		'parent_item_colon'     => __( 'Parent Item:', 'cinetim' ),
		'all_items'             => __( 'Tous les acteurs', 'cinetim' ),
		'add_new_item'          => __( 'Ajouter un acteur', 'cinetim' ),
		'add_new'               => __( 'Ajouter un acteur', 'cinetim' ),
		'new_item'              => __( 'Nouveau acteur', 'cinetim' ),
		'edit_item'             => __( 'Éditer le acteur', 'cinetim' ),
		'update_item'           => __( 'MAJ le acteur', 'cinetim' ),
		'view_item'             => __( 'View Item', 'cinetim' ),
		'view_items'            => __( 'View Items', 'cinetim' ),
		'search_items'          => __( 'Search Item', 'cinetim' ),
		'not_found'             => __( 'Not found', 'cinetim' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'cinetim' ),
		'featured_image'        => __( 'Featured Image', 'cinetim' ),
		'set_featured_image'    => __( 'Set featured image', 'cinetim' ),
		'remove_featured_image' => __( 'Remove featured image', 'cinetim' ),
		'use_featured_image'    => __( 'Use as featured image', 'cinetim' ),
		'insert_into_item'      => __( 'Insert into item', 'cinetim' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'cinetim' ),
		'items_list'            => __( 'Items list', 'cinetim' ),
		'items_list_navigation' => __( 'Items list navigation', 'cinetim' ),
		'filter_items_list'     => __( 'Filter items list', 'cinetim' ),
	);
	$args = array(
		'label'                 => __( 'Acteur', 'cinetim' ),
		'description'           => __( 'Acteurs', 'cinetim' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businessman',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'acteur', $args );

}
add_action( 'init', 'cw4_acteurs', 0 );

function cw4_realisateurs() {

	$labels = array(
		'name'                  => _x( 'Réalisateurs', 'Post Type General Name', 'cinetim' ),
		'singular_name'         => _x( 'Réalisateur', 'Post Type Singular Name', 'cinetim' ),
		'menu_name'             => __( 'Réalisateurs', 'cinetim' ),
		'name_admin_bar'        => __( 'Post Type', 'cinetim' ),
		'archives'              => __( 'Item Archives', 'cinetim' ),
		'attributes'            => __( 'Item Attributes', 'cinetim' ),
		'parent_item_colon'     => __( 'Parent Item:', 'cinetim' ),
		'all_items'             => __( 'Tous les réalisateurs', 'cinetim' ),
		'add_new_item'          => __( 'Ajouter un réalisateur', 'cinetim' ),
		'add_new'               => __( 'Ajouter un réalisateur', 'cinetim' ),
		'new_item'              => __( 'Nouveau réalisateur', 'cinetim' ),
		'edit_item'             => __( 'Éditer le réalisateur', 'cinetim' ),
		'update_item'           => __( 'MAJ le réalisateur', 'cinetim' ),
		'view_item'             => __( 'View Item', 'cinetim' ),
		'view_items'            => __( 'View Items', 'cinetim' ),
		'search_items'          => __( 'Search Item', 'cinetim' ),
		'not_found'             => __( 'Not found', 'cinetim' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'cinetim' ),
		'featured_image'        => __( 'Featured Image', 'cinetim' ),
		'set_featured_image'    => __( 'Set featured image', 'cinetim' ),
		'remove_featured_image' => __( 'Remove featured image', 'cinetim' ),
		'use_featured_image'    => __( 'Use as featured image', 'cinetim' ),
		'insert_into_item'      => __( 'Insert into item', 'cinetim' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'cinetim' ),
		'items_list'            => __( 'Items list', 'cinetim' ),
		'items_list_navigation' => __( 'Items list navigation', 'cinetim' ),
		'filter_items_list'     => __( 'Filter items list', 'cinetim' ),
	);
	$args = array(
		'label'                 => __( 'Réalisateur', 'cinetim' ),
		'description'           => __( 'Réalisateurs', 'cinetim' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-megaphone',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'realisateur', $args );

}
add_action( 'init', 'cw4_realisateurs', 0 );


// enlever les attributs width / height des balises images insérées
// avec the_post_thumbnail
function cw4_img_no_attributes( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
add_filter('post_thumbnail_html', 'cw4_img_no_attributes', 10, 3);