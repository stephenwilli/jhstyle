<?php get_header(); 

$terms = get_the_terms( get_the_ID(), 'category');
if( !empty($terms) ) {

	$term = array_pop($terms);
	$categorySlug = $term->slug;
	$categoryTitle = $term->name;
	$categoryImage = get_field('category_featured_image', $term );
}

	$writer = get_field('ps_written_by');
	$photographer = get_field('ps_photography_by');
	$subtitle = get_field('ps_subtitle');
	$issue = get_field('ps_issue');
	$image_id = get_post_thumbnail_id();
    list( $url, $width, $height ) = wp_get_attachment_image_src( $image_id, 'lg_thumb' );

?>

<div class="container-fluid nopad">
    <div class="category-hero  <?php echo $categorySlug;?>">
        <img src="<?php echo $categoryImage['sizes']['full_screen'];?>" />
        <h1 class="category-title"><?php echo $categoryTitle;?></h1>
    </div>
</div>

<?php if ( have_posts() ) : ?>

<div class="page-content"> 
    <div class="container">
        <div class="row">
		
			<?php while ( have_posts() ) : the_post(); ?>
	        	
	        	<div class="post-meta">
	        		<div class="col-md-10 col-md-offset-1">
						<div class="row">
							
							<div class="col-sm-6">
								<img src="<?php echo $url;?>" alt="<?php the_title();?>"/>
							</div>

							<div class="col-sm-6">
								
									<h1><?php the_title();?></h1>
									<h2><?php echo $subtitle;?></h2>

									<?php if($issue) { ?>
										<h3><?php echo $issue;?></h3>
									<?php } ?>

									<h4>
										<?php if($writer) { ?>
											Written By: <?php echo $writer;?>
										<?php } ?>

											<?php if($writer && $photographer ) { ?> | <?php } ?>

										<?php if($photographer) { ?>
											Photography By: <?php echo $photographer;?>
										<?php } ?>
									</h4>
							</div>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="elementor-content">

								<?php the_content();?>

							</div>
						</div>
					</div>
				</div>

				

			<?php endwhile; // end of the loop. ?>

		</div>
	</div>

	<div class="container normal-pad">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">

				<?php get_template_part('partials/loops/post-navigation-loop'); ?>

			</div>
		</div>
	</div>

</div><!-- Page content -->

<?php endif; ?>

<?php get_footer();?>