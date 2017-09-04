<?php
	$heroImage = get_field('page_hero_image');
?>

<div class="container-fluid nopad">
    <div class="category-hero">
        <img src="<?php echo $heroImage['sizes']['full_screen'];?>" />
        <h1 class="category-title"><?php the_title(); ?></h1>
    </div>
</div>