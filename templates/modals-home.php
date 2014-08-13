<?php $sections = new WP_Query( array( 'post_type' => 'homepage_sections', 'posts_per_page' => -1 ) ); ?>
<?php $index = 1; ?>
<?php if( $sections->have_posts() ) : while( $sections->have_posts() ) : $sections->the_post(); ?>
<?php

	$hp_options = simple_fields_get_post_group_values(get_the_id(), "Homepage Section Options", true, 2);
	foreach($hp_options as $value) {
		$section_id		 	= $value["Section ID"];
		$read_more_content	= $value["Modal Content"];
	} ?>

		<?php if($read_more_content) : ?>
			<div class="modal fade <?php echo has_post_thumbnail() ? 'pad' : null ; ?>" id="<?php echo $post->post_name; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<?php if(has_post_thumbnail()) : ?>
								<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
								<div class="modal-thumb" style="background-image: url('<?php echo $url; ?>'); background-size: cover;"></div>
							<?php endif; ?>

							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							<h4 class="modal-title" id="myModalLabel"><?php the_title(); ?></h4>
						</div>
						<div class="modal-body">
							<?php echo $read_more_content; ?>
						</div>
					</div>
				</div>
			</div>
			<?php $index++; ?>
		<?php endif; ?>

<?php endwhile; endif; wp_reset_query(); ?>
