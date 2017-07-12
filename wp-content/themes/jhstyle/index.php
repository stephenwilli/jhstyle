<?php

?>
<?php get_header(); ?>

	<!-- PAGE HERO -->

	<?php get_template_part('partials/content/hero'); ?>

	<!-- WYSIWYG CONTENT -->

	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part('partials/global/page-content'); ?>
	<?php endwhile; // end of the loop. ?>

<?php get_footer();?>
