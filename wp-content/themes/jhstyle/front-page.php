<?php get_header();

// HOME PAGE TEMPLATE

?>

<?php get_template_part('partials/content/hero'); ?>

<!-- FLEXIBLE CONTENT TEMPLATES -->
<section class="normal-pad">
	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<?php get_template_part('partials/home/issues-slider'); ?>
			</div>
				<div class="col-sm-7"><?php get_template_part('partials/home/socia-gridl'); ?>
			</div>
		</div>
	</div>
</section>


<?php get_template_part('partials/home/featured'); ?>

<?php get_template_part('partials/content/media-kit'); ?>

<?php get_template_part('partials/content/story-grid'); ?>

<?php get_template_part('partials/content/advertiser-slider'); ?>

<?php get_footer();?>
