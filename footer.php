 

<footer class="site-footer">

	<div class="container">
		<div class="row">
			<div class="">
				<div class="copyright columns-2">
					<p>The Homecomers<br />
						Copyright &copy; <?php echo date('Y'); ?>
					</p>
				</div>
				<div class="columns-8">
					<nav class="footer-navigation">
						<?php if(has_nav_menu('footer_nav')){
									$defaults = array(
										'theme_location'  => 'footer_nav',
										'menu'            => 'footer_nav',
										'container'       => false,
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'menu',
										'menu_id'         => '',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
										'depth'           => 0,
										'walker'          => ''
									); wp_nav_menu( $defaults );
								}else{
									echo "<p><em>main_nav</em> doesn't exist! Create it and it'll render here.</p>";
								} ?>
					</nav>
				</div>
				<div class="columns-2">
					<p class="signature">Site by <a href="http://meshfresh.com" target="_blank">MESH</a></p>
				</div>
			</div><!-- End of Footer -->
		</div>
	</div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
