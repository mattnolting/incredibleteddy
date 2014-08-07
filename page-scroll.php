<?php
/*
Template Name: Page - Scroll
*/
?>

<div class="wrap" role="document">
<?php
	$selected_values = simple_fields_get_post_group_values(get_the_id(), "Scroll Page Entries", true, 2);
	foreach($selected_values as $value) : ?>
		<?php
			$file_id = $value["Background Image"];
			$img_url = wp_get_attachment_url($file_id);
		?>
		<div class="img-holder" data-image="<?php echo $img_url; ?>" data-width="1600" data-height="900" data-extra-height="50"></div>
		<div class="m-img-holder hidden-md hidden-lg" style="background-image: url('<?php echo $img_url; ?>');"></div>
		<?php if($value["Text Content"]): ?>
		<div class="container">
			<div class="row">
				<div class="content content-scroll col-xs-12">
					<?php echo $value["Text Content"]; ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
	<?php endforeach; ?>

	<main class="main <?php echo roots_main_class(); ?>" role="main">
		<div class="content row">

		</div><!-- /.content -->
	</main><!-- /.main -->
</div><!-- /.wrap -->
<script>

  $(document).ready(function($) {
    $('.img-holder').imageScroll({
//            image: null,
//            imageAttribute: 'image',
//            container: $('body'),
//            speed: 0.2,
//            coverRatio: 0.75,
				holderClass: 'image-holder',
//            holderMinHeight: 200,
//            extraHeight: 0,
//            mediaWidth: 1600,
//            mediaHeight: 900,
//            parallax: true,
        touch: false
    });
    //$('<div class="overlay"/>').prependTo('body');
  });
</script>
