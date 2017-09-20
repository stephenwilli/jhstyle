<?php
	$heroImage = get_field('page_hero_image');
?>

<div class="container-fluid nopad">
    <div class="category-hero" style="background-image:url('<?php echo $heroImage['sizes']['full_screen'];?>');">
        <h1 class="category-title"><?php the_title(); ?></h1>
    </div>
</div>