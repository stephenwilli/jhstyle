<?php 

	// RIGHT CAPTION FLEXIBLE CONTENT LAYOUT LC

    $LCmediaType = get_sub_field('left_media_type');
	$LCsingleImage = get_sub_field('left_single_image');
    $LCtopImage = get_sub_field('left_top_image');
    $LCbottomImage = get_sub_field('left_bottom_image');
    $LCcaptionType = get_sub_field('left_caption_type');
    $LCcaptionTitle = get_sub_field('left_caption_title');
    $LCcaptionText = get_sub_field('left_caption_text');
    $LCcaptionIcon = get_sub_field('left_caption_icon');
    $LCcaptionButton = get_sub_field('left_caption_button');
    $LCcaptionLink = get_sub_field('left_caption_link');
    $LCwysiwyg = get_sub_field('left_wysiwyg');

?>



<section class="left-caption bg-secondary">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-5 text-center caption wow fadeInLeft">

                <?php if ( $LCcaptionType == 'caption' ) { ?>

                    <?php if ($LCcaptionTitle) { ?>
                        <h2><?php echo $LCcaptionTitle;?></h2>
                    <?php } ?>
                    
                    <?php if ($LCcaptionIcon) { ?>
                        <img class="icon" src="<?php echo $LCcaptionIcon['sizes']['medium'];?>" />
                    <?php } ?>

                    <?php if ($LCcaptionText) { ?>
                        <p class="text"><?php echo $LCcaptionText;?></p>
                    <?php } ?>

                    <?php if ($LCcaptionButton) { ?>
                        <a href="<?php echo $LCcaptionLink;?>" class="btn"><?php echo $LCcaptionButton;?></a>
                    <?php } ?>
                
                <?php } ?>

                <?php if ( $LCcaptionType == 'wysiwyg' ) { ?>

                    <?php echo $LCwysiwyg; ?>

                <?php } ?>

            </div>

            <div class="col-sm-12 col-md-7 wow fadeInRight">

                <?php if ($LCmediaType == 'single') { ?>
	                <img class="single" src="<?php echo $LCsingleImage['sizes']['large'];?>">
                <?php } ?>
            	
            	<?php if ($LCmediaType == 'double') { ?>
	                <img class="top" src="<?php echo $LCtopImage['sizes']['large'];?>">
	                <img class="bottom" src="<?php echo $LCbottomImage['sizes']['large'];?>">
                <?php } ?>

            </div>
        </div>
    </div>
</section>


        

    
