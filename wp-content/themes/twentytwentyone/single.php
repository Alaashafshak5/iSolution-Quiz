<?php

get_header();

$date = get_post_meta($post->ID, 'project_date', true);
$terms = get_the_terms($post->ID, 'category');
if (!empty($terms)) {
	$cat = $terms[0]->name;
}
?>

<style>
	.category{
		margin-top: 5px;
	}
</style>

<section>
	<div class="container">
		<div class="breadcrumbs"><a href="<?= home_url(); ?>">Home </a>/ <span class="purple bold"><?= the_title(); ?></span></div>
		<div class="flex">
		<div class="flex-grid-2-3">
			<?php the_post_thumbnail(); ?>
			<div class="date"><?= $date; ?></div>
			<div class="category"><?= $cat; ?></div>
			<h1 class="purple"><?= the_title(); ?></h1>
			<div class="text"><?= the_content(); ?></div>
		</div>
		</div>
	</div>
</section>