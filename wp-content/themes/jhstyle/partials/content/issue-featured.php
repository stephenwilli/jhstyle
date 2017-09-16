<?php 
    global $post;
    $post_slug=$post->post_name;
?>

<?php 

    $posts = get_posts(array(
        'posts_per_page'    => 6,
        'post_type'         => 'post',
        'tag'               => $post_slug

    ));

    if( $posts ): ?>
        
        <div class="container normal-pad">
            <div class="row">
            
            <h2 class="center">Stories from this Edition</h2>
        
                <?php foreach( $posts as $post ): 
        
                    setup_postdata( $post );
                    $image_id = get_post_thumbnail_id();
                    list( $url, $width, $height ) = wp_get_attachment_image_src( $image_id, 'lg_thumb' );
                    $categories = get_the_category(); 

                    foreach ($categories as $category) {

                    $categorySlug = $category->slug;
                    $categoryName = $category->name;

                    }
                ?>
                    <div class="post-card <?php echo $categorySlug;?>">
                        <div class="col-sm-4">
                                <div class="post-image">
                                <a href="<?php echo get_permalink(); ?>">
                                        <div class="overlay">
                                            <a href="<?php echo get_permalink(); ?>" class="overlay-btn btn -ghost">Read More</a>
                                        </div>
                                        <img src="<?php echo $url; ?>" />
                                </a>
                                </div>
                            
                            
                            <a class="category-bar" href="/stories/<?php echo $categorySlug;?>"><?php echo $categoryName;?></a>
                            <a href="<?php echo get_permalink(); ?>">
                                <h3 class="<?php echo $categorySlug;?>"><?php the_title();?></h3>
                            </a>
                            <p><?php the_excerpt(); ?></p>
                            
                        </div>
                    </div>

            <?php endforeach; ?>
    
        <?php wp_reset_postdata(); ?>
        </div>
    </div>

<?php endif; ?>
 