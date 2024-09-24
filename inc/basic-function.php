<?php
// title tag
add_theme_support('title-tag');


// Register Menus

register_nav_menus(
    array(
        'header_menu' => __('Header Menu'),
        'cart_menu' => __('Cart Menu'),
        'footer_menu' => __('Footer Menu')
    )
);