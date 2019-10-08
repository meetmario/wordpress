<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jm-saloon
 */

?>
<!DOCTYPE HTML>
<!--
	Copyright 2018 J&M NetSolutions (https://www.jm-netsolutions.com) all rights reserved
-->
<html <?php language_attributes(); ?>>
    <head>
        <title><?php wp_title(''); ?></title>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?php wp_head(); ?>
    </head>
	
    <body <?php if ( is_home() || is_front_page() ) { body_class( 'landing' ); } else { body_class(); } ?>>
        <!-- Page Wrapper -->
        <div id="page-wrapper">
            <!-- Header -->
            <header id="header" class="alt">
                <h1><a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ) ?></a></h1>
                <nav id="nav">
                    <ul>
                        <li class="special">
                            <a href="#menu" class="menuToggle"><span>Meny</span></a>
                            <div id="menu">
                                <?php
				wp_nav_menu( array(
					'menu'              => 'primary',
					'theme_location'    => 'primary',
					'depth'             => 2,
					'container'         => 'false',
				) );
			?>
			<?php dynamic_sidebar( 'sidebar-menu' ); ?>
                            </div>
                        </li>
                    </ul>
					
                </nav>
            </header>
<div class='thetop'></div>