<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
									_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
								endif; ?>
                    </div>
                </section>
            </article>
<?php get_footer(); ?>