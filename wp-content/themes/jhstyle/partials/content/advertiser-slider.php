<div class="container normal-pad">
    <div class="row">
    	<h2 class="center">Advertisers</h2>
        <?php
    		$advertiser_loop = new WP_Query( array(
        		'post_type' => 'advertisers',
        		'orderby' => 'title',
				'order'   => 'DESC',
        		'posts_per_page' => -1
    		) );
		?>

    	<div id="advertiser-slider" class="flexslider advertiser-slider">
	        <ul class="slides">
	        <?php
	        while ( $advertiser_loop->have_posts() ) {
	            $advertiser_loop->the_post();
	            $image_id = get_post_thumbnail_id();
	            list( $url, $width, $height ) = wp_get_attachment_image_src( $image_id, 'medium' );
	            $advertiserLink = get_field('advertiser_link');
	            
	            ?>
	                <li>
	                    <a href="<?php echo $advertiserLink ?>" target="_blanks">
	                    	<div class="advertiser-logo">
	                        	<img src="<?php echo $url; ?>" alt="<?php the_title();?>">
	                        	<h3><?php the_title();?></h3>
	                    	</div>    
	                    </a>
	                </li>
	            <?php
	        }
	        wp_reset_postdata();
	        ?>
	        </ul>
	    </div>
    </div>
</div>
