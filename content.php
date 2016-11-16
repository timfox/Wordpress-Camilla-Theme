<?php
/**
 * @package Camilla
 */
?>

<div class="row">

	<div class="col-xs-12 col-sm-2 blog-date" style="background:#ff9600; min-height:72px;">
    	<h1><?php the_time('d'); ?></h1>
        <h2><?php the_time('M'); ?></h2>
    	<?php //camilla_posted_on(); ?>
    </div>
    
    <div class="col-xs-12 col-sm-10" style="background:none; padding:0!important; min-height:72px;">
        
        <?php 
		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			echo the_post_thumbnail();
		}
		?>
        
        </div>

</div>

<div class="row">

	<div class="hidden-xs col-sm-2">
    
    </div>

    <div class="col-xs-12 col-sm-10">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="margin-top:2em;">
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
        
		<?php if ( 'post' == get_post_type() ) : ?>
        
		

		
		<div class="mobile-meta">
			<?php //camilla_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content blog-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Read More %s <span class="meta-nav">&rarr;</span>', 'camilla' ), 
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			/*wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'camilla' ),
				'after'  => '</div>',
			) );*/
		?>
        
        
	</div><!-- .entry-content -->

	<a href="<?php echo get_permalink(); ?>"><button class="read-more" name="submit" type="submit">Read More <span class="read-more-arrow"><i class="fa fa-arrow-right"></i></span></button>
</a>

	<footer class="entry-footer">
		<?php //camilla_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

<?php
			/*wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'camilla' ),
				'after'  => '</div>',
			) );*/ 
		?>

</div>

</div>
