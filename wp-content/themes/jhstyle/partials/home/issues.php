<?php
    $args = array(
        'post_type' => 'e-edition',
        'order' => 'ASC',
        'posts_per_page' => -1
    );
    $units = get_posts( $args );
    global $post;
    foreach( $units as $unit ) {
        $post = $unit;
        setup_postdata( $post );
        get_template_part( 'partials/loops/issue-loop' );
    }
    wp_reset_postdata();
?>


<?php 
	$issueImage = get_field('issue_cover_image');
	$issueTitle = get_the_titel();
?>

<section class="issue-slider">
    <img src="<?php echo $introIcon['sizes']['medium'];?>" />
    <p><?php echo $introText;?></p>
</section>



<?php
if ( have_rows('testimonials', 'option') ):
?>
    <hr>
    <div class="row">
        <div class="col-sm-12">
            <div class="testimonial-wrapper">
                <div id="testimonial-slider" class="flexslider">
                    <h2 class="title">Client Testimonials</h2>
                    <ul class="slides">
                        <?php while( have_rows('testimonials', 'option') ): the_row(); ?>
                        <li class="testimonial-text">
                            <p class="quote"><?php the_sub_field('testimonial_quote', 'option'); ?></p>
                            <p class="name">- <?php the_sub_field('testimonial_name', 'option'); ?></p>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>