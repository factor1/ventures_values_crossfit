<?php get_header(); ?>

<div class="pagehero">
	<img src="<?php bloginfo('template_url'); ?>/images/default-bg.jpg" alt="thewod"/>
</div>

<div class="row">
	<div class="columns medium-10 medium-centered">
	<?php if (have_posts()) : ?>

		<h1>Search Results</h1>

		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

		<?php while (have_posts()) : the_post(); ?>

<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
<h1><?php the_title(); ?></h1>
<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

<?php the_excerpt(); ?>

</div>

		<?php endwhile; ?>

		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>No posts found.</h2>

	<?php endif; ?>
	</div>
</div>


<?php get_footer(); ?>
