<?php
/*
Template Name: Full-Width Page
*/
get_header(); ?>

<?php include 'parts/hero.php'; ?>


<article class="row">
	<div class="columns medium-10 medium-centered">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div class="post" id="post-<?php the_ID(); ?>">
			
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
			<?php edit_post_link('Edit this entry.', '<hr><p>', '</p>'); ?>
		</div>
	</div>
		<?php endwhile; endif; ?>
</article>



<?php get_footer(); ?>
