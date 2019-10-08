<?php
/**
 * Template Name: Frontpage
 *
 */

get_header('home'); ?>
<!-- Banner -->
            <section id="banner">
                <div class="inner">
					<?php if ( get_theme_mod( 'jm_logo' ) ) : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					 
							<img src="<?php echo get_theme_mod( 'jm_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					 
						</a>
					 
						<?php else : ?>
								   
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					 
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="" class="logo" />
					 
						</a>
								   
					<?php endif; ?>
					<p>Mån-Sön : 11-22</p>
					<p class="desktop-only">
                            <p class="desktop-only">TEL: 0498 - 21 33 99</p>
                        </p>
                    <ul class="actions">
                        <li>
                            <a href="/bordsbokning" class="button special">Boka Bord</a>
                        </li>
                        
						
                    </ul>
                </div>
				
                <!-- <a href="#one" class="more scrolly">Senaste Nytt</a> -->
            </section>
            <!-- One -->
            <section id="one" class="wrapper style1 special" style="text-align: center;">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("home-1") ) : ?>
				<?php endif;?>
            </section>
            <!-- Two -->
			<section id="two" class="wrapper style2 special">
                <div class="inner">
                    <header class="major">
                        <h2>Hitta Till Oss</h2>
                    </header>
                    
                    <div class="row">
                
                        
                        
                        
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2135.212965569155!2d18.304344815620915!3d57.64486665195509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46f7a92ce3c7f987%3A0xe23d884951e21bd4!2sMarco+Polo+Pizzeria!5e0!3m2!1ssv!2sse!4v1517576732810" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						
                        
						<p>Vi ligger granne med Norrgatt Café vid Norrgatt rondellen.</p>
						
                    </div>
                </div>
            </section>
<?php get_footer(); ?>