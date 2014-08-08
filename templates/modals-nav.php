<?php $homepage_modals = new WP_Query( array( 'post_type' => 'homepage_modals', 'posts_per_page' => -1 )); ?>
<?php if($homepage_modals->have_posts()): ?>
<nav class="collapse navbar-collapse" role="navigation">
	<ul id="menu-primary-navigation" class="nav navbar-nav">
	<?php while($homepage_modals->have_posts()): $homepage_modals->the_post(); ?>
		<?php
			$values			 	= simple_fields_get_post_group_values(get_the_id(), "Homepage Modal Options", true, 2);

			foreach($values as $value) : ?>
			<?php
				$slug 			= $value["Modal Slug"];
			endforeach; ?>

		<li><a href="#" data-toggle="modal" data-target="#<?php echo $post->post_name ? $slug : null ; ?>"><?php the_title(); ?></a></li>
	<?php endwhile; ?>
	</ul>
</nav>
<?php endif; wp_reset_query(); ?>
