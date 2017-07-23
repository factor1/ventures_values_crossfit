<!doctype html> 
 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie ie6"> <![endif]--> 
<!--[if IE 7 ]>    <html lang="en" class="no-js ie ie7"> <![endif]--> 
<!--[if IE 8 ]>    <html lang="en" class="no-js ie ie8"> <![endif]--> 
<!--[if IE 9 ]>    <html lang="en" class="no-js ie ie9"> <![endif]--> 
<!--[if gt IE 9]>  <html lang="en" class="no-js ie">     <![endif]--> 
<!--[if !IE]><!--> <html lang="en" class="no-js">    <!--<![endif]--> 


<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
<meta property="og:title" content="<?php the_title(); ?>" />
<meta property="og:description" content="<?php the_excerpt(); ?>" />
<meta property="og:site_name" content="<?php bloginfo('name') ?>">
<meta name="google-site-verification" content="mBjiBqT5WwGJ2draV4MtSVakv6ZJgolkrmnYpPRaTXI" />
	

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
 
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>

<link rel="shortcut icon" href="/favicon.ico"> 
<link rel="apple-touch-icon" href="/apple-touch-icon.png"> 
<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-ipad.png"> 
<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-iphone4.png"> 

<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/5.0.2/css/foundation.min.css">
<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/5.0.2/css/normalize.css" />
<link type="text/css" rel="stylesheet"  href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link href="http://fonts.googleapis.com/css?family=Oswald:700,400,300|Open+Sans:400,700" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.min.css" type="text/css" />


</head>

<body <?php body_class(); ?>>
<div class="off-canvas-wrap" data-offcanvas>
<div class="inner-wrap">
  
<aside class="right-off-canvas-menu">
<?php wp_nav_menu( array( 'theme_location' => 'mobile') ); ?>
</aside>

<header>
	<div class="row">
		<div class="columns small-9 medium-4">
			<h1 class="mainlogo"><a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_url'); ?>/assets/img/navigation_logo.png" alt="<?php get_bloginfo('name');?>"/></a></h1>
		</div>
		
		<div class="columns large-8 show-for-large-up">
			<nav>
				<?php wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
			</nav>
		</div>		
	
		<div class="columns small-3 medium 9 hide-for-large-up menubutton">
			<a class="right-off-canvas-toggle" href="#" ><i class="fa fa-bars fa-2x"></i></a>
		</div>
	</div>
</header>