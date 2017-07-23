<?php
/*
Template Name: Page with Sidebar
*/
get_header(); ?>

<?php include 'parts/hero.php'; ?>

<article class="row">
	<div class="columns medium-8" id="main" >
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div class="post" id="post-<?php the_ID(); ?>">
			
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
			<?php edit_post_link('Edit this entry.', '<hr><p>', '</p>'); ?>
		</div>
	
		<?php endwhile; endif; ?>
	</div>
	<div class="columns medium-4 sidebar" id="cloudbox_wrap">
		<div >	
				<?php //get_sidebar('page'); ?>
				
				<?php the_sub_menu() ?>


		</div>
	</div>
</article>

<script src="<?php bloginfo('template_url'); ?>/js/stickyMojo.js"></script>

<script>
jQuery(document).ready(function($) {
  $(document).ready(function(){
    $('#cloudbox_wrap').stickyMojo({footerID: '#footer', contentID: '#main'});
  });
  });
</script>


<?php get_footer(); ?>
