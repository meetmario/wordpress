<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage jm_restaurant
 * @since JM Restaurant 1.0
 */

get_header(); ?>
<!-- Main -->
            <article id="main">
                <header>
                    <h2><?php the_title(); ?></h2>
					<?php if( the_subtitle() ): ?>
                    <p><?php the_subtitle(); ?></p>
					<?php endif; ?>
                </header>
                <section class="wrapper style1">
                    <div class="inner">
                        <?php
								get_header();
								if ( have_posts() ) : while ( have_posts() ) : the_post();
									the_content();
								endwhile;
								else :
									_e( 'Sorry, no posts matched your criteria.', 'jm_restaurant' );
								endif; ?>
                    </div>
                </section>
            </article>
<?php get_footer(); ?>