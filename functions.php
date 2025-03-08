<?php

function mib_enqueues()
{
    wp_enqueue_script(
        'child-scripts',
        get_stylesheet_directory_uri() . '/js/child-scripts.js',
        array(),
        '1.0.0',
        array('strategy' => 'defer')
    );
}

add_action(
    'wp_enqueue_scripts',
    'mib_enqueues'
);


// load parent styles
function mib_enqueue_styles()
{
    wp_enqueue_style(
        'mib-parent-style',
        get_parent_theme_file_uri('style.css')
    );
}

add_action(
    'wp_enqueue_scripts',
    'mib_enqueue_styles'
);

/**
 * Lower Yoast SEO Metabox location
 */
function yoast_to_bottom()
{
    return 'low';
}
add_filter('wpseo_metabox_prio', 'yoast_to_bottom');