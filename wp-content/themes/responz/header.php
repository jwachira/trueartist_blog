<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<!-- reset viewport for mobile -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php if (is_home() || is_front_page()) { echo bloginfo('name'); } else { echo wp_title(''); } ?></title>

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php echo (themify_check('setting-custom_feed_url')) ? themify_get('setting-custom_feed_url') : bloginfo('rss2_url'); ?>">

<?php
/**
 *  Stylesheets and Javascript files are enqueued in theme-functions.php
 */
?>

<!-- media-queries.js -->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<!-- html5.js -->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- wp_header -->
<?php wp_head(); ?>

</head>

<body <?php body_class($class); ?>>

<div id="pagewrap">

	<div id="headerwrap">

		<div id="nav-bar">
			<div class="pagewidth clearfix">
				<?php if (function_exists('wp_nav_menu')) {
					wp_nav_menu(array('theme_location' => 'top-nav' , 'fallback_cb' => '' , 'container'  => '' , 'menu_id' => 'top-nav' , 'menu_class' => 'top-nav')); 
				} ?>
			</div>
		</div>
		<!-- /nav-bar -->
	
		<header id="header" class="pagewidth">
		
			<hgroup>
				<?php if(themify_get('setting-site_logo') == 'image' && themify_check('setting-site_logo_image_value')){ ?>
					<?php themify_image("src=".themify_get('setting-site_logo_image_value')."&w=".themify_get('setting-site_logo_width')."&h=".themify_get('setting-site_logo_height')."&alt=".get_bloginfo('name')."&before=<div id='site-logo'><a href='".get_option('home')."'>&after=</a></div>"); ?>
				<?php } else { ?>
					 <h1 id="site-logo"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
				<?php } ?>
	
				<h2 id="site-description"><?php bloginfo('description'); ?></h2>
			</hgroup>
	
			<div class="header-widget">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Header_Widget') ) ?>
			</div>
			<!--/header widget --> 

			<?php if(!themify_check('setting-exclude_search_form')): ?>
				<?php get_search_form(); ?>
			<?php endif ?>

			<div class="social-widget">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Social_Widget') ) ?>
	
				<?php if(!themify_check('setting-exclude_rss')): ?>
					<div class="rss"><a href="<?php if(themify_get('setting-custom_feed_url') != ""){ echo themify_get('setting-custom_feed_url'); } else { echo bloginfo('rss2_url'); } ?>">RSS</a></div>
				<?php endif ?>
			</div>
			<!-- /.social-widget -->

			<nav>
				<?php if (function_exists('wp_nav_menu')) {
					wp_nav_menu(array('theme_location' => 'main-nav' , 'fallback_cb' => 'default_main_nav' , 'container'  => '' , 'menu_id' => 'main-nav' , 'menu_class' => 'main-nav'));
				} else {
					default_main_nav();
				} ?>
				<!-- /#main-nav --> 
			</nav>	

		</header>
		<!-- /#header -->
				
	</div>
	<!-- /#headerwrap -->
	
	<div id="body" class="clearfix"> 
