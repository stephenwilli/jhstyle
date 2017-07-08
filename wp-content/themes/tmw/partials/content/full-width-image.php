<?php

	// FULL WIDTH PARALLAX IMAGE FLEXIBLE CONTENT LAYOUT FWI

	$FWIimage = get_sub_field('fwi_background_image');
	$FWIalign = get_sub_field('fwi_caption_align');
	$FWItitle = get_sub_field('fwi_caption_title');
	$FWIbutton = get_sub_field('fwi_caption_button');
	$FWIlink = get_sub_field('fwi_caption_link');

	
	if ($FWIimage) { ?>

		<section class="full-width-image bg-primary parallax wow fadeIn" style="background-image: url('<?php echo $FWIimage['sizes']['full_screen']; ?>');"> 

            <div class="full-width-caption caption-<?php echo $FWIalign;?> wow fadeInLeft" data-wow-offset="20">
            	
            	<?php if ($FWItitle) { ?>
               		<h2><mark><?php echo $FWItitle; ?></mark></h2>
                <?php } ?>
                
                <?php if ($FWIbutton) { ?>
                	<a href="<?php echo $FWIlink; ?>" class="btn -orange"><?php echo $FWIbutton; ?></a>
                <?php } ?>

            </div>
				        
		    </div>
		</section>

<?php } ?>