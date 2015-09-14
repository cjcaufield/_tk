<?php
/**
 * The template for displaying image attachments.
 *
 * @package _tk
 */

get_header(); ?>

<div class="row">
	
	<div class="col-xs-12 col-md-9">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php
		// Add the class "panel" below here to wrap the content-padder in Bootstrap style ;)
		// Simply replace post_class() with post_class('panel') below here ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				<div class="entry-meta">
					<?php
						$metadata = wp_get_attachment_metadata();
						printf( __( 'Published <span class="entry-date"><time class="entry-date" datetime="%1$s">%2$s</time></span> at <a href="%3$s" title="Link to full-size image">%4$s &times; %5$s</a> in <a href="%6$s" title="Return to %7$s" rel="gallery">%8$s</a>', '_tk' ),
							esc_attr( get_the_date( 'c' ) ),
							esc_html( get_the_date() ),
							esc_url( wp_get_attachment_url() ),
							$metadata['width'],
							$metadata['height'],
							esc_url( get_permalink( $post->post_parent ) ),
							esc_attr( strip_tags( get_the_title( $post->post_parent ) ) ),
							get_the_title( $post->post_parent )
						);
					?>
				</div><!-- .entry-meta -->
			</header><!-- .entry-header -->

			<div class="entry-content">
				<div class="entry-attachment">
					
					<div class="attachment">
						<?php _tk_the_attached_image(); ?>
					</div><!-- .attachment -->

					<?php if ( has_excerpt() ) : ?>
					<div class="entry-caption">
						<?php the_excerpt(); ?>
					</div><!-- .entry-caption -->
					<?php endif; ?>
					
				</div><!-- .entry-attachment -->

				<?php the_content(); ?>
				
			</div><!-- .entry-content -->
			
		</article><!-- #post-## -->

	<?php endwhile; // end of the loop. ?>
	
	</div>
	<div class="col-xs-12 col-md-3">

		<?php get_sidebar(); ?>

	</div>
</div>

<?php get_footer(); ?>