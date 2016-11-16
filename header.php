<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Camilla
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<!-- Viewport -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php wp_title( ' ', true, 'right' ); ?></title>

<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Icons -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/layouts/dragdealer.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/layouts/prefect-scrollbar.css">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/jquery.modal.css">
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.modal.js"></script>

<!-- Font -->
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head><?php flush(); ?>
<body <?php body_class(); ?>>
<div id="page">

	<!--<div id="dl-menu" class="dl-menuwrapper">
    <button class="dl-trigger menu-toggle"><i class="fa fa-bars"></i><?php //_e( 'Primary Menu', 'camilla' ); ?></button>
    <ul class="dl-menu">
        <li>
            <a href="#">Menu</a>
            <ul class="dl-submenu">
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </ul>
</div><!-- /dl-menuwrapper - ->

	<header class="app-bar promote-layer">
      <div class="app-bar-container">
        <button class="menu"><img src="images/hamburger.svg" alt="Menu"></button>
        <div class="logo col-xs-12 col-sm-6 cell">
        
        	<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/camilla.png" style="height:64px;" alt="Camilla" /></a>
        
        </div>
        <section class="app-bar-actions">
        	<button class="menu-toggle"><i class="fa fa-bars"></i><?php //_e( 'Primary Menu', 'camilla' ); ?></button>
        </section>
      </div>
    </header>-->

    <header id="masthead" class="site-header" role="banner">
    
    <div class="container">
    
    	<div class="logo col-xs-12 col-sm-4 col-md-5 cell">
        
        	<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/camilla-logo.png" class="logo" style="height:58px; padding:6px;" alt="logo" />
<!-- <img src="<?php echo get_template_directory_uri(); ?>/images/camilla-logo.png" style="height:64px;" alt="Camilla" /></a> -->
            
            <!--<div style="position:absolute; top:60px; left:-5px; z-index:2000000" class="hidden-xs"><img src="<?php echo get_template_directory_uri(); ?>/images/ellipse.png" /></div>-->
        
        </div>
        
        <div class="hidden-xs col-sm-8 col-md-7 cell">

            <nav id="site-navigation" class="main-navigation" role="navigation">
                <button class="menu-toggle"><i class="fa fa-bars"></i><?php //_e( 'Primary Menu', 'camilla' ); ?></button>
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                
                

            </nav>
            
            <div class="hidden-sm hidden-md">
        <ul class="social sorange">
                    <li><a href="https://www.facebook.com/CamillaSacreDallerup" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/CamillaDallerup" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="http://instagram.com/camilladallerup" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UC8DsIwCtFG9IgrZpmBEuB7A" target="_blank"><i class="fa fa-youtube"></i></a></li>
                </ul>
                </div>
        </div>
        
        
    </div>
    
    <nav class="navdrawer hidden-sm hidden-md hidden-lg">

      <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    
    </nav>
        
    </header>
        
        <div id="carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <!--<ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
        <li data-target="#carousel" data-slide-to="3"></li>
        <li data-target="#carousel" data-slide-to="4"></li>
        <li data-target="#carousel" data-slide-to="5"></li>
        </ol>-->
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
        
        <?php  /*
		 $the_query = new WP_Query(array(
		  'category_name' => 'Home Slider', 
		  'posts_per_page' => 5
		  )); 
		 while ( $the_query->have_posts() ) : 
		 $the_query->the_post();
		?>
        
        <div class="item active" style=" height:600px;">
        <?php the_post_thumbnail('full');?>
        <div style="margin:0 auto; width:1100px;">
          </div>
          <div class="carousel-caption">
            <h1><?php the_title();?></h1>
            
            <p><?php the_excerpt();?></p>
          </div>
        </div>
        
                
          <?php 
		   endwhile; 
		   wp_reset_postdata();
		  ?>
          
                  <?php 
		 $the_query = new WP_Query(array(
		  'category_name' => 'Home Slider', 
		  'posts_per_page' => 5, 
		  'offset' => 2 
		  )); 
		 while ( $the_query->have_posts() ) : 
		 $the_query->the_post();
		?>
        
        <div class="item" style=" height:600px;">
        <?php the_post_thumbnail('full');?>
        <div style="margin:0 auto; width:1100px;">
          </div>
          <div class="carousel-caption">
            <h1><?php the_title();?></h1>
            
            <p><?php the_excerpt();?></p>
          </div>
        </div>
        
                <?php 
		 $the_query = new WP_Query(array(
		  'category_name' => 'Home Slider', 
		  'posts_per_page' => 5, 
		  'offset' => 3 
		  )); 
		 while ( $the_query->have_posts() ) : 
		 $the_query->the_post();
		?>
                
          <?php 
		   endwhile; 
		   wp_reset_postdata();
		  ?>
        
        <div class="item" style=" height:600px;">
        <?php the_post_thumbnail('full');?>
        <div style="margin:0 auto; width:1100px;">
          </div>
          <div class="carousel-caption">
            <h1><?php the_title();?></h1>
            
            <p><?php the_excerpt();?></p>
          </div>
        </div>
                <?php 
		 $the_query = new WP_Query(array(
		  'category_name' => 'Home Slider', 
		  'posts_per_page' => 5, 
		  'offset' => 4 
		  )); 
		 while ( $the_query->have_posts() ) : 
		 $the_query->the_post();
		?>
                
          <?php 
		   endwhile; 
		   wp_reset_postdata();
		  ?>
        
        <div class="item" style=" height:600px;">
        <?php the_post_thumbnail('full');?>
        <div style="margin:0 auto; width:1100px;">
          </div>
          <div class="carousel-caption">
            <h1><?php the_title();?></h1>
            
            <p><?php the_excerpt();?></p>
          </div>
        </div>
        
                
          <?php 
		   endwhile; 
		   wp_reset_postdata();
		  ?>
                  <?php 
		 $the_query = new WP_Query(array(
		  'category_name' => 'Home Slider', 
		  'posts_per_page' => 5, 
		  'offset' => 5 
		  )); 
		 while ( $the_query->have_posts() ) : 
		 $the_query->the_post();
		?>
        
        <div class="item" style=" height:600px;">
        <?php the_post_thumbnail('full');?>
        <div style="margin:0 auto; width:1100px;">
          </div>
          <div class="carousel-caption">
            <h1><?php the_title();?></h1>
            
            <p><?php the_excerpt();?></p>
          </div>
        </div>
        
          <?php 
		   endwhile; 
		   wp_reset_postdata();*/
		  ?>
          
          <?php
$counter = 0;
// The Query
query_posts( 'cat=14&orderby=rand' );


// The Loop
while ( have_posts() ) : the_post(); ?>
           
            <div class="item <?php if( $counter == 0 ): ?>active<?php endif; ?>" style="background:url('<?php
$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
echo $feat_image;
?>'); background-position:center; background-size:cover; height:600px;">
						<?php 
            /*if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                the_post_thumbnail();
            } */
            ?>
            
            
            <div class="container">
            	
                <div class="col-sm-6">
                
                <?php
$thecontent = get_the_content();
if(!empty($thecontent)) { ?>
                
                	<div class="slider-content" style="">
				
					<h1><?php the_title(); ?></h1>
                    
                    <p><?php the_content(); ?></p>
                    
                    
                    
                    </div>
                    <?php } ?>
                </div>
                
                <div class="hidden-xs col-sm-6"></div>

            </div>
            
            
          </div>
            
            <?php $counter++; ?>
       <?php
endwhile;

// Reset Query
wp_reset_query();
?>
          
          <?php 
			// the query
			/*query_posts('cat=14');
			$the_query = new WP_Query( $args ); ?>
			
			<?php if ( $the_query->have_posts() ) : ?>
			
				<!-- pagination here -->
			
				<!-- the loop -->
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					
                    <div class="item <?php if( $the_query->current_post == 0 ): ?>active<?php endif; ?>">
						<?php 
            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                the_post_thumbnail();
            } 
            ?>
            <div class="carousel-caption"><?php the_title(); ?></div>
          </div>
				<?php endwhile;  ?>
				<!-- end of the loop -->
			
				<!-- pagination here -->
			
				<?php wp_reset_postdata(); */?>
			
			<?php /*else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif;* / ?>
            
		  	<?php query_posts('cat=14'); ?>
			<?php //if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               <?php //the_content(); ?>
            
		  <?php //if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        
          <div class="item <?php if( $the_query->current_post == 0 ): ?>active<?php endif; ?>">
						<?php 
            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                the_post_thumbnail();
            } 
            ?>
            <div class="carousel-caption"><?php the_title(); ?></div>
          </div>
        
          <?php //endwhile; endif; ?>
                <?php endwhile; endif; */ ?>
        </div>
        
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left slider-button"></i>
        </a>
        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right slider-button"></i>
        </a>
        </div>
        
	

	<div id="content" class="content">
    
