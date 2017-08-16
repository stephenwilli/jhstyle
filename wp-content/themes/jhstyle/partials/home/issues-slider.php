<?php
    $issues_loop = new WP_Query( array(
        'post_type' => 'e-edition',
        'order' => 'ASC',
        'posts_per_page' => -1
    ) );
?>

<div class="issue-wrapper">
    <div id="issue-slider" class="flexslider">
        <ul class="slides">
        <?php
        while ( $issues_loop->have_posts() ) {
            $issues_loop->the_post();
            $image_id = get_post_thumbnail_id();
            list( $url, $width, $height ) = wp_get_attachment_image_src( $image_id, 'cover' );
            ?>
                <li>
                    <a href="<?php echo the_permalink(); ?>">

                      <div class="issue-cover" style="background-image : url('<?php echo $url;?>')"></div>
                        <div class="overlay"></div>
                        <div class="caption">
                            <h2><?php echo the_title(); ?></h2>
                        </div><!-- /caption -->

                    </a>
                </li>
            <?php
        }
        wp_reset_postdata();
        ?>
        </ul>
    </div>
</div>

