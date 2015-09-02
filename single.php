<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _tk
 */

get_header(); ?>

<div class="row">

	<div class="col-xs-12 col-md-8">
	
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>

	<?php endwhile; // end of the loop. ?>
	
	</div>
	<div class="col-xs-12 col-md-3 col-md-offset-1">

		<?php get_sidebar("blog"); ?>
		
	</div>
	
</div>
		
<?php get_footer(); ?>