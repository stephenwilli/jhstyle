<?php get_header(); 

$heroImage = get_field('blog_hero_image', 'option');

$terms = get_the_terms( get_the_ID(), 'category');
if( !empty($terms) ) {

	$term = array_pop($terms);
	$categorySlug = $term->slug;
	$categoryTitle = $term->name;
	$categoryImage = get_field('category_featured_image', $term );
}

?>

<div class="container-fluid nopad">
    <div class="category-hero  <?php echo $categorySlug;?>">
        <img src="<?php echo $categoryImage['sizes']['full_screen'];?>" />
        <h1 class="category-title"><?php echo $categoryTitle;?></h1>
    </div>
</div>


<div class="page-content"> 
    <div class="container">
        <div class="row">

			<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content();?>

			<?php // the_post_navigation(); ?>

			<?php endwhile; // end of the loop. ?>

		</div>
	</div>
</div>

<?php get_footer();?>