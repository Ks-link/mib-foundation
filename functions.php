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

// Want to try adding our colours to the block editor, believe this is how this is done
//add_theme_support('editor-color-palette') is called during the Ixion setup so this should hopefully tie in after that

function mib_add_colours()
{

    $existing = get_theme_support('editor-color-palette');

    $new = array_merge($existing[0], array(
        array(
            'name'  => esc_html__( 'MIB_White', 'ixion' ),
            'slug'  => 'mib-white',
            'color' => '#fafafa',
        ),
        array(
            'name'  => esc_html__( 'MIB_Black', 'ixion' ),
            'slug' => 'mib-black',
            'color' => '#000000',
        ),
        array(
            'name'  => esc_html__( 'MIB Cream', 'ixion' ),
            'slug' => 'mib-cream',
            'color' => '#F2F2ED',
        ),
        array(
            'name'  => esc_html__( 'MIB Slate', 'ixion' ),
            'slug' => 'mib-slate',
            'color' => '#212121',
        ),
        array(
            'name'  => esc_html__( 'MIB Maroon', 'ixion' ),
            'slug' => 'mib-maroon',
            'color' => '#57181F',
        ),
    ));

    add_theme_support('editor-color-palette',  $new);
}
add_action('after_setup_theme', 'mib_add_colours', 20);


/**
 * Lower Yoast SEO Metabox location
 */
function yoast_to_bottom()
{
    return 'low';
}
add_filter('wpseo_metabox_prio', 'yoast_to_bottom');