<?php
/**
 * The template for displaying all single posts.
 *
 * @package Camilla
 */

get_header(); ?>

<div class="container">

<div class="col-xs-12 col-sm-9">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php camilla_post_nav(); ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
    
</div>

<div class="hidden-xs col-sm-3">

<?php get_sidebar(); ?>

</div>

</div>

<?php get_footer(); ?>