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
	foreach($homepage_options as $value) {
			$background 		= $value["Section Background Color"];
			$background_image 	= $value["Section Background Image"];
			$img_url 			= wp_get_attachment_url($background_image);
	}

	$homepage_bubbles = simple_fields_get_post_group_values(get_the_id(), "Bubble", true, 2);
	foreach($homepage_bubbles as $value) {
		$donate			 	= $value["Use donate button"];
		$bubble_color	 	= $value["Bubble Color"];
		$url			 	= $value["URL"];

		$img_url 			= wp_get_attachment_url($background_image);

	} ?>

	<?php if($index == 1) : ?>
		<a target="_blank" class="thumb thumb-mobile donate donate-mobile first" style="background-color: #<?php echo $bubble_color; ?>" href="<?php echo ot_get_option( "donate" ); ?>">Donate Now</a>
	<?php endif; ?>

	<div class="parallax-section parallax-section<?php echo $index; ?>" style="background-image: url('<?php echo $img_url; ?>')">
		<?php if($index == 1) : ?>
			<div class="container">
				<a target="_blank" class="thumb donate first" style="background-color: #<?php echo $bubble_color; ?>" href="<?php echo ot_get_option( "donate" ); ?>">Donate Now</a>

			</div>
		<?php endif; ?>
	</div>

	<section class="section section<?php echo $index; ?>" style="background-color: #<?php echo $background; ?>">
		<?php if($donate) : ?>
			<a target="_blank" class="thumb thumb-mobile donate" style="background-color: #<?php echo $bubble_color; ?>" href="<?php echo ot_get_option( "donate" ); ?>">Donate Now</a>
		<?php elseif(has_post_thumbnail()) : ?>
			<span class="thumb thumb-mobile"><?php the_post_thumbnail('section-thumb-mobile'); ?></span>
		<?php endif; ?>
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
						<div class="col-sm-4 col-md-3">
							<?php if($donate) : ?>
								<a target="_blank" class="thumb donate" style="background-color: #<?php echo $bubble_color; ?>" href="<?php echo ot_get_option( "donate" ); ?>">Donate Now</a>
							<?php elseif(has_post_thumbnail()) : ?>
								<span class="thumb"><?php the_post_thumbnail('section-thumb'); ?></span>
							<?php endif; ?>
						</div>
						<div class="col-sm-8 col-md-9">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php $index++; ?>
<?php endwhile; endif; wp_reset_query(); ?>
