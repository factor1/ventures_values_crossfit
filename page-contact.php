<?php
/*
Template Name: Contact page with Map
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

<div class="row">
<div class="medium-12 columns">




</div></div>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
<script>
    function gmapsBackgroundInit(){
        var map;
        var latlng = new google.maps.LatLng(24.804578, 46.693862);
        var myLatLng = new google.maps.LatLng(24.804578, 46.693862);
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

        var image = 'http://ironhillcrossfit.com/wp-content/uploads/2016/05/map-pin.png';

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
