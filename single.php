<?php get_header(); ?>

<?php include 'parts/hero.php'; ?>

<article class="row">
	<div class="columns medium-10 medium-centered">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h1><?php the_title(); ?></h1>
			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
			
			<?php the_content(); ?>
			<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
			<?php the_tags( 'Tags: ', ', ', ''); ?>


			
			<?php edit_post_link('Edit this entry','','.'); ?>
			
		</div>

	<?php comments_template(); ?>
	
	</div>

	<?php endwhile; endif; ?>
</article>

<?php get_footer(); ?>