<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Camilla
 */

get_header(); ?>


<div class="container">

<div class="col-xs-12 col-sm-12">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="about-head"><?php _e( '404 Error', 'camilla' ); ?></h1>
                    <a href="/">Return Home</a>
				</header>

				<div class="page-content">
					<p><?php //_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'camilla' ); ?></p>

					<?php //get_search_form(); ?>

					<?php //the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php /*if ( camilla_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						<h2 class="widget-title"><?php _e( 'Most Used Categories', 'camilla' ); ?></h2>
						<ul>
						<?php
							/*wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );* /
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif;*/ ?>

					<?php
						/* translators: %1$s: smiley */
						/*$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'camilla' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );*/
					?>

					<?php /*the_widget( 'WP_Widget_Tag_Cloud' );*/ ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
    
    </div>
    
</div>

<?php get_footer(); ?>
