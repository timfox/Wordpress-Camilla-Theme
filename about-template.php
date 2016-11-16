<?php
/*
Template Name: About Template
*/

get_header(); ?>

<div class="desktop-padding">

<h1 class="about-head"><?php the_title( '', '' ); ?></h1>

<div class="container">

    <div class="col-xs-12 col-sm-9">
    
    	<div class="article-circle">
        	<p><img src="<?php echo get_template_directory_uri(); ?>/images/about.png" /></p>
        </div>
    
    	<?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', 'page' ); ?>
		<?php endwhile; // end of the loop. ?>

    
    </div>
    
    <div class="hidden-xs col-sm-3">
    
    	<?php get_sidebar(); ?>
    
    </div>

</div>

</div>

<?php get_footer(); ?>