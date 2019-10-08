<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package salonglima
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;
	wp_title( '|', true, 'right' );
	// Add the blog name.
	bloginfo( 'name' );
	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'salonglima' ), max( $paged, $page ) );
	?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body class="animsition">

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="<?php echo esc_url( home_url() ); ?>">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/ny_lima_orange110.png" alt="IMG-LOGO" data-logofixed="images/icons/ny_lima_orange110.png">
						</a>
					</div>

					<!-- Menu -->
					<?php
                        wp_nav_menu( array(
                            'theme_location' => 'primary', // Defined when registering the menu
                            'container'      => true,
                            'container_class'=> 'wrap_menu p-l-45 p-l-0-xl',
                            'depth'          => 1,
                            'menu_class'     => 'main_menu',
                            'walker'         => false, // This controls the display of the Bootstrap Navbar
                            'fallback_cb'    => false, // For menu fallback
                        ) );
                        ?>  

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<a href="#"><i class="fa fa-instagram m-1-21" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a>

						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Sidebar -->
	<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

		<!-- - -->
		<?php if (function_exists(clean_custom_menus())) clean_custom_menus(); ?>
        <ul class="menu-sidebar p-t-95 p-b-20">

			<li class="t-center">
				<!-- Button3 -->
				<a href="boka.html" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
					Boka Tid
				</a>
			</li>

			<li class="t-center">
				<!-- Button3 -->
				<a href="tel:+46735307002" class="btn4 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
					Ring Oss
				</a>
			</li>
		</ul>

		<!-- - -->
		<div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-20">
			<!-- - -->
			<h4 class="txt20 m-b-33">
				Följ Oss:
			</h4>

			<!-- Gallery -->
			<div class="social-sidebar p-r-20">
				<div class="p-t-5 p-b-5 t-center">
                    <?php if ( get_theme_mod( 'sociallink_instagram' ) ) : ?>
                    <a href="<?php echo get_theme_mod( 'sociallink_instagram' ); ?>" class="fs-25"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <?php endif; ?>
                    <?php if ( get_theme_mod( 'sociallink_facebook' ) ) : ?>
                    <a href="<?php echo get_theme_mod( 'sociallink_facebook' ); ?>" class="fs-25"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
                    <?php endif; ?>
                    <?php if ( get_theme_mod( 'sociallink_twitter' ) ) : ?>
                    <a href="<?php echo get_theme_mod( 'sociallink_twitter' ); ?>" class="fs-25"><i class="fa fa-twitter m-l-18" aria-hidden="true"></i></a>
                    <?php endif; ?>
				</div>
			</div>
		</div>
	</aside>