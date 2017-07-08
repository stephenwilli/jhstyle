<?php

// PUBLICATIONS CUSTOM POST TYPE GRID

// Query post type for category

// assign category to item 

// Filter results by cat

?>

<section class="grid-intro bg-secondary" id="project">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 text-center wow fadeInUp">
                <div class="button-group filters-button-group">
                    <h2>The Teton Media Works Family</h2>

                    <div class="col-xs-4">
                        <a class="btn -large" data-filter=".newspaper">News</a>
                    </div>

                    <div class="col-xs-4">
                        <a class="btn -large" data-filter=".magazine">Magazine</a>
                    </div>

                    <div class="col-xs-4">
                        <a class="btn -large" data-filter=".digital">Digital</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="nopad">
    <div class="container-fluid nopad">
        <div class="row wow fadeInUp" data-wow-delay=".25s">
            
            <?php
                $args = array(
                    'post_type' => 'publication',
                    'order' => 'ASC',
                    'posts_per_page' => -1
                );
                $publications = get_posts( $args );
                global $post;
                foreach( $publications as $publication ) {
                    $post = $publication;
                    setup_postdata( $post ); ?>
                    
                    <div class="project-grid">
                        <?php get_template_part( 'partials/loops/publications-loop' ); ?>
                    </div>
                    
                    <?php }
                wp_reset_postdata(); 
            ?>
                
                
        </div>
    </div>
</section>