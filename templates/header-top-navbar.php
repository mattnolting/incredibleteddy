<header class="masthead banner navbar navbar-default navbar-static-top" role="banner">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<?php if(ot_get_option( "logo_header" )): ?>
				<a class="navbar-logo" href="<?php echo home_url(); ?>/"><img src="<?php echo ot_get_option( "logo_header" ); ?>" alt="<?php bloginfo('name'); ?>"></a>
			<?php else: ?>
				<a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
			<?php endif; ?>
		</div>

		<?php get_template_part('templates/modals-nav'); ?>
			<?php
				// if (has_nav_menu('primary_navigation')) :
				// 	wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
				// endif;
			?>
	</div>
</header>
