<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _tk
 */
get_header(); ?>

</div><!-- end outer container -->

<div class="jumbotron tight-jumbotron jumbotron-white home2-page-image-jumbotron">
	<div class="text-center">
		<div class="home2-page-image-div">
	        <a href="/apps/cathode">
				<img src="/wp-content/uploads/squattersreversed.jpg" width="100%" border="0" />
			</a>
			<!--<div class="noise-overlay"></div>-->
		</div>
	</div>
</div>
<div class="jumbotron big-vertical-padding jumbotron-white home2-page-logo-jumbotron">
	<div class="home2-page-logo-outer-div">
		<div class="home2-page-logo-div">
			<div class="text-center">
				<div class="sgbiglogo"></div>
				<h1>Secret Geometry</h1>
			</div>
			<div class="spacer30"></div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
						<p style="text-align:justify">A circle is a simple <a title="Shape" href="https://en.wikipedia.org/wiki/Shape">shape</a> in <a title="Euclidean geometry" href="https://en.wikipedia.org/wiki/Euclidean_geometry">Euclidean geometry</a>. It is the set of all <a title="Point (geometry)" href="https://en.wikipedia.org/wiki/Point_(geometry)">points</a> in a <a class="mw-redirect" title="Plane (mathematics)" href="https://en.wikipedia.org/wiki/Plane_(mathematics)">plane</a> that are at a given distance from a given point, the <a title="Centre (geometry)" href="https://en.wikipedia.org/wiki/Centre_(geometry)">centre</a>; equivalently it is the curve traced out by a point that moves so that its distance from a given point is constant. The distance between any of the points and the centre is called the <a title="Radius" href="https://en.wikipedia.org/wiki/Radius">radius</a>.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="jumbotron big-vertical-padding" style="position:relative;">
	<div class="text-center">
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<div class="left-app-icon">
						<a href="/apps/cathode"><img src="/wp-content/uploads/cathode128.png"></a>
						<h2><a href="/apps/cathode">Cathode</a></h2>
						<h3 class="sans-serif">Terminal</h3>
					</div>
				</div>
				<div class="col-xs-6">
					<div class="right-app-icon">
						<a href="/apps/blinky"><img src="/wp-content/uploads/blinky128.png"></a>
						<h2><a href="/apps/blinky" class="alt-color">Blinky</a></h2>
						<h3 class="sans-serif">Text Editor</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--
<div class="jumbotron big-vertical-padding">
	<div class="text-center">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<p>Bio?</p>
				</div>
			</div>
		</div>
	</div>
</div>
-->
<!--
<script>
jQuery(document).ready(function() {
	var x = 0;
	var y = 0;
	setInterval(function() {
		var value = x.toString() + "px " + y.toString() + "px";
		var divs = jQuery(".noise-overlay");
		for (i = 0; i < divs.length; i++) {
			var div = divs.eq(i);
			div.css( { "background-position" : value } );
			x = Math.floor(Math.random() * 256.0);
			y = Math.floor(Math.random() * 256.0);
		}
	},
	33);
});
</script>
-->
<div class="container"><!-- begin new outer container -->

<?php get_footer(); ?>