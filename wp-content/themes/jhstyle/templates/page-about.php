<?php
/*
Template Name: About/Contact
*/

get_header(); ?>

<!-- PAGE HERO -->

<?php get_template_part('partials/global/page-hero');?>

<div class="page-content"> 
    <div class="container">
        <div class="row">

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part('partials/global/page-content'); ?>
		<?php endwhile; // end of the loop. ?>

		</div>

		<div class="row">
			<div class="col-md-10 col-offset-md-1">
			<?php get_template_part('partials/loops/team-loop'); ?>
			</div>
		</div>

	</div>
</div>




<?php get_footer();?>
