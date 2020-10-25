<?php

add_theme_support('post-thumbnails');

// Register Custom Post Type Chalets
function cpt_chalets() {

    $labels = array(
        'name'                  => _x( 'Chalets', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Chalet', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Chalets', 'text_domain' ),
        'name_admin_bar'        => __( 'Chalets', 'text_domain' ),
        'archives'              => __( 'Chalets Archives', 'text_domain' ),
        'attributes'            => __( 'Chalets Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Chalets:', 'text_domain' ),
        'all_items'             => __( 'All Chalets', 'text_domain' ),
        'add_new_item'          => __( 'Add New Chalets', 'text_domain' ),
        'add_new'               => __( 'Add Chalet', 'text_domain' ),
        'new_item'              => __( 'New Chalet', 'text_domain' ),
        'edit_item'             => __( 'Edit Chalet', 'text_domain' ),
        'update_item'           => __( 'Update Chalet', 'text_domain' ),
        'view_item'             => __( 'View Chalet', 'text_domain' ),
        'view_items'            => __( 'View Chalets', 'text_domain' ),
        'search_items'          => __( 'Search Chalet', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Chalet', 'text_domain' ),
        'description'           => __( 'Post Type Description', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'chalets', $args );

}
add_action( 'init', 'cpt_chalets', 0 );

