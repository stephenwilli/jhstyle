<?php get_header(); 

$heroImage = get_field('blog_hero_image', 'option');

$terms = get_the_terms( get_the_ID(), 'category');
if( !empty($terms) ) {

	$term = array_pop($terms);
	$categorySlug = $term->slug;
	$categoryImage = get_field('category_featured_image', $term );
}

?>

<div class="container-fluid nopad">
    <div class="category-hero  <?php echo $categorySlug;?>">
        <img src="<?php echo $categoryImage['sizes']['full_screen'];?>" />
        <h1 class="category-title"><?php the_title();?></h1>
    </div>
</div>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'partials/loops/single-loop' ); ?>

		<?php // the_post_navigation(); ?>

	<?php endwhile; // end of the loop. ?>

<?php get_footer();?>