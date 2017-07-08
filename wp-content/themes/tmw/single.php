<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'partials/loops/single-loop' ); ?>

		<?php the_post_navigation(); ?>

	<?php endwhile; // end of the loop. ?>

<?php get_footer();?>