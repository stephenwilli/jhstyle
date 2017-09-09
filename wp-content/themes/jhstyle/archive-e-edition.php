<?php 

// Category Archive

get_header(); 


$heroImage = get_field('eedition_hero_image', 'option');

?>

<div class="container-fluid nopad">
    <div class="category-hero">
        <img src="<?php echo $heroImage['sizes']['full_screen'];?>" />
        <h1 class="category-title">E-Editions</h1>
    </div>
</div>

<div class="page-content"> 
    <div class="container">
        <div class="row">
        
                
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <?php
                        $image_id = get_post_thumbnail_id();
                        list( $url, $width, $height ) = wp_get_attachment_image_src( $image_id, 'cover' );

                    ?>
                
                    <div class="post-card archive-card">
                        <div class="post-image">
                            <a class="block-link" href="<?php echo get_permalink(); ?>">
                                    <div class="overlay">
                                        <a href="<?php echo get_permalink(); ?>" class="overlay-btn btn -ghost">View Issue</a>
                                    </div>
                                    <img src="<?php echo $url; ?>" />
                            </a>
                        </div>
                        <p><?php the_excerpt(); ?></p>
                    </div>

                <?php endwhile; endif; ?>
 
                <?php // get_template_part('partials/loop-nav'); ?>

        
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- #page-content -->

<?php get_footer(); ?>
