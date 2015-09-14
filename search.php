<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package _tk
 */

get_header(); ?>

<div class="row">
	
	<div class="col-xs-12 col-md-9">
		
	<?php if ( have_posts() ) : ?>

		<header>
			<h2 class="page-title"><?php printf( __( 'Search Results for: %s', '_tk' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
		</header><!-- .page-header -->

		<?php // start the loop. ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'search' ); ?>

		<?php endwhile; ?>

		<?php _tk_content_nav( 'nav-below' ); ?>

	<?php else : ?>

		<?php get_template_part( 'no-results', 'search' ); ?>

	<?php endif; // end of loop. ?>
	
	</div>
	<div class="col-xs-12 col-md-3">

			<?php get_sidebar(); ?>
			
	</div>
</div>

<?php get_footer(); ?>