<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package cmh3258
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Chris Hume's personal website">
<meta name="keywords" content="Chris Hume, Web, Recommenu, Developer, Engineer, Awesome, Tutorial">
<meta name="author" content="Chris Hume">

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


<!--<link href="http://d2v52k3cl9vedd.cloudfront.net/basscss/6.0.2/basscss.min.css" rel="stylesheet">-->
<!-- Latest compiled and minified CSS -->
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> -->

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->

<!-- Optional theme -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">-->

<!-- Latest compiled and minified JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> -->
<!--<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/frontpage.js"></script>-->

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Quattrocento:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Overlock:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700,500,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cutive+Mono' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'cmh3258' ); ?></a>

<!-- <div class=""> -->
	<!-- <div class=""> -->
	<header id="masthead" class="site-header" role="banner">

		<section class="about-preview" id="about-preview">
      <div>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/chris.png" class="profilePicture" alt="ME"/>
        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <p>"Be transformed by the renewing of your mind"
         <!--<p>Developer <a href="https://twitter.com/HarvestDelivery" target="_blank" class="harvest">@Harvest</a>.
          Thinker. <a href="https://twitter.com/Medium" target="_blank" class="medium">Medium</a> Christ Follower. 
          <!--<a href="" class="readMore">Read My Story</a>
        </p> -->
        <!-- <hr> -->
        <!-- <ul>
          <li><a href="https://twitter.com/yeddiejones" target="_blank" class="twitter"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter.png" alt="Twitter" class="socialMediaIcon"/></a></li>
          <li><a href="https://github.com/cmh3258" target="_blank" class="github"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/git.png" alt="Github" class="socialMediaIcon"/></a></li>
          <li><a href="https://www.linkedin.com/in/chrismhume" target="_blank" class="linkedIn"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/linkedin.svg" alt="LinkedIn" class="socialMediaIcon"/></a></li>
          <li><a href="https://medium.com/@yeddiejones" target="_blank" class="medium"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/medium.svg" alt="Medium" class="socialMediaIcon"/></a></li>
          <li><a href="mailto:chrismhume@gmail.com?Subject=Hello%20" target="_blank" class=""><img src="<?php bloginfo('stylesheet_directory'); ?>/images/new48.png" alt="Email" class="socialMediaIcon"/></a></li>
        </ul> -->
      </div>

		<div>
			<!-- <div class="site-branding"> -->
				<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
				<!-- <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> -->
			<!-- </div>.site-branding  -->
		<!-- </div> -->
			<nav id="site-navigation" class="" role="navigation">
				<!-- <ul>
          <li class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
        </ul> -->

				<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Primary Menu', 'cmh3258' ); ?></button> -->
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!--#site-navigation-->
		</div>
    </section>

	</header><!-- #masthead-->
</div>
<div class="">

	<div id="content" class="site-content">


