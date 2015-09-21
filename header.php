<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Fontdeck javascript font loading. -->
<script type="text/javascript">
WebFontConfig = { fontdeck: { id: '59420' } };

(function() {
  var wf = document.createElement('script');
  wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
  '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(wf, s);
})();
</script>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>

<div id="wrap">
	<div id="wrap-inner">
		<div id="wrap-inner-inner">
			<div class="navbar navbar-default navbar-static-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" border="0">
		                    <!-- <img src="/wp-content/uploads/Logo.png" /> -->
		                    <div class="sglogo">&nbsp;</div>
		                </a>
					</div>
					<!-- The WordPress Menu goes here -->
					<?php wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'container_class' => 'collapse navbar-collapse navbar-responsive-collapse',
							'menu_class' => 'nav navbar-nav',
							'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
							'menu_id' => 'main-menu',
							'walker' => new wp_bootstrap_navwalker()
						)
					); ?>
				</div>
			</div><!-- .navbar -->
			<div class="main-content">	
				<div class="container">
				