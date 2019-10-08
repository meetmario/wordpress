<?php
if ( ! function_exists( 'jm_restaurant_setup' ) ) :

function jm_restaurant_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Load Text Domain Begin */
    load_theme_textdomain( 'jm_restaurant', get_template_directory() . '/languages' );
    /* Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );
	
	/*
     * Enable support for Custom Background on pages.
     */
	
	
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-height' => true,
		'flex-width' => true,
	) );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'jm_restaurant' ),
        'social'  => __( 'Social Links Menu', 'jm_restaurant' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );
	
	add_filter( ‘social_icons_hide_text’, ‘__return_true’ );
	
	

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
}
endif; // jm_restaurant_setup

add_action( 'after_setup_theme', 'jm_restaurant_setup' );

// display featured image
function display_featured_image($content) {
	global $post;
	
	$img_path = 'get_template_directory_uri()./images/banner.jpg'; // fallback image
	
	if (is_single()) {
		if (has_post_thumbnail()) {
			the_post_thumbnail();
		} else {
			$attachments = get_posts(array(
				'post_type' => 'attachment', 
				'post_mime_type'=>'image', 
				'posts_per_page' => 0, 
				'post_parent' => $post->ID, 
				'order'=>'ASC'
			));
			if ($attachments) {
				foreach ($attachments as $attachment) {
					set_post_thumbnail($post->ID, $attachment->ID);
					break;
				}
				the_post_thumbnail();
			} else {
				$content = '<img src="' . $img_path . '" alt="">' . $content;
			}
		}
	}
	return $content;
}

function jm_restaurant_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Menu Bottom Widget', 'jm_restaurant' ),
		'id'            => 'sidebar-menu',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'jm_restaurant' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'jm_restaurant' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'jm_restaurant' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Home 1', 'jm_restaurant' ),
		'id'            => 'home-1',
		'description'   => __( 'Add widgets here to appear in your Home Section 1.', 'jm_restaurant' ),
		'before_widget' => '<div class="inner"><center>',
		'after_widget'  => '</div></center></div>',
		'before_title'  => '<header class="major"><h2>',
		'after_title'   => '</h2></header><div class="row">',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'jm_restaurant' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'jm_restaurant' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'jm_restaurant_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function jm_restaurant_scripts() {
	
	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/assets/css/main.css' );
	wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 'jm-example-style', get_stylesheet_uri() );
	wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', false, null, false);
	wp_enqueue_script( 'jquery.scrollex', get_template_directory_uri() . '/assets/js/jquery.scrollex.min.js', false, null, false);
	wp_enqueue_script( 'jquery.scrolly', get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js', false, null, false);
	wp_enqueue_script( 'jquery.ui', get_template_directory_uri() . '/assets/js/jquery-ui.js', false, null, false);
	wp_enqueue_script( 'skel', get_template_directory_uri() . '/assets/js/skel.min.js', false, null, false);
	wp_enqueue_script( 'util', get_template_directory_uri() . '/assets/js/util.js', false, null, false);
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', false, null, false);

    
	}

add_action( 'wp_enqueue_scripts', 'jm_restaurant_scripts' );

/**
 * Customizer additions.
 *
 * @since JM Restaurant 1.0
 */
require get_template_directory() . '/inc/customizer.php';