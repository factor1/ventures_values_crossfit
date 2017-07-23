<?php get_header(); ?>

<div class="bloghero">
	<img src="<?php bloginfo('template_url'); ?>/assets/img/thewod.png" alt="thewod"/>
</div>

<article class="row">
	<div class="columns medium-10 medium-centered">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			
		<div class="row">
			<div class="columns medium-6">
				<h1 class="blogtitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
			</div>
			
			<div class="columns medium-6 hide-for-small-only">
				<h2 class="blogmeta"><?php include (TEMPLATEPATH . '/inc/meta.php' ); ?></h1>
			</div>
		</div>
		
		<hr class="bloghr">
			

			<?php the_content(); ?>
			
		</div>

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
	</div>
</article>


<?php get_footer(); ?>