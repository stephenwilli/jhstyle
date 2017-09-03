<?php 

// Category Archive

get_header(); 

//$headerImage = ;
//$categorySlug = ;
//$categoryName = ;
$categoryName = get_the_archive_title();

?>


<?php get_template_part('partials/content/hero'); ?>

<div class="page-content"> 
    <div class="container">
        <div class="row">
        
            <div class="col-md-10 col-offset-md-1">

                <?php echo $categoryName;?>
                
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                    <?php // get_template_part( 'partials/archive-loop'); ?>
                
                    <?php the_title();?>

                <?php endwhile; endif; ?>
 
                <?php // get_template_part('partials/loop-nav'); ?>
            </div><!-- /col -->
        
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- #page-content -->

<?php get_footer(); ?>
