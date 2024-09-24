<?php

function amar_dokan_enqueue_style_js()  {

    $amar_dokan_version = wp_get_theme()->get( 'Version' ) ;

    $amar_dokan_version = is_string( $amar_dokan_version ) ? $amar_dokan_version : false;

    wp_enqueue_style( 'amar-dokan-style', get_template_directory_uri() . '/assets/css/style.css', [], $amar_dokan_version, 'all' );
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', [], '5.3.3', 'all');

    //Font Awesome 
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', array(), null);
    // Script
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'amar-dokan-script', get_template_directory_uri() . '/assets/js/script.js', [], $amar_dokan_version, true );
}

add_action( 'wp_enqueue_scripts', 'amar_dokan_enqueue_style_js' );
