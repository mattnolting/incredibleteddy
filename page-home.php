<?php
/*
Template Name: Page - Home
*/
?>

<?php $sections = new WP_Query( array( 'post_type' => 'homepage_sections', 'posts_per_page' => -1 ) ); ?>
<?php $index = 1; ?>
<?php if( $sections->have_posts() ) : while( $sections->have_posts() ) : $sections->the_post(); ?>
<?php

	$homepage_options = simple_fields_get_post_group_values(get_the_id(), "Homepage Section Options", true, 2);
	foreach($homepage_options as $value) : ?>
		<?php
			$background 		= $value["Background Color"];
			$background_image 	= $value["Background Image"];
			$img_url 			= wp_get_attachment_url($background_image);
		?>

	<?php endforeach; ?>

	<div class="parallax-section parallax-section<?php echo $index; ?>" style="background-image: url('<?php echo $img_url; ?>')"></div>
	<section class="section section<?php echo $index; ?>" style="background-color: #<?php echo $background; ?>">
		<div class="container section-header">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="title"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
		<div class="container section-content">
			<div class="group">
				<div class="content">
					<div class="row">
						<div class="col-sm-4">
							<?php if(has_post_thumbnail()) : ?>
								<?php the_post_thumbnail('section-thumb'); ?>
							<?php endif; ?>
						</div>
						<div class="col-sm-8">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php $index++; ?>
<?php endwhile; endif; wp_reset_query(); ?>
