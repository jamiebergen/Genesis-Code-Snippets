<?php

// Template for a Custom Post Type
// (and what better example to use than puppies???)

//In functions.php:

// Initialize Puppy custom post type
add_action( 'init', 'jmb_puppy_cpt' );

// Create Puppy custom post type
function jmb_puppy_cpt() {
    $puppy_labels = array(
        'name' => _x('Puppies', 'post type general name'),
        'singular_name' => _x('Puppy', 'post type singular name'),
        'all_items' => __('All Puppies'),
        'add_new' => _x('Add new Puppy', 'Puppies'),
        'add_new_item' => __('Add new Puppy'),
        'edit_item' => __('Edit Puppy'),
        'new_item' => __('New Puppy'),
        'view_item' => __('View Puppy'),
        'search_items' => __('Search in Puppies'),
        'not_found' =>  __('No Puppies found'),
        'not_found_in_trash' => __('No Puppies found in trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $puppy_labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 6,
        'rewrite' => array('slug' => 'puppies'),
        'supports' => array('title','editor','thumbnail','excerpt','genesis-cpt-archives-settings'),
        'has_archive' => 'puppies'
    );
    register_post_type( 'jmb_puppy', $args );
}

// Menu Positions

// 0 - at the very top
// 5 - below Posts
// 10 - below Media
// 15 - below Links
// 20 - below Pages
// 25 - below comments
// 60 - below first separator
// 65 - below Plugins
// 70 - below Users
// 75 - below Tools
// 80 - below Settings
// 100 - below second separator