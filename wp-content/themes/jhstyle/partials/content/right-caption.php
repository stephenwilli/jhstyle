<?php 

	// RIGHT CAPTION FLEXIBLE CONTENT LAYOUT RC
	
    $RCmediaType = get_sub_field('right_media_type');
	$RCsingleImage = get_sub_field('right_single_image');
    $RCtopImage = get_sub_field('right_top_image');
    $RCbottomImage = get_sub_field('right_bottom_image');
    $RCcaptionType = get_sub_field('right_caption_type');
    $RCcaptionTitle = get_sub_field('right_caption_title');
    $RCcaptionText = get_sub_field('right_caption_text');
    $RCcaptionIcon = get_sub_field('right_caption_icon');
    $RCcaptionButton = get_sub_field('right_caption_button');
    $RCcaptionLink = get_sub_field('right_caption_link');
    $RCwysiwyg = get_sub_field('right_wysiwyg');
?>



<section class="right-caption bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-7 wow fadeInLeft">

                <?php if ($RCmediaType == 'single') { ?>
	                <img class="single" src="<?php echo $RCsingleImage['sizes']['large'];?>">
                <?php } ?>
            	
            	<?php if ($RCmediaType == 'double') { ?>
	                <img class="top" src="<?php echo $RCtopImage['sizes']['large'];?>">
	                <img class="bottom" src="<?php echo $RCbottomImage['sizes']['large'];?>">
                <?php } ?>

            </div>

            <div class="col-sm-12 col-md-5 text-center caption wow fadeInRight">

            <?php if ($RCcaptionType == 'caption') { ?>

                <?php if ($RCcaptionTitle) { ?>
                    <h2><?php echo $RCcaptionTitle;?></h2>
                <?php } ?>
                
                <?php if ($RCcaptionIcon) { ?>
                    <img class="icon" src="<?php echo $RCcaptionIcon['sizes']['medium'];?>" />
                <?php } ?>

                <?php if ($RCcaptionText) { ?>
                    <p class="text"><?php echo $RCcaptionText;?></p>
                <?php } ?>

                <?php if ($RCcaptionButton) { ?>
                    <a href="<?php echo $RCcaptionLink;?>" class="btn"><?php echo $RCcaptionButton;?></a>
                <?php } ?>

            <?php } ?>

            <?php if ($RCcaptionType == 'wysiwyg') { ?>

                <?php echo $RCwysiwyg; ?>

            <?php } ?>

            </div>
        </div>
    </div>
</section>


        

    
