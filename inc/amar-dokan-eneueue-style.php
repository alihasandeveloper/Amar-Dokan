<?php

function amar_dokan_enqueue_style()  {

    $amar_dokan_version = wp_get_theme()->get( 'Version' ) ;

    $amar_dokan_version = is_string( $amar_dokan_version ) ? $amar_dokan_version : false;

    wp_enqueue_style( 'amar-dokan-style', get_template_directory_uri() . '/assets/css/amar-dokan.css', [], $amar_dokan_version, 'all' );
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', [], '5.3.3', 'all');
    
}

add_action( 'wp_enqueue_scripts', 'amar_dokan_enqueue_style' );