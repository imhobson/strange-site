<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage skeleton
 * @since skeleton 0.1
 */
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes();?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes();?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes();?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes();?>> <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	// Detect Yoast SEO Plugin
	if (defined('WPSEO_VERSION')) {
		wp_title('');
	} else {
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'skeleton' ), max( $paged, $page ) );
	}
	?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Mobile Specific Metas
================================================== -->

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 

<!-- Favicons
================================================== -->

<link rel="shortcut icon" href="<?php echo get_bloginfo('stylesheet_directory');?>/images/favicon.ico">

<link rel="apple-touch-icon" href="<?php echo get_bloginfo('stylesheet_directory');?>/images/apple-touch-icon.png">

<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_bloginfo('stylesheet_directory');?>/images/apple-touch-icon-72x72.png" />

<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_bloginfo('stylesheet_directory');?>/images/apple-touch-icon-114x114.png" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" id="custom" href="<?php echo get_bloginfo(url).'/?get_styles=css';?>" type="text/css" media="all" />

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>


<?php
	/* 
	 * enqueue threaded comments support.
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	// Load head elements
	wp_head();
?>

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


	<!-- Primary Page Layout
	================================================== -->

	<div id="header-back-bg"></div>
  <div id="header-middle-bg"></div>
  <div id="header-godzilla"></div>
	<header id="header">
	<div class="container">
	<div id="logo">
		<a href="http://www.meetstrange.com/index.html" title="Strange Home" alt="Home">
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
					<li><a class="work" href="http://www.meetstrange.com/blog" alt="Our Work">Our Work</a></li>				
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
					<li class="fixnav"><a class="work" href="http://www.meetstrange.com/blog" alt="Our Work">Our Work</a></li>
					<li><a href="http://www.meetstrange.com/blog" class="active"  alt="The Blog">The Blog</a></li>				
					<li class="fixnav"><a href="http://www.meetstrange.com/contact.html" alt="Contact">Contact</a></li>
				</ul>
		
	</div>
	</div>
	<!-- END MOBILE NAV -->
	