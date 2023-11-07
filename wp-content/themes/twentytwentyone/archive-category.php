<div class="container ">
 <h1 class="center"><?= the_title(); ?> Projects</h1>
<?php if ( have_posts() ) : ?>

	<div class="flex">

	<?php while ( have_posts() ) : ?>
		<?php the_post(); 
		
		 $date = get_post_meta($post->ID, 'project_date', true);
		 echo '<a class="card" href="' . get_the_permalink() . '">';
		 echo get_the_post_thumbnail();
		 echo '<div class="date purple">' . $date . '</div>';
		 echo '<h2>' . get_the_title() . '</h2>';
		 echo '</a>';
		
		?>
		
	<?php endwhile; ?>

	</div>

<?php else : ?>
	<?php get_template_part( 'template-parts/content/content-none' ); ?>
<?php endif; ?>
 </div>