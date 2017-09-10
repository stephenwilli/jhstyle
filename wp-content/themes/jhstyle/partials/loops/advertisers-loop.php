<h2 class="center">Advertiser Directory</h2>
<?php
	$args = array(
		'post_type' => 'advertisers',
		'orderby' => 'title',
		'order'   => 'ASC',
		'posts_per_page' => -1
	);
	$advertisers = get_posts( $args );
	global $post;
	foreach( $advertisers as $advertiser ) {
		$post = $advertiser;
		setup_postdata( $post ); 
        $image_id = get_post_thumbnail_id();
        list( $url, $width, $height ) = wp_get_attachment_image_src( $image_id, 'medium' );
        $advertiserLink = get_field('advertiser_link');?> 

        
			<div class="col-sm-3">
			<div class="advertiser-card">
					<div class="advertiser-logo">
						<img src="<?php echo $url;?>" alt="<?php the_title();?>"/>
					</div>
					<h3 class="center"><?php the_title();?></h3>
			</div>
		</div>
	
<?php }
wp_reset_postdata();
?>