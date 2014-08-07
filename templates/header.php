<header class="masthead banner container" role="banner">
	<div class="row">
		<div class="col-lg-12">
			<?php if(ot_get_option( "logo_header" )): ?>
				<a class="navbar-logo" href="<?php echo home_url(); ?>/"><img src="<?php echo ot_get_option( "logo_header" ); ?>" alt="<?php bloginfo('name'); ?>"></a>
			<?php else: ?>
				<a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
			<?php endif; ?>
			<nav class="nav-main" role="navigation">
				<?php
					if (has_nav_menu('primary_navigation')) :
						wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
					endif;
				?>
			</nav>
		</div>
	</div>
</header>
