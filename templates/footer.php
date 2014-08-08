<footer class="content-info" role="contentinfo">
	<div class="container">
		<?php get_template_part('templates/modals-nav-footer'); ?>
		<?php if(ot_get_option( "logo_footer" )): ?>
			<a class="footer-logo" href="<?php echo home_url(); ?>/"><img src="<?php echo ot_get_option( "logo_footer" ); ?>" alt="<?php bloginfo('name'); ?>"></a>
		<?php else: ?>
			<a class="footer-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
		<?php endif; ?>
		<?php //dynamic_sidebar('sidebar-footer'); ?>
	</div>
</footer>

<?php wp_footer(); ?>
