<div class="story-grid">
	<div class="container normal-pad">
	    <div class="row">
	    	<h2 class="center">Story Categories</h2>

	    	<?php

	    	$featuresImage = get_field('features_home_image', 'option');
	    	$highstyleProfileImage = get_field('highstyle_profile_home_image', 'option');
	    	$inspireImage = get_field('inspire_home_image', 'option');
	    	$basecampImage = get_field('basecamp_home_image', 'option');
	    	$tetonVillageImage = get_field('teton_village_home_image', 'option');
	    	$healthyLivingImage = get_field('healthy_living_home_image', 'option');
	    	$diningImage = get_field('dining_home_image', 'option');
	    	$nightlifeImage = get_field('nightlife_home_image', 'option');
	    	$tetonValleyImage = get_field('teton_valley_home_image', 'option');

	    	?>

	    	<div class="col-sm-4">
                        
                            <div class="post-image">
                            <a href="<?php echo get_permalink(); ?>">
                                    <div class="overlay">
                                        <a href="<?php echo get_permalink(); ?>" class="overlay-btn btn -ghost">Read More</a>
                                    </div>
                                    <img src="<?php echo $url; ?>" />
                            </a>
                            </div>
                        
                        
                        <a class="category-bar" href="/stories/<?php echo $categorySlug;?>"><?php echo $categoryName;?></a>
                        <a href="<?php echo get_permalink(); ?>">
                            <h3 class="<?php echo $categorySlug;?>"><?php the_title();?></h3>
                        </a>
	        
	    	<div class="row row-eq-height">
	    		
	    		<div class="col-sm-4">
		    		<div class="features grid-card">
		    		<div class="overlay"></div>
		    			<img src="<?php echo $featuresImage['sizes']['large'];?>" />
		    			<a class="category-bar" href=""></a>
		    		</div>
	    		</div>

	    		<div class="col-sm-8">
	    			<div class="row">
	    				<div class="col-sm-6">
	    					<div class="highstyle-profile grid-card">
	    						<img src="<?php echo $highstyleProfileImage['sizes']['large'];?>" />
	    					</div>
	    				</div>
	    				<div class="col-sm-6">
	    					<div class="inspire grid-card">
	    						<img src="<?php echo $inspireImage['sizes']['large'];?>" />
	    					</div>
	    				</div>
	    			</div>
	    			<div class="row">
	    				<div class="col-sm-12">
	    					<div class="basecamp grid-card">
	    						<img src="<?php echo $basecampImage['sizes']['large'];?>" />
	    					</div>
	    				</div>
	    			</div>
	    		</div>

	    	</div>

	    	<div class="row">
	    		<div class="col-sm-4">
	    			<div class="teton-village grid-card">
	    				<img src="<?php echo $tetonVillageImage['sizes']['large'];?>" />
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="healthy-living grid-card">
	    				<img src="<?php echo $healthyLivingImage['sizes']['large'];?>" />
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="dining grid-card">
	    				<img src="<?php echo $diningImage['sizes']['large'];?>" />
	    			</div>
	    		</div>
	    	</div>

	    	<div class="row">
	    	    <div class="col-sm-6">
	    	    	<div class="nightlife grid-card">
	    	    		<img src="<?php echo $nightlifeImage['sizes']['large'];?>" />
	    	    	</div>
	    		</div>
	    		<div class="col-sm-6">
	    			<div class="teton-valley grid-card">
	    				<img src="<?php echo $tetonValleyImage['sizes']['large'];?>" />
	    			</div>    		
	    		</div>
	    	</div>


	    </div>
	</div>
</div>
