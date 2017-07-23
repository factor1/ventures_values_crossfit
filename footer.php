<div id="footer">
				<div class="socbar">

					<div class="row">
						<div class="columns medium-6 followus">
							<h2 class="follow">Follow Us: 
								<a href="https://twitter.com/<?php the_field( "twitter_username", 'option' ); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
								<a href="https://www.facebook.com/<?php the_field( "facebook_username", 'option' ); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
								<a href="http://instagram.com/<?php the_field( "instagram_username", 'option' ); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
								<a href="mailto:<?php the_field( "email_address", 'option' ); ?>" target="_blank"><i class="fa fa-envelope"></i></a>
							</h2>
						</div>
						
						<div class="columns medium-6 crossfitjournal">
							<a href="http://journal.crossfit.com/start.tpl?version=CFJ-white123x63" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/CrossFitJournal.png" alt="CrossFitJournal"/></a>
						</div>
					</div>

				</div>

				<footer>

					<div class="row">

						<div class="columns medium-4 footerlogo show-for-small-only">
							<a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_url'); ?>/assets/img/footer_logo.png" alt="StoneHill-Footer-logo"/></a>
						</div>	
					
						<div class="columns medium-4 contactinfo">
							<div class="row">
								<div class="columns small-6">
									<p class="footerp"><a href="https://www.google.com/maps/place/<?php the_field( "address_line_1", 'option'  ); ?> <?php the_field( "address_line_2" , 'option' ); ?>" target="_blank"><?php the_field( "address_line_1", 'option'  ); ?><br><?php the_field( "address_line_2", 'option' ); ?></a></p>
								</div>
								
								<div class="columns small-6">
									<p class="footerp"><?php the_field( "phone_number", 'option' ); ?><br><a href="mailto:<?php the_field( "email_address", 'option'); ?>" target="_blank"><?php the_field( "email_address", 'option'); ?></a></p>
								</div>
							</div>
						</div>

						<div class="columns medium-4 footerlogo hide-for-small-only">
							<a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_url'); ?>/assets/img/footer_logo.png" alt="StoneHill-Footer-logo"/></a>
						</div>

						<div class="columns medium-4 consult">
							<a href="<?php echo get_option('home'); ?>/join/" class="button footerbutton">Schedule a Consultation</a>
						</div>

					</div>

				</footer>
		  
		  </div>

		</div>
		</div>

		<?php wp_footer(); ?>

		<!-- THIS IS FOR OFF-CANVAS MOBILE MENU -->
		<script src="//cdn.jsdelivr.net/foundation/5.2.2/js/foundation/foundation.js"></script>
		<script src="//cdn.jsdelivr.net/foundation/5.2.2/js/foundation/foundation.offcanvas.js"></script>

	  <script>
	  jQuery(document).ready(function($) {
	    $(document).foundation();
	  })
	  </script>

	</body>

</html>