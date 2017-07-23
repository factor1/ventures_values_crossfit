<?php
/*
Template Name: Home Page
*/
get_header();

?>

<div class="hero">
	<?php echo get_f1slider(1); ?>
</div>


<div class="row learnmore">
	<div class="columns medium-6">
		<h2 class="tellmemore"><?php the_field( "learn_more_copy"); ?></h2>
	</div>
	
	<div class="columns medium-6 learncolumn">
		<a href="<?php echo get_option('home'); ?>/join/" class="button learnbutton">Sign Up!</a>
	</div>
</div>



<div class="row featureditems">
	<div class="columns large-4 medium-6 getstarted">
		<center><a href="<?php the_field( "feature_url_1"); ?>"><figure>
		<img src="<?php bloginfo('template_url'); ?>//assets/img/feature01bw.jpg" alt="feature01bw"/>
			<figcaption onclick="void(0)">
				<img src="<?php bloginfo('template_url'); ?>//assets/img/feature01over.jpg" alt="feature01red"/>	
			</figcaption>
		</figure></a></center>
	</div>
	
	<div class="columns large-4 medium-6 whatiscrossfit">
		<center><a href="<?php the_field( "feature_url_2"); ?>"><figure>
		<img src="<?php bloginfo('template_url'); ?>//assets/img/feature02bw.jpg" alt="feature02bw"/>
			<figcaption onclick="void(0)">
				<img src="<?php bloginfo('template_url'); ?>//assets/img/feature02over.jpg" alt="feature02red"/>	
			</figcaption>
		</figure></a></center>
	</div>
	
	<div class="columns large-4 medium-6 wodlink">
		<center><a href="<?php the_field( "feature_url_3"); ?>"><figure>
		<img src="<?php bloginfo('template_url'); ?>//assets/img/feature03bw.jpg" alt="feature03bw"/>
			<figcaption onclick="void(0)">
				<img src="<?php bloginfo('template_url'); ?>//assets/img/feature03over.jpg" alt="feature03red"/>	
			</figcaption>
		</figure></a></center>
	</div>
</div>


<?php get_footer(); ?>
