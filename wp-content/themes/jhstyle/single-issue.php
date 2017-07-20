<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

			<article class="publication-wrap">
				<div class="container">

					<div class="row">
						<div class="col-sm-12">
							<h2 class="text-center"><?php the_title(); ?></h2>
						</div>
					</div>

					<div class="row">
						
						<div class="col-sm-12 col-md-7">
							<?php
							$images = get_field('image_gallery');
							if( $images ): ?>
									<div id="js-image-slider" class="flexslider img-gallery">
										<ul class="slides">
											<?php
												foreach( $images as $image ):
												$full = $image ['sizes']['cover'];
											?>
											  
											    <li>
											      <img src="<?php echo $full ?>" />
											     </li>
											  
											<?php endforeach; ?>
										</ul>
									</div>

									<div id="js-image-carousel" class="flexslider img-carousel">
										<ul class="slides">
											<?php
												foreach( $images as $image ):
												$thumb = $image ['sizes']['lg_thumb'];
											?>
											  
											    <li>
											      <img src="<?php echo $thumb ?>" />
											     </li>
											  
											<?php endforeach; ?>
										</ul>
									</div>
								
							<?php endif; ?>
						</div>

						<div class="col-sm-12 col-md-5 publication-text">
							<?php the_content();?>
							<?php 
								$link = get_field('publication_link');
								$button = get_field('button_text');
								if ($link){ ?>

									<p class="text-center"><a class="btn -orange" href="<?php echo $link; ?>" target="_blank"><?php echo $button; ?></a></p>

							<?php } ?>
						</div>

					</div>

				</div>
				
			</article>

			<?php get_template_part('partials/content/related-posts') ;?>


	<?php endwhile; // end of the loop. ?>

<?php get_footer();?>