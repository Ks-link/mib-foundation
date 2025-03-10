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

    //bringing in Barlow and Merriweather Google fonts

	wp_enqueue_style( 
		'mib-googlefonts', //unique handle
		'https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap', //url to the css file (it is a css file even though it doesnt end in .css)
		array(), // dependencies, googlefonts dont have any
		null // version number for googlefonts, always set to null for googlefonts or it breaks
			// there's a 5th one you can set for screen size, print, etc. but we don't need to use it.
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