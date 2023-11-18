<?php

// WP function to set up menu locations
// https://developer.wordpress.org/themes/functionality/navigation-menus/
function register_my_menus() {
    register_nav_menus(
        [
            'header-menu' => 'Header Menu',
        ]
    );
}
add_action( 'init', 'register_my_menus' );

// WP function to load styles and scripts
// https://developer.wordpress.org/themes/basics/including-css-javascript/#combining-enqueue-functions
function add_theme_scripts() {
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_script(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',
        [],
        '5.3',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


// WP function to create a widget area - sidebar
add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
	register_sidebar(
		array(
			'id'            => 'footer',
			'name'          => __( 'Footer' ),
			'description'   => __( 'Footer placement for widgets.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}