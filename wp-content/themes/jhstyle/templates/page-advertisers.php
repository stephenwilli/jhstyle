<?php
/*
Template Name: Advertisers
*/

get_header(); ?>

<!-- PAGE HERO -->

<?php get_template_part('partials/global/page-hero');?>

<div class="page-content"> 
    <div class="container">
        <div class="row">

		<?php get_template_part('partials/loops/advertisers-loop'); ?>

		</div>
	</div>
</div>




<?php get_footer();?>
