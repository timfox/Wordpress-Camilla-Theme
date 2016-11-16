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



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="row">

	<div class="hidden-xs col-sm-2">
    
    </div>

    <div class="col-xs-12 col-sm-10">
    
    
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<span style="margin:5px;"><?php camilla_posted_on(); ?>  </span>          
            <span style="margin:5px;"><i class="fa fa-tag" style="color:#ff9600;"></i> 
            <?php
			$posttags = get_the_tags();
			if ($posttags) {
			  foreach($posttags as $tag) {
				echo '' . $tag->name . ' '; 
			  }
			}
			?></span>
            <?php
			/*wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'camilla' ),
				'after'  => '</div>',
			) );*/
			?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		
	</div><!-- .entry-content -->
    
    

	<footer class="entry-footer">
		<?php //camilla_entry_footer(); ?>
	</footer><!-- .entry-footer -->
    
    </div>
    
    	<?php comments_template(); ?> 

</article><!-- #post-## -->
