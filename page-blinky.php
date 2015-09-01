<?php
/*
 Template Name: Blinky
 */
?>
<?php get_header(); ?>
<!--

BEGIN CONTENT

-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/en_US/all.js#xfbml=1&status=0&appId=482685618443490";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</div><!-- end outer container -->
<div class="jumbotron blinky-jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Blinky</h1>
				<h3 class="subheader">Retro Text Editor</h3>
				<div class="macbookair-wrapper">
					<div class="macbookair-innerwrapper">
						<?php echo do_shortcode('[videojs ogg="http://s3.amazonaws.com/cjcaufield/media/BlinkyTrailer.ogv" mp4="http://s3.amazonaws.com/cjcaufield/media/BlinkyTrailer.mp4" poster="/media/BlinkyPoster.jpg" width="100%" height="100%" id="movie-id" preload="auto" controls="true"][/videojs]'); ?>
					</div>
					<img src="/media/MBA.jpg" />
				</div>
			</div>
		</div>
	</div>
</div>

<!--

BUTTON ROW

-->
<div class="jumbotron blinky-button-jumbo">
	<div class="container">
		<div class="row product-row">
			<div class="col-md-12">
				<div class="store-badge">
					<a href="http://itunes.apple.com/us/app/blinky/id550873221">
						<img src="/images/MacAppStoreBadge.svg" width="230px" height="45px" />
					</a>
				</div>
				<div class="facebook-wrapper">
					<div class="fb-like" data-href="//www.facebook.com/BlinkyTextEditor" data-send="false" data-layout="box_count" data-show-faces="false" data-width="250"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container"><!-- begin new outer container -->
<!--

ROW 1

-->
<div class="row product-row vcenter-row">
	<div class="col-md-6 vcenter">
		<a class='fancybox' rel='fancybox-1' href='/media/screenshot24.jpg'>
			<img class="framed" src="/media/screenshot24-720x450.jpg" />
		</a>
	</div>
	<div class="col-md-6 vcenter">
		<div class="product-text">
			<h2>Back To Basics</h2>
			<ul class="product-list">
				<li>Inspired by word processors from the 1980s.</li>
				<li>Simple interface puts the focus on your writing.</li>
				<li>Stylized look and feel keeps you creative.</li>
				<li>Auto-save, gestures, and retina support.</li>
				<li>Immersive fullscreen mode.</li>
			</ul>
		</div>
	</div>
</div>
<hr />
<!--

ROW 2

-->
<div class="row product-row vcenter-row">
	<div class="col-md-6 vcenter col-md-push-6">
		<a class='fancybox' rel='fancybox-1' href='/media/screenshot31.jpg'>
			<img class="framed" src="/media/screenshot31-720x450.jpg" />
		</a>
	</div>
	<div class="col-md-6 vcenter col-md-pull-6">
		<div class="product-text">
			<h2>Special Effects</h2>
			<ul class="product-list">
			  <li>Dozens of sliders for analog effects, including:</li>
			  <li>Curvature, static, burn-in, jitter, and h-sync.</li>
			  <li>Glowing halos simulate intense brightness.</li>
			  <li>Save and recall your favorite looks using themes.</li>
			  <li>Pre-made themes for 1976-1991 and modern styles.</li>
			</ul>
		</div>
	</div>
</div>
<hr />
<!--

BLURB ROW 3

-->
<div class="row product-row vcenter-row">
	<div class="col-md-6 vcenter">
		<a class='fancybox' rel='fancybox-1' href='/media/screenshot33.jpg'>
			<img class="framed" src="/media/screenshot33-720x450.jpg" />
		</a>
	</div>
	<div class="col-md-6 vcenter">
		<div class="product-text">
			<h2>Hyperrealism</h2>
			<ul class="product-list">
				<li>Lifelike touches constantly surprise and delight.</li>
				<li>Ray tubes burst open and bounce.</li>
				<li>Dynamic perspective, lighting, and shadows.</li>
				<li>Pixels burn-in and slowly fade away when turned off.</li>
				<li>Use an image or webcam photo as glass reflection.</li>
			</ul>
		</div>
	</div>
</div>
<hr />
<!--

BLURB ROW 4

-->
<div class="row product-row vcenter-row">
	<div class="col-md-6 vcenter col-md-push-6">
		<a class='fancybox' rel='fancybox-1' href='/media/screenshot28.jpg'>
			<img class="framed" src="/media/screenshot28-720x450.jpg" />
		</a>
	</div>
	<div class="col-md-6 vcenter col-md-pull-6">
		<div class="product-text">
			<h2>Extras</h2>
			<ul class="product-list">
			  <li>Comes with twelve vintage fonts.</li>
			  <li>Choose from a wide variety of sound effects.</li>
			  <li>Open any image or photo to generate text art.</li>
			  <li>View your webcam feed as real-time text art.</li>
			</ul>
		</div>
	</div>
</div>
<hr />
<!--

BOTTOM ROW

-->
<div class="row product-row vcenter-row">
  	<div class="col-md-6 vcenter">
  		<a class='fancybox' rel='fancybox-1' href='/media/screenshot15.jpg'>
			<img class="framed" src="/media/screenshot15-720x450.jpg" />
		</a>
	</div>
  	<div class="col-md-6 vcenter">
		<h2>Requirements</h2>
		<ul class="product-list">
			<li>OS X 10.6+</li>
			<li>iMacs & Pro Macs: 2007+</li>
			<li>Other Macs: mid-2008+</li>
		</ul>
	</div>
</div>
</div>
</div>
</div>
</div>
<!--
 
 FOOTER
 
-->
<?php get_footer(); ?>
