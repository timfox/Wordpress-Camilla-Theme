<?php
/*
Template Name: Blog Template
*/

get_header(); ?>

<div class="container">

<div class="col-xs-12 col-sm-9">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
    
</div>

<div class="hidden-xs col-sm-3">

<?php get_sidebar(); ?>

</div>

</div>

<?php get_footer(); ?>