<?php
/*
 Template Name: Narrow
 */
?>
<?php get_header(); ?>

<div class="row">
<div class="col-md-2">&nbsp;</div>
<div class="col-md-8">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'page' ); ?>

	<?php endwhile; // end of the loop. ?>

</div>
<div class="col-md-2">&nbsp;</div>
</div>

<?php get_footer(); ?>
