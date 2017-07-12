<?php 
	$introText = get_field('hp_intro_text');
	$introIcon = get_field('hp_intro_icon');
	if ($introText) {
?>

<section class="full-width-text bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">

                <img src="<?php echo $introIcon['sizes']['medium'];?>" />
                <p><?php echo $introText;?></p>

            </div>
        </div>
    </div>
</section>

<?php } ?>
