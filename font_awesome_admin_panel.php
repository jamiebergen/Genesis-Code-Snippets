<?php

// Use Font Awesome Icons for CPTs in WP dashboard

// In functions.php:

// Load Font Awesome for use in admin panel
add_action( 'admin_init', 'jmb_load_font_awesome' );
// Add Font Awesome icons to CPT's in dashboard
add_action( 'admin_head', 'jmb_fontawesome_icon_dashboard' );


/**
* Register and load font awesome CSS files using a CDN.
* @link http://www.bootstrapcdn.com/#fontawesome
*/
function jmb_load_font_awesome() {
    wp_enqueue_style( 'prefix-font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css', array(), '4.1.0' );
}


function jmb_fontawesome_icon_dashboard() {
   echo "<style type='text/css' media='screen'>
           #menu-posts-jmb_portfolio .dashicons-admin-post:before, .dashicons-format-standard:before {
           font-family: Fontawesome !important;
           content: '\\f115'; }

           #menu-posts-jmb_news .dashicons-admin-post:before, .dashicons-format-standard:before {
           font-family: Fontawesome !important;
           content: '\\f0a1'; }
         </style>";
}