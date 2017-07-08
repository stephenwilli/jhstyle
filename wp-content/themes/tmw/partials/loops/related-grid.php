<?php 

if ( has_post_thumbnail() ) { 
    $image_id = get_post_thumbnail_id();
    list( $url, $width, $height ) = wp_get_attachment_image_src( $image_id, 'cover' );

?>

<div class="col-xs-6 col-sm-3 wow fadeInUp">
    <a href="<?php the_permalink();?>" class="project-box">
        <img src="<?php echo esc_url( $url ); ?>" class="img-responsive" alt="">
        <div class="project-box-caption">
            <div class="project-box-caption-content">
                <h3 class="project-name"><?php the_title();?></h3>
            </div>
        </div>
    </a>
</div>

<?php } ?>