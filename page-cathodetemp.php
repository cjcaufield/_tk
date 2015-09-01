<?php
/*
 Template Name: CathodeTemp
 */
?>
<?php get_header(); ?>
<!--

FACEBOOK

-->
<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<!--

Prevent FancyBox from showing popups on small screens.

-->
<!-- Optionally disable fancybox at certain sizes.
<script type="text/javascript">
jQuery(function() {
    jQuery('.popbox').fancybox({
        onStart: function(link) {
            if (jQuery(window).width() < 768) {
                return false;
            }
        }
    });
});
</script>
-->
<!--

CONTENT

-->
</div><!-- end outer container -->
<div class="jumbotron cathode-jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Cathode</h1>
				<h3 class="subheader">Vintage Terminal</h3>
				<div class="macbookpro-wrapper">
					<div class="macbookpro-innerwrapper">
						<?php echo do_shortcode('[videojs ogg="http://s3.amazonaws.com/cjcaufield/media/Cathode2014Final.ogv" mp4="http://s3.amazonaws.com/cjcaufield/media/Cathode2014Final.mp4" poster="/media/Cathode2014Poster.jpg" width="100%" height="100%" id="movie-id" preload="auto" controls="true"][/videojs]'); ?>
					</div>
					<img src="/media/MacBookPro.jpg" />
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container"><!-- begin new outer container -->
<!--
   
BUTTON ROW
   
-->
<div class="row action-row text-center">
	<div class="col-sm-6">
		<div class="sticker-wrapper">
			&nbsp;
			<div class="sticker"></div>
		</div>
		<div class="action-div">
			<h2>iOS</h2>
			<div class="action-buttons">
				<div class="store-badge">
					<!-- Replace with http://www.appstore.com/cathode ? -->
					<a href="https://itunes.apple.com/us/app/cathode/id656982811?ls=1&mt=8">
						<img src="/images/AppStoreBadge.svg" width="190px" height="45px" />
					</a>
				</div>
			</div>
			<p>Universal iOS 7 app.<br>Connects to any Mac or SSH server.</p>
			<div class="facebook-wrapper">
				<div class="fb-like" data-href="http://www.facebook.com/CathodeApp" data-send="false" data-layout="box_count" data-show-faces="false" data-width="250">
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-6" style="border-left: 1px solid #eee;">
		<div class="action-div">
			<h2>Mac</h2>
				<div class="action-buttons">
					<div class="store-badge">
						<!-- Replace with http://www.appstore.com/mac/cathode ? -->
						<a href="https://itunes.apple.com/us/app/cathode/id499233976?mt=12&uo=4" target="itunes_store">
							<img src="/images/MacAppStoreBadge.svg" width="230px" height="45px" />
						</a>
					</div>
				</div>
				<div class="action-buttons">
					<p>Runs on any 2008+ Mac with OS X 10.6+.</p>
					<div class="store-badge">
						<a href="http://store.secretgeometry.com/download.php?id=7" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-circle-arrow-down"></span><span class="btn-label">Download Demo</span></a>
					</div>
					<div class="store-badge">
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="2SEGQDDR2H7SQ">
							<!--<input class="btn btn-success" type="submit" value="Purchase | $10" />-->
							<button type="submit" class="btn btn-success btn-block">
								<span class="glyphicon glyphicon-gift"></span><span class="btn-label">Purchase Direct</span>
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--
   
ROW A
   
-->
</div><!-- end outer container -->
<div class="jumbotron gradient-9">
	<div class="container">
		<div class="row product-row product-banner vcenter-row-sm">
			<div class="col-sm-6 vcenter-sm">
				<div class="jumbo-section">
					<img src="/media/iPhone5cCathodeFlatOptimized.png" />
				</div>
			</div>
			<div class="col-sm-6 vcenter-sm">
				<div class="jumbo-section">
					<div class="centered-text-container">
						<div class="centered-text">
							<h2>Beauty & Brains</h2>
							<p>Cathode is a fully customizable terminal app with a look inspired by classic computers.</p>
							<p>Don't let the playful exterior fool you; under the hood there's an advanced emulator designed for serious work.</p>
							<p>Whether you prefer crisp, clean text, or a flickering, glowing mess, Cathode is the perfect tool for hacking in style.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container"><!-- begin new outer container -->
<!--
   
ROW 1
   
-->
<div class="row feature-row">
	<div class="col-md-12">
		<h2>Tech Specs</h2>
		<div class="row">
			<div class="col-sm-3">
				<div class="product-text">
					<h3>Emulation</h3>
					<ul class="product-list">
						<li>256 Colors</li>
						<li>Accurate Layout</li>
						<li>Live Text Reflow</li>
						<li>Scrollback Buffer</li>
						<li>Unicode (single width)</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="product-text">
					<h3>Workflow</h3>
					<ul class="product-list">
						<li>Server Bookmarks</li>
						<li>Wireless Keyboards</li>
						<li>Customizable Keys</li>
						<li>Concurrent Sessions</li>
						<li>Secure Data</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="product-text">
					<h3>Mobile</h3>
					<ul class="product-list">
						<li>Gestures</li>
						<li>Portrait or Landscape</li>
						<li>3G and Wifi</li>
						<li>Auto-Detect Servers</li>
						<li>Dynamic Connections</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="product-text">
					<h3>Desktop</h3>
					<ul class="product-list">
						<li>Drag and Drop Files</li>
						<li>Mouse Copy/Paste</li>
						<li>Command-Click URLs</li>
						<li>Text Editor Mode</li>
						<li>Text-Art Generator</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--
   
ROW B
   
-->
</div><!-- end outer container -->
<div class="jumbotron gradient-2">
	<div class="container">
		<div class="row product-row product-banner vcenter-row">
			<div class="col-md-6 vcenter col-md-push-6">
				<div class="jumbo-section">
					<img src="/media/FinalIPadWithKeyboard.jpg" style="width:100%; height:auto;" />
				</div>
			</div>
			<div class="col-md-6 vcenter col-md-pull-6">
				<div class="jumbo-section">
					<h2>Back to the Future</h2>
					<p>Disregard decades of user interface progress.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container"><!-- begin new outer container -->
<!--

NEW ROW 1

-->
<div class="row feature-row">
	<div class="col-sm-4">
		<div class="feature-text">
	      <h2>Fonts</h2>
	      <p>Cathode includes a dozen classic bitmap fonts which look great on small screens.  Zoom in for blocky letters or zoom out for crisp text.</p>
	  </div>
	</div>
	<div class="col-sm-4">
		<div class="feature-text">
	      <h2>Retina</h2>
	      <p>Designed from scratch to be resolution independent.  Text and effects take full advantage of all the extra pixels.</p>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="feature-text">
	      <h2>Fullscreen</h2>
	      <p>Hide clutter and completely immerse yourself.  Works great with multiple monitors and spaces.</p>
		</div>
	</div>
</div>
<hr />
<!--

NEW ROW 2

-->
<div class="row feature-row">
	<div class="col-sm-4">
		<div class="feature-text">
	      <h2>Glass</h2>
	      <p>Warp the screen like a 1970s bubble, or flatten it like a modern slate.  Rays project through the curve and reflect in the frame.</p>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="feature-text">
	      <h2>Color</h2>
	      <p>A full spectrum of 8-bit colors, plus overbright and glow controls.  The background can be fully lit, or completely darkened.</p>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="feature-text">
	      <h2>Filters</h2>
	      <p>Create a lifelike, analog warmth by adding static, jitter, and flicker.  Turn the frame rate up to 60 fps for a hyper-real look.</p>
	  </div>
	</div>
</div>
<hr />
<!--

NEW ROW 3

-->
<div class="row feature-row">
	<div class="col-sm-4">
		<div class="feature-text">
	      <h2>Animation</h2>
	      <p>Typing feels incredibly smooth as pixels slowly fade away.  Ray tubes bounce as you scroll, and light moves with your orientation.</p>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="feature-text">
	      <h2>Sound</h2>
	      <p>A variety of beeps, clicks, and pops accentuate your interactions.  Fully customizable and simple to turn on or off.</p>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="feature-text">
	      <h2>Mac Extras</h2>
	      <p>Use as a simple text editor or text-art generator.  Works with any plain text files, images, or your webcam.</p>
		</div>
	</div>
</div>
<!--

CUT ROW

-->
<!--
   
IMAGES
   
-->
</div><!-- end outer container -->
<div class="jumbotron gradient-2 screenshot-jumbo">
	<div class="container">
		<div class="row screenshot-row">
			<div class="col-sm-2 col-xs-4">
				<a class='fancybox popbox' rel='fancybox-1' href='/media/screenshot14.jpg'>
					<img class="framed" src="/media/screenshot14-300x187.jpg" />
				</a>
			</div>
			<div class="col-sm-2 col-xs-4">
				<a class='fancybox popbox' rel='fancybox-1' href='/media/screenshot13.jpg'>
					<img class="framed" src="/media/screenshot13-300x187.jpg" />
				</a>
			</div>
			<div class="col-sm-2 col-xs-4">
				<a class='fancybox popbox' rel='fancybox-1' href='/media/screenshot9.jpg'>
					<img class="framed" src="/media/screenshot9-300x187.jpg" />
				</a>
			</div>
			<div class="col-sm-2 col-xs-4">
				<a class='fancybox popbox' rel='fancybox-1' href='/media/screenshot12.jpg'>
					<img class="framed" src="/media/screenshot12-300x187.jpg" />
				</a>
			</div>
			<div class="col-sm-2 col-xs-4">
				<a class='fancybox popbox' rel='fancybox-1' href='/media/screenshot10.jpg'>
					<img class="framed" src="/media/screenshot10-300x187.jpg" />
				</a>
			</div>
			<div class="col-sm-2 col-xs-4">
				<a class='fancybox popbox' rel='fancybox-1' href='/media/screenshot7.jpg'>
					<img class="framed" src="/media/screenshot7-300x187.jpg" />
				</a>
			</div>
		</div>
		<div class="row screenshot-row">
			<div class="col-sm-2 col-xs-4">
				<a class='fancybox popbox' rel='fancybox-1' href='/media/PhoneConnect.jpg'>
					<img class="framed" src="/media/PhoneConnect-202x360.jpg" />
				</a>
			</div>
			<div class="col-sm-2 col-xs-4">
				<a class='fancybox popbox' rel='fancybox-1' href='/media/PhoneColorText.jpg'>
					<img class="framed" src="/media/PhoneColorText-202x360.jpg" />
				</a>
			</div>
			<div class="col-sm-2 col-xs-4">
				<a class='fancybox popbox' rel='fancybox-1' href='/media/PhoneEffectSliders.jpg'>
					<img class="framed" src="/media/PhoneEffectSliders-202x360.jpg" />
				</a>
			</div>
			<div class="col-sm-2 col-xs-4">
				<a class='fancybox popbox' rel='fancybox-1' href='/media/iPadVim.jpg'>
					<img class="framed" src="/media/iPadVim-225x300.jpg" />
				</a>
			</div>
			<div class="col-sm-2 col-xs-4">
				<a class='fancybox popbox' rel='fancybox-1' href='/media/iPadPhoneEffectSliders.jpg'>
					<img class="framed" src="/media/iPadPhoneEffectSliders-225x300.jpg" />
				</a>
			</div>
			<div class="col-sm-2 col-xs-4">
				<a class='fancybox popbox' rel='fancybox-1' href='/media/iPadLandscape.jpg'>
					<img class="framed" src="/media/iPadLandscape-300x225.jpg" />
				</a>
			</div>
		</div>
	</div>
</div>
<div class="container"><!-- begin new outer container -->
<!--

BOTTOM ROW

-->
<div class="row product-row">
  <div class="col-sm-6">
  	<div class="product-text">
		<h3>Quotes</h3>
		<blockquote>
			<p>Cathode puts the sex back in terminal emulators.</p>
			<small><a href="http://gizmodo.com/5742855/cathode-puts-the-sex-back-in-terminal-emulators">Gizmodo.com</a></small>
		</blockquote>
		<blockquote>
			<p>Too fun to resist.</p>
			<small><a href="http://www.techhive.com/article/217824/turn_your_new_mac_into_an_old_terminal_with_cathode.html">PC World</a></small>
		</blockquote>
		<blockquote>
			<p>This is fantastic.</p>
			<small><a href="http://www.jwz.org/blog/2011/01/cathode-vintage-terminal-emulator">JWZ.org</a></small>
		</blockquote>
	</div>
  </div>
  <div class="col-sm-6">
  	<div class="product-text">
		<h3>Further Reading</h3>
		<ul class="product-list">
		  <li><a href="/apps/cathode/faq">Frequently Asked Questions</a></li>
		  <li><a href="/apps/cathode/releasenotes">Release Notes</a></li>
		</ul>
	  </div>
  </div>
</div>
<!--
 
 FOOTER
 
-->
<?php get_footer(); ?>
