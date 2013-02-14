<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>

	<!-- CSS
  ================================================== -->
  	<link href='http://fonts.googleapis.com/css?family=Amatic+SC|Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://www.meetstrange.com/stylesheets/base.css">
	<link rel="stylesheet" href="http://www.meetstrange.com/stylesheets/skeleton.css">
	<link rel="stylesheet" href="http://www.meetstrange.com/stylesheets/layout.css">

	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>



</head>

<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=263965476968789";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div id="header-back-bg"></div>
    <div id="header-middle-bg"></div>
    <div id="header-godzilla"></div>
    
	<header id="header">
	<div class="container">
	<div id="logo">
		<a href="http://www.meetstrange.com" title="Strange Home" alt="Home">
		<img src="<?php echo get_bloginfo('stylesheet_directory');?>/images/logo.png" class="scale-with-grid center" alt="Strange logo"></a>
	</div>
	
		<div class="eight columns">
			<nav id="nav_left" class="nomobile">
			<ul>
				<li class="home"><a href="http://www.meetstrange.com/index.html" alt="Home"><img src="<?php echo get_bloginfo('stylesheet_directory');?>/images/nav-home.png" alt="Home"></a></li>
				<li><a href="http://www.meetstrange.com/aboutus.html" alt="About Us">About Us</a></li>
				<li><a href="http://www.meetstrange.com/theteam.html" alt="The Team">The Team</a></li>
			</ul>
			</nav>
		</div>
						
		<div class="eight columns">		
			<nav id="nav_right" class="nomobile">
				<ul>
					<li><a class="work" href="http://www.meetstrange.com/blog/category/our-work/" alt="Our Work">Our Work</a></li>				
					<li><a href="http://www.meetstrange.com/blog" class="active" alt="Blog">The Blog</a></li>
					<li class="contact"><a href="http://www.meetstrange.com/contact.html" alt="Contact"><img src="<?php echo get_bloginfo('stylesheet_directory');?>/images/nav-mail.png" alt="Contact"></a></li>
				</ul>
			</nav>
		</div>	
	</div>
  </header>
  
	<!-- END HEADER -->

	<!-- BEGIN BODY -->
	<div id="page-container" class="container">
	
	<!-- BEGIN MOBILE NAV -->
	<div class="hidefull">
	<div class="sixteen columns add-bottom">
		
				<ul class="mininav">
					<li><a href="http://www.meetstrange.com/index.html" alt="Home">Home</a></li>
					<li class="fixnav"><a href="http://www.meetstrange.com/aboutus.html" alt="About Us">About Us</a></li>
					<li><a href="http://www.meetstrange.com/theteam.html" alt="The Team">The Team</a></li>
					<li class="fixnav"><a class="work" href="http://www.meetstrange.com/blog/category/our-work/" alt="Our Work">Our Work</a></li>
					<li><a href="http://www.meetstrange.com/blog" class="active"  alt="The Blog">The Blog</a></li>				
					<li class="fixnav"><a href="http://www.meetstrange.com/contact.html" alt="Contact">Contact</a></li>
				</ul>
		
	</div>
	</div>
	<!-- END MOBILE NAV -->



	<!--<div id="page" class="hfeed site">

	<div id="main" class="wrapper">-->	


	
	