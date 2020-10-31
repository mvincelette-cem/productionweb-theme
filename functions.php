<?php

if (function_exists('add_theme_support')) {

    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true);
    add_image_size('medium', 250, '', true);
    add_image_size('small', 120, '', true);
    add_image_size('custom-size', 775, 637, true);

}


// Register Custom Post Type Chalets

function cpt_chalets()
{

    $labels = array(
        'name' => _x('Chalets', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Chalet', 'Post Type Singular Name', 'text_domain'),
        'menu_name' => __('Chalets', 'text_domain'),
        'name_admin_bar' => __('Chalets', 'text_domain'),
        'archives' => __('Chalets Archives', 'text_domain'),
        'attributes' => __('Chalets Attributes', 'text_domain'),
        'parent_item_colon' => __('Parent Chalets:', 'text_domain'),
        'all_items' => __('All Chalets', 'text_domain'),
        'add_new_item' => __('Add New Chalets', 'text_domain'),
        'add_new' => __('Add Chalet', 'text_domain'),
        'new_item' => __('New Chalet', 'text_domain'),
        'edit_item' => __('Edit Chalet', 'text_domain'),
        'update_item' => __('Update Chalet', 'text_domain'),
        'view_item' => __('View Chalet', 'text_domain'),
        'view_items' => __('View Chalets', 'text_domain'),
        'search_items' => __('Search Chalet', 'text_domain'),
        'not_found' => __('Not found', 'text_domain'),
        'not_found_in_trash' => __('Not found in Trash', 'text_domain'),
        'featured_image' => __('Featured Image', 'text_domain'),
        'set_featured_image' => __('Set featured image', 'text_domain'),
        'remove_featured_image' => __('Remove featured image', 'text_domain'),
        'use_featured_image' => __('Use as featured image', 'text_domain'),
        'insert_into_item' => __('Insert into item', 'text_domain'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
        'items_list' => __('Items list', 'text_domain'),
        'items_list_navigation' => __('Items list navigation', 'text_domain'),
        'filter_items_list' => __('Filter items list', 'text_domain'),
    );
    $args = array(
        'label' => __('Chalet', 'text_domain'),
        'description' => __('Post Type Description', 'text_domain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'taxonomies' => array('category', 'post_tag'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type('cpt_chalets', $args);

}

add_action('init', 'cpt_chalets', 0);


function pourvoirie_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
        wp_enqueue_style('styles', get_template_directory_uri() . '/css/main.css', array(), '1', 'all');
//        wp_enqueue_style( 'styles-anim', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' , array(), '4.1.1', 'all');
        wp_enqueue_style('styles-anim', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css', array(), '3.5.2', 'all');
    }
}

function add_theme_scripts()
{
    wp_enqueue_script('script-jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js', array('jquery'), ('3.2.1'), true);
    wp_enqueue_script('script-jwaypoints', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js', array('jquery'), ('1'), true);
    wp_enqueue_script('mon-script', get_template_directory_uri() . '/js/script.js', array(), ('1'), true);
    wp_enqueue_script('icon-script', 'https://code.iconify.design/1/1.0.6/iconify.min.js', array('jquery'), ('1.0.6'), true);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');
add_action('init', 'pourvoirie_header_scripts');

function cpt_activites()
{
    $labels = array(
        'name' => _x('Activités', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Activité', 'Post Type Singular Name', 'text_domain'),
        'menu_name' => __('Activités', 'text_domain'),
        'name_admin_bar' => __('Activités', 'text_domain'),
        'archives' => __('Activités Archives', 'text_domain'),
        'attributes' => __('Activités Attributes', 'text_domain'),
        'parent_item_colon' => __('Parent Activités:', 'text_domain'),
        'all_items' => __('All Activités', 'text_domain'),
        'add_new_item' => __('Add New Activité', 'text_domain'),
        'add_new' => __('Add Activité', 'text_domain'),
        'new_item' => __('New Activité', 'text_domain'),
        'edit_item' => __('Edit Activité', 'text_domain'),
        'update_item' => __('Update Activité', 'text_domain'),
        'view_item' => __('View Activité', 'text_domain'),
        'view_items' => __('View Activité', 'text_domain'),
        'search_items' => __('Search Activité', 'text_domain'),
        'not_found' => __('Not found', 'text_domain'),
        'not_found_in_trash' => __('Not found in Trash', 'text_domain'),
        'featured_image' => __('Featured Image', 'text_domain'),
        'set_featured_image' => __('Set featured image', 'text_domain'),
        'remove_featured_image' => __('Remove featured image', 'text_domain'),
        'use_featured_image' => __('Use as featured image', 'text_domain'),
        'insert_into_item' => __('Insert into item', 'text_domain'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
        'items_list' => __('Items list', 'text_domain'),
        'items_list_navigation' => __('Items list navigation', 'text_domain'),
        'filter_items_list' => __('Filter items list', 'text_domain'),
    );
    $args = array(
        'label' => __('Activité', 'text_domain'),
        'description' => __('Post Type Description', 'text_domain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'taxonomies' => array('category', 'post_tag'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type('cpt_activites', $args);
}

add_action('init', 'cpt_activites', 0);

function cpt_periodes()
{
    $labels = array(
        'name' => _x('Periodes', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Periode', 'Post Type Singular Name', 'text_domain'),
        'menu_name' => __('Periodes', 'text_domain'),
        'name_admin_bar' => __('Periodes', 'text_domain'),
        'archives' => __('Periodes Archives', 'text_domain'),
        'attributes' => __('Periodes Attributes', 'text_domain'),
        'parent_item_colon' => __('Parent Activités:', 'text_domain'),
        'all_items' => __('All Periodes', 'text_domain'),
        'add_new_item' => __('Add New Periode', 'text_domain'),
        'add_new' => __('Add Periode', 'text_domain'),
        'new_item' => __('New Periode', 'text_domain'),
        'edit_item' => __('Edit Periode', 'text_domain'),
        'update_item' => __('Update Periode', 'text_domain'),
        'view_item' => __('View Periode', 'text_domain'),
        'view_items' => __('View Periode', 'text_domain'),
        'search_items' => __('Search Periode', 'text_domain'),
        'not_found' => __('Not found', 'text_domain'),
        'not_found_in_trash' => __('Not found in Trash', 'text_domain'),
        'featured_image' => __('Featured Image', 'text_domain'),
        'set_featured_image' => __('Set featured image', 'text_domain'),
        'remove_featured_image' => __('Remove featured image', 'text_domain'),
        'use_featured_image' => __('Use as featured image', 'text_domain'),
        'insert_into_item' => __('Insert into item', 'text_domain'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
        'items_list' => __('Items list', 'text_domain'),
        'items_list_navigation' => __('Items list navigation', 'text_domain'),
        'filter_items_list' => __('Filter items list', 'text_domain'),
    );
    $args = array(
        'label' => __('Periode', 'text_domain'),
        'description' => __('Post Type Description', 'text_domain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'taxonomies' => array('category', 'post_tag'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type('cpt_periodes', $args);
}

add_action('init', 'cpt_periodes', 0);



function ajouter_menu(){
    register_nav_menus(array(
        "menu_principal" => 'menu_principal',
        "menu_footer" => 'menu_footer'
    ));

}
add_action('init', 'ajouter_menu');


