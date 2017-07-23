<?php
/*
Template Name: Membership Page
*/
get_header(); ?>

<div class="bloghero member-header">
	<h1 class="member-pagetitle"><?php the_title(); ?></h1>
</div>

<article class="row">
	<div class="columns medium-12">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div class="row">
			<ul class="small-block-grid-2 medium-block-grid-2 membership-grid">
				<li>
					<div class="membership-box">
						<img src="http://ironhillcrossfit.com/wp-content/uploads/2015/06/Drop-In.png" alt="Drop-In Badge">
						<h4 class="member-title">Drop-In</h4>
						<p class="member-price">100 SAR</p>
					</div>
				</li>
				

			
			
				<li>
					<div class="membership-box">
						<img src="http://ironhillcrossfit.com/wp-content/uploads/2015/06/3Month.png" alt="3-Month Badge">
						<h4 class="member-title">3 - Month</h4>
						<p class="member-price">2950 SAR</p>
					</div>
				</li>
			
			
				<li>
					<div class="membership-box">
						<img src="http://ironhillcrossfit.com/wp-content/uploads/2015/06/6Month.png" alt="6-Month Badge">
						<h4 class="member-title">6 - Month</h4>
						<p class="member-price">5100 SAR</p>
					</div>
				</li>
				
				
				<li>
					<div class="membership-box">
						<img src="http://ironhillcrossfit.com/wp-content/uploads/2015/06/1year.png" alt="1-Year Badge">
						<h4 class="member-title">1 - Year</h4>
						<p class="member-price">7100 SAR</p>
					</div>
				</li>							
			</ul>
		
		</div>
		
		
		
		
		<div class="post" id="post-<?php the_ID(); ?>">			
			<?php the_content(); ?>
			<?php edit_post_link('Edit this entry.', '<hr><p>', '</p>'); ?>
		</div>
	</div>
		<?php endwhile; endif; ?>
</article>

<div class="row">
<div class="medium-12 columns">




</div></div>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
<script>
    function gmapsBackgroundInit(){
        var map;
        var latlng = new google.maps.LatLng(31.9974499, 35.8518499);
        var myLatLng = new google.maps.LatLng(31.9974499, 35.8518499);
        var stylez = [
            { stylers: [{
                saturation:-100,
                lightness:20
            }]
            }
        ];
        
        


        var mapOptions = {
            zoom: 14,
            center: latlng,
            scrollwheel: false,
            mapTypeControlOptions: {
                mapTypeIds: []
            }
        };
        map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);

        var styledMapOptions = {
            name: "I + M"
        }

        var jayzMapType = new google.maps.StyledMapType(
            stylez, styledMapOptions);

        map.mapTypes.set('I + M', jayzMapType);
        map.setMapTypeId('I + M');

        var image = 'http://ironhillcrossfit.com/wp-content/uploads/2014/05/ironhillpin.png';

        var beachMarker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            animation: google.maps.Animation.DROP,
            icon: image
        });
    }
    gmapsBackgroundInit();
</script>




<?php get_footer(); ?>
