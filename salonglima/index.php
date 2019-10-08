<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package salonglima
 */
get_header(); ?>
<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15 darken">
		<h2 class="txt7 t-center">
        <?php wp_title(''); ?>
		</h2>
	</section>


	<?php
    // TO SHOW THE PAGE CONTENTS
    if ( have_posts() ) : the_post(); ?>
	<section class="bg1-pattern p-t-116 p-b-110 t-center p-l-15 p-r-15">
    <?php the_content(); ?>
    </section>
    <?php
    endif; ?>
    <?php get_footer(); ?>