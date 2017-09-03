<div class="container normal-pad">
    <div class="row">
        <div class="col-sm-6">
            <?php $prevPost = get_previous_post(true);
                if($prevPost) {
                    $args = array(
                        'posts_per_page' => 1,
                        'include' => $prevPost->ID
                    );
                    $prevPost = get_posts($args);
                    foreach ($prevPost as $post) {
                        setup_postdata($post);
                        $image_id = get_post_thumbnail_id();
                        list( $url, $width, $height ) = wp_get_attachment_image_src( $image_id, 'large' );
            ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="post-previous post-nav" style="background-image: url('<?php echo esc_url( $url ); ?>')">
                        <div class="nav-overlay"></div>
                        <a href="<?php the_permalink(); ?>">
                            <div class="nav-meta">
                                <h3><?php the_title(); ?></h3>
                                <h4>&laquo; Next Post</h4></a>
                            </div>
                        </a>
                    </div>
                </a>


            <?php
                        wp_reset_postdata();
                    } //end foreach
                } // end if ?>
        </div>

        <div class="col-sm-6">
            <?php
                $nextPost = get_next_post(true);
                if(!$nextPost){
                    $nextPost= get_adjacent_post();
                }
                if($nextPost) {
                    $args = array(
                        'posts_per_page' => 1,
                        'include' => $nextPost->ID
                    );
                    $nextPost = get_posts($args);
                    foreach ($nextPost as $post) {
                        setup_postdata($post);
                        $image_id = get_post_thumbnail_id();
                        list( $url, $width, $height ) = wp_get_attachment_image_src( $image_id, 'large' );
                    ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="post-next post-nav" style="background-image: url('<?php echo esc_url( $url ); ?>')">
                        <div class="nav-overlay"></div>
                        <a href="<?php the_permalink(); ?>">
                            <div class="nav-meta">
                                <h3><?php the_title(); ?></h3>
                                <h4>Previous Post &raquo;</h4>
                            </div>
                        </a>
                    </div>
                </a>
            <?php
                        wp_reset_postdata();
                    } //end foreach
            } // end if
        ?>
        </div>
    </div>
</div>
