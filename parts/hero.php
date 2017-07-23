<div class="pagehero">
		<?php if(has_post_thumbnail()) : 
			the_post_thumbnail();
			 else : ?>
				<img src="<?php bloginfo('template_url');?>/assets/img/default-bg.jpg">
			<?php endif; ?>
</div>
