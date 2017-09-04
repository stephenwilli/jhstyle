<?php
    $image_id = get_post_thumbnail_id();
    list( $url, $width, $height ) = wp_get_attachment_image_src( $image_id, 'large' );
?>

<div class="page-content"> 
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <img src="<?php echo $url?>" />
            </div>
            <div class="col-sm-7">
            </div>
        </div>
        <?php the_content();?>
        </div>
    </div>
</div>