<?php
/**
 * The footer for our theme
 *
 * This is the template that displays all of the <footer> section and everything up until </body></html>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package salonglima
 */

?>
<!-- Footer -->
	<footer class="bg1">
		<div class="container p-t-40 p-b-70">
			<div class="row">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer-1") ) : ?>
				<?php endif;?>

				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer-2") ) : ?>
				<?php endif;?>

				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer-3") ) : ?>
				<?php endif;?>
			</div>
		</div>

		<div class="end-footer bg2">
			<div class="container">
				<div class="flex-sb-m flex-w p-t-22 p-b-22">
					<div class="p-t-5 p-b-5">
                        <?php if ( get_theme_mod( 'sociallink_instagram' ) ) : ?>
						<a href="<?php echo get_theme_mod( 'sociallink_instagram' ); ?>" class="fs-15 c-white"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'sociallink_facebook' ) ) : ?>
                        <a href="<?php echo get_theme_mod( 'sociallink_facebook' ); ?>" class="fs-15 c-white"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'sociallink_twitter' ) ) : ?>
                        <a href="<?php echo get_theme_mod( 'sociallink_twitter' ); ?>" class="fs-15 c-white"><i class="fa fa-twitter m-l-18" aria-hidden="true"></i></a>
                        <?php endif; ?>
					</div>

					<div class="txt17 p-r-20 p-t-5 p-b-5">
						Copyright &copy; <?php bloginfo( 'name' ) ?> <?php echo date("Y"); ?>  |  Denna webbsida är gjord med <i class="fa fa-heart"></i> av <a href="https://jm-netsolutions.com" target="_blank">J&M NetSolutions</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

<!--===============================================================================================-->
<!--===============================================================================================-->
<!--===============================================================================================-->
<!--===============================================================================================-->
<!--===============================================================================================-->
<!--===============================================================================================-->
<!--===============================================================================================-->
<!--===============================================================================================-->
<!--===============================================================================================-->
<!--===============================================================================================-->
<!--===============================================================================================-->

</body>
</html>