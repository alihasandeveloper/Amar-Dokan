<header>
    <div class="header-wrapper">
        <div class="container">
            <div class="row header-area">
                <div class="col-md-3">
                    <div class="brand-logo">
                        <a class="logo" href="<?php echo home_url(); ?>">
                            <?php if (get_theme_mod('amar-dokan-header-logo')) : ?>
                                <img src="<?php echo esc_url(get_theme_mod('amar-dokan-header-logo')); ?>" alt="Header Logo">
                            <?php else : ?>
                                <span class="logo-text">Amar Dokan</span>
                            <?php endif; ?>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="nav-search-box">
                        <?php if (is_active_sidebar('header-search')) : ?>
                            <div id="secondary" class="widget-area">
                                <?php dynamic_sidebar('header-search'); ?>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="nav-menu">
                        <?php wp_nav_menu(array('theme_location' => 'cart_menu', 'menu_class' => 'header-cart-menu')); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>