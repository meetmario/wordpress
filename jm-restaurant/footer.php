<!-- Footer -->
            <footer id="footer">
			<div class='scrolltop'>
				<div class='scroll icon'><i class="fa fa-4x fa-angle-up"></i></div>
			</div>
                <ul class="actions">
                    <li>
						<a href="/bordsbokning" class="button special">Boka Bord</a
                        
                    </li>
                </ul>
				<div id="social" class="social">
				<?php if ( ! has_nav_menu('social') ) : ?>
                <ul id="menu-social-items" class="icons">
                    <li id="menu-item" class="menu-item">
                        <a href="/wp-admin/nav-menus.php" style="color: #ffffff;">Add Social Icons here from menu settings under appearence</a>
                    </li>
					
                </ul>
				<?php endif; // end home1 widget area ?>
		            <?php get_template_part( 'menu', 'social' ); ?>
				
				</div>
                <ul class="copyright">
                    <li>&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ) ?></li>
                    <li>Design:
                        <a href="https://jm-netsolutions.com">JM NetSolutions</a>
                    </li>
                </ul>
            </footer>
        </div>
        <!-- Scripts -->
       <?php wp_footer(); ?>
    </body>
</html>