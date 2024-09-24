<?php
/*
* This template for displaying the header
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>></body>

<header class="header-wrapper">
    <div class="container ">
        <div class="header-top-wrapper">
            <div class="header-top-offer">

            </div>
            <div class="header-top-social-icons">

            </div>
        </div>
        <div class="header-content-wrapper">
            <div class="nav-logo">
                <a href="<?php echo home_url(); ?>">
                    <?php if (get_theme_mod('amar-dokan-header-logo')) : ?>
                        <img src="<?php echo esc_url(get_theme_mod('amar-dokan-header-logo')); ?>" alt="Header Logo">
                    <?php else : ?>
                        <span class="logo-text">Amar Dokan</span>
                    <?php endif; ?>
                </a>

            </div>

            <div class="nav-menu">
                <?php wp_nav_menu(array('theme_location' => 'header_menu', 'menu_class' => 'header-nav-menu')); ?>
            </div>
        </div>
    </div>
</header>