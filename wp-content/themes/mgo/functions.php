<?php


function twentyfifteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'logo','mgo-design' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add logo' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

		register_sidebar( array(
		'name'          => __( 'Footer info','mgo-design' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add footer','mgo-design' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

		register_sidebar( array(
		'name'          => __( 'Footer info2','mgo-design' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add footer','mgo-design' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
				register_sidebar( array(
		'name'          => __( 'Footer info3','mgo-design' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Add footer','mgo-design' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );		register_sidebar( array(
		'name'          => __( 'Footer info4','mgo-design' ),
		'id'            => 'sidebar-5',
		'description'   => __( 'Add footer','mgo-design' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
			register_sidebar( array(
		'name'          => __( 'Social','mgo-design' ),
		'id'            => 'sidebar-6',
		'description'   => __( 'Add social','mgo-design'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'twentyfifteen_widgets_init' );

function register_my_menu()
{
    register_nav_menu('header-menu', 'Header Menu');
}

add_action('init', 'register_my_menu');
add_theme_support('post-thumbnails');

function scripts() {
	  if( is_front_page() ){
	wp_deregister_style( 'contact-form-7');
	}
	// Load our main stylesheet.
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('font', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,400italic');
    wp_enqueue_style('font', 'http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,400italic');
	wp_enqueue_script( 'js', '//code.jquery.com/jquery-1.11.3.min.js', array(), '1', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('js'), '1', true );
	}
add_action( 'wp_enqueue_scripts', 'scripts' );

function md_footer_enqueue_scripts() {
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
}
add_action('wp_enqueue_scripts', 'md_footer_enqueue_scripts');

function remove_cssjs_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );


