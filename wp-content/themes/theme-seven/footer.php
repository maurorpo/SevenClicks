		<footer>
			<div class="container">
				<div class="logo_footer">
					<a href="<?php echo home_url('/') ?>">
						<img src="<?php echo get_template_directory_uri() ?>/library/images/ico-logo.svg" alt="Seven Clicks">
					</a>
				</div>
				<article class="copy_text basic_text"><?php  echo the_field('copy_text', 4) ?></article>
				<div class="nav_footer">
					<?php wp_nav_menu(['container' => false, 'menu-redes' => __( 'The Main Redes', 'bonestheme' ), 'theme_location' => 'redes-nav' ]); ?>
				</div>
			</div>
		</footer>
	</body>
</html>
