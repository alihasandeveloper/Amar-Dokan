<?php
// Add Search Widget

function amar_dokan_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Header Search Widget', 'amar-dokan' ),
        'id'            => 'header-search',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'amar-dokan' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
/******  067e055c-ffcb-4a4b-a4df-9beda15709f2  *******/
add_action( 'widgets_init', 'amar_dokan_widgets_init' );
