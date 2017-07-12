<section class="bg-primary related-posts" id="publications">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2>Related Publications</h2>
        </div>
    </div>
</section>

<section class="nopad">
    <div class="container-fluid nopad">
        <div class="row wow fadeInUp">
            
            <?php
                $args = array(
                    'post_type' => 'publication',
                    'order' => 'ASC',
                    'posts_per_page' => 4
                );
                $publications = get_posts( $args );
                global $post;
                foreach( $publications as $publication ) {
                    $post = $publication;
                    setup_postdata( $post );
                    get_template_part( 'partials/loops/related-grid' );
                }
                wp_reset_postdata();
            ?>
                
        </div>
    </div>
</section>