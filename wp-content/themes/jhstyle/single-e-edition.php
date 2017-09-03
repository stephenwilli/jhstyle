<?php

get_header(); 

if ( have_posts() ) :
	
	$heroImage = get_field('page_hero_image');
	$issueEmbed = get_field('issue_embed_code');

?>

<div class="container-fluid nopad">
    <div class="category-hero">
        <img src="<?php echo $heroImage['sizes']['full_screen'];?>" />
        <h1 class="category-title"><?php the_title(); ?></h1>
    </div>
</div>

<div class="page-content"> 
    <div class="container">
        <div class="row">

		<?php while ( have_posts() ) : the_post(); ?>

			<article class="publication-wrap">
				<div class="container">
					<div class="row">
						
						<div class="col-sm-12">

						<?php echo $issueEmbed?>

						</div>

					</div>

				</div>
				
			</article>

		<?php endwhile; ?> <?php endif;// end of the loop. ?>

		<?php get_template_part('partials/content/issue-featured'); ?>

		<?php get_template_part('partials/loops/post-navigation-loop') ;?>

		</div>
	</div>
</div>




<?php get_footer();?>