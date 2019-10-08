<?php
/**
 * salonglima functions and definitions
 *
 * @package salonglima
 */
if ( ! function_exists( 'salonglima_setup' ) ) :

    function salonglima_setup() {
    
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         */
        /* Load Text Domain Begin */
        load_theme_textdomain( 'salonglima', get_template_directory() . '/languages' );
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
        set_post_thumbnail_size( 445, 296, true );
        
        /*
         * Enable support for Custom Background on pages.
         */
        
        
        add_theme_support( 'custom-logo', array(
            'height'      => 50,
            'width'       => 110,
            'flex-height' => true,
            'flex-width' => true,
        ) );
    
        // Add menus.
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'salonglima' ),
            'social'  => __( 'Social Links Menu', 'salonglima' ),
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
         * Widget Areas in this theme
         * 
         */

        function salonglima_widgets_init() {
            register_sidebar( array(
                'name'          => __( 'Footer 1', 'salonglima' ),
                'id'            => 'footer-1',
                'description'   => __( 'Add widgets here to appear in your footer area on the left.', 'jm_restaurant' ),
                'before_widget' => '<div class="col-sm-6 col-md-4 p-t-50">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="txt13 m-b-33">',
                'after_title'   => '</h4>',
            ) );
        
            register_sidebar( array(
                'name'          => __( 'Footer 2', 'salonglima' ),
                'id'            => 'footer-2',
                'description'   => __( 'Add widgets here to appear in your footer area in center.', 'jm_restaurant' ),
                'before_widget' => '<div class="col-sm-6 col-md-4 p-t-50">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="txt13 m-b-33">',
                'after_title'   => '</h4>',
            ) );
            
            register_sidebar( array(
                'name'          => __( 'Footer 3', 'salonglima' ),
                'id'            => 'footer-3',
                'description'   => __( 'Add widgets here to appear in your footer area to the right.', 'jm_restaurant' ),
                'before_widget' => '<div class="col-sm-6 col-md-4 p-t-50">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="txt13 m-b-33">',
                'after_title'   => '</h4>',
            ) );
        }
        add_action( 'widgets_init', 'salonglima_widgets_init' );

        if ( ! function_exists( 'salonglima_customize_register' ) ) :

            function salonglima_customize_register( $wp_customize ) {
                // Do stuff with $wp_customize, the WP_Customize_Manager object.

                $wp_customize->add_section( 'Social Links', array(
                    'title' => __( 'Social Links Settings', 'salonglima' )
                ));

                $wp_customize->add_setting( 'sociallink_instagram', array(
                    'type' => 'theme_mod'
                ));
            
                $wp_customize->add_control( 'sociallink_instagram', array(
                    'label' => __( 'Footer Social Link Instagram', 'salonglima' ),
                    'type' => 'url',
                    'section' => 'social_links'
                ));
            
                $wp_customize->add_setting( 'sociallink_facebook', array(
                    'type' => 'theme_mod'
                ));
            
                $wp_customize->add_control( 'sociallink_facebook', array(
                    'label' => __( 'Social Link Facebook', 'salonglima' ),
                    'type' => 'url',
                    'section' => 'social_links'
                ));
            
                $wp_customize->add_setting( 'sociallink_twitter', array(
                    'type' => 'theme_mod'
                ));
            
                $wp_customize->add_control( 'sociallink_twitter', array(
                    'label' => __( 'Social Link Twitter', 'salonglima' ),
                    'type' => 'url',
                    'section' => 'social_links'
                ));

            }
            add_action( 'customize_register', 'salonglima_customize_register' );
            endif;// salonglima_customize_register

            if ( ! function_exists( 'salonglima_enqueue_scripts' ) ) :
                function salonglima_enqueue_scripts() {

                    wp_deregister_script( 'jquery' );
                    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/vendor/jquery/jquery-3.2.1.min.js', false, null, true);

                    wp_deregister_script( 'animsition' );
                    wp_enqueue_script( 'animsition', get_template_directory_uri() . '/vendor/animsition/js/animsition.min.js', false, null, true);

                    wp_deregister_script( 'popper' );
                    wp_enqueue_script( 'popper', get_template_directory_uri() . '/vendor/bootstrap/js/popper.js', false, null, true);

                    wp_deregister_script( 'bootstrap' );
                    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', false, null, true);

                    wp_deregister_script( 'select2' );
                    wp_enqueue_script( 'select2', get_template_directory_uri() . '/vendor/select2/select2.min.js', false, null, true);

                    wp_deregister_script( 'moment' );
                    wp_enqueue_script( 'moment', get_template_directory_uri() . 'vendor/daterangepicker/moment.min.js', false, null, true);

                    wp_deregister_script( 'daterangepicker' );
                    wp_enqueue_script( 'daterangepicker', get_template_directory_uri() . 'vendor/daterangepicker/daterangepicker.js', false, null, true);

                    wp_deregister_script( 'slick' );
                    wp_enqueue_script( 'slick', get_template_directory_uri() . 'vendor/slick/slick.min.js', false, null, true);

                    wp_deregister_script( 'slick-custom' );
                    wp_enqueue_script( 'slick-custom', get_template_directory_uri() . 'js/slick-custom.js', false, null, true);

                    wp_deregister_script( 'parallax100' );
                    wp_enqueue_script( 'parallax100', get_template_directory_uri() . 'vendor/parallax100/parallax100.js', false, null, true);

                    wp_deregister_script( 'countdowntime' );
                    wp_enqueue_script( 'countdowntime', get_template_directory_uri() . 'vendor/countdowntime/countdowntime.js', false, null, true);

                    wp_deregister_script( 'lightbox' );
                    wp_enqueue_script( 'lightbox', get_template_directory_uri() . 'vendor/lightbox2/js/lightbox.min.js', false, null, true);

                    wp_deregister_script( 'isotope.pkgd' );
                    wp_enqueue_script( 'isotope.pkgd', get_template_directory_uri() . 'vendor/isotope/isotope.pkgd.min.js', false, null, true);

                    wp_deregister_script( 'main' );
                    wp_enqueue_script( 'main', get_template_directory_uri() . 'js/main.js', false, null, true);

                    /* enque styles */

                    wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,700', false );

                    wp_deregister_style( 'bootstrap' );
                    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', false, null, 'all');

                    wp_deregister_style( 'font-awesome' );
                    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/fonts/font-awesome-4.7.0/css/font-awesome.min.css', false, null, 'all');

                    wp_deregister_style( 'themify-icons' );
                    wp_enqueue_style( 'themify-icons', get_template_directory_uri() . '/fonts/themify/themify-icons.css', false, null, 'all');

                    wp_deregister_style( 'animate' );
                    wp_enqueue_style( 'animate', get_template_directory_uri() . '/vendor/animate/animate.css', false, null, 'all');

                    wp_deregister_style( 'hamburgers' );
                    wp_enqueue_style( 'hamburgers', get_template_directory_uri() . '/vendor/css-hamburgers/hamburgers.min.css', false, null, 'all');

                    wp_deregister_style( 'animsition' );
                    wp_enqueue_style( 'animsition', get_template_directory_uri() . '/vendor/animsition/css/animsition.min.css', false, null, 'all');

                    wp_deregister_style( 'select2' );
                    wp_enqueue_style( 'select2', get_template_directory_uri() . '/vendor/select2/select2.min.css', false, null, 'all');

                    wp_deregister_style( 'daterangepicker' );
                    wp_enqueue_style( 'daterangepicker', get_template_directory_uri() . '/vendor/daterangepicker/daterangepicker.css', false, null, 'all');

                    wp_deregister_style( 'slick' );
                    wp_enqueue_style( 'slick', get_template_directory_uri() . '/vendor/slick/slick.css', false, null, 'all');

                    wp_deregister_style( 'lightbox' );
                    wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/vendor/lightbox2/css/lightbox.min.css', false, null, 'all');

                    wp_deregister_style( 'util' );
                    wp_enqueue_style( 'util', get_template_directory_uri() . '/css/util.css', false, null, 'all');

                    wp_deregister_style( 'main' );
                    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', false, null, 'all');

                }
                add_action( 'wp_enqueue_scripts', 'salonglima_enqueue_scripts' );
            endif;

            function clean_custom_menus() {
                $menu_name = 'primary'; // specify custom menu slug
                if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
                    $menu = wp_get_nav_menu_object($locations[$menu_name]);
                    $menu_items = wp_get_nav_menu_items($menu->term_id);
            
                    $menu_list .= "\t\t\t\t". '<ul class="menu-sidebar p-t-95 p-b-20">' ."\n";
                    foreach ((array) $menu_items as $key => $menu_item) {
                        $title = $menu_item->title;
                        $url = $menu_item->url;
                        $menu_list .= "\t\t\t\t\t". '<li class="t-center m-b-13 active"><a class="txt19" href="'. $url .'">'. $title .'</a></li>' ."\n";
                    }
                    $menu_list .= "\t\t\t\t". '</ul>' ."\n";
                } else {
                    // $menu_list = '<!-- no list defined -->';
                }
                echo $menu_list;
            }













                    






                    









