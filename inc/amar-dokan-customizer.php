<?php


function amar_dokan_header_area($wp_customize)
{
    // Add section to the customizer
    $wp_customize->add_section('amar_dokan_header_area', array(
        'title'      => __('Header Area', 'amar-dokan'),
        'description' => __('Header Logo ', 'amar-dokan'),
    ));

    // Add setting for the header logo
    $wp_customize->add_setting('amar-dokan-header-logo', array(
        'default'   => '',
    ));

    // Add control to upload the logo image
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'amar_dokan_logo', array(
        'label'    => __('Upload an Image', 'amar-dokan'),
        'section'  => 'amar_dokan_header_area',
        'settings' => 'amar-dokan-header-logo',
        'priority' => 1,
        'description' => __('If you interested to change or update your logo you can do it.', 'amar-dokan'),
    )));
}

add_action('customize_register', 'amar_dokan_header_area');

//Color Customizer

function amar_dokan_color_customizer($wp_customize)
{
    // Add a section for the color picker
    $wp_customize->add_section('amar_dokan_color_section', array(
        'title'       => __('Theme Color Settings', 'amar-dokan'),
        'description' => __('Customize the colors for your theme.', 'amar-dokan'),
        // 'priority'    => 30,
    ));

    // Add a setting for the primary color
    $wp_customize->add_setting('amar_dokan_primary_color', array(
        'default'   => '#15C5CE', // Default color
        'transport' => 'refresh', // or 'postMessage' for live preview
    ));

    // Add a color control for the primary color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'amar_dokan_primary_color_control', array(
        'label'    => __('Theme Primary Color', 'amar-dokan'),
        'section'  => 'amar_dokan_color_section',
        'settings' => 'amar_dokan_primary_color',
    )));
}

add_action('customize_register', 'amar_dokan_color_customizer');


function amar_dokan_customizer_css() {
    $primary_color = get_theme_mod('amar_dokan_primary_color', '#ff3f34');

    echo '<style>
        :root {
            --primary-color: ' . esc_attr($primary_color) . ';
        }
    </style>';
}
add_action('wp_head', 'amar_dokan_customizer_css');





