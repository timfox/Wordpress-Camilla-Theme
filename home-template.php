<?php
/*
Template Name: Home Template
*/

get_header(); ?>

<div class="desktop-padding">

<!--<h1 class="about-head"><?php the_title( '', '' ); ?></h1>-->

<div class="row">

    <div class="col-xs-12">
    
        <div class="row">
        
        	<div class="col-xs-12 col-sm-4 mobile-circles">
            
            <div class="circle">
                <p><img src="<?php echo get_template_directory_uri(); ?>/images/about.png" /></p>
            </div>
            
            	<div class="col-grey">
                
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Homepage Column 1')) : ?>
                
                <?php endif; ?>
                
                <div  style="text-align:center;">
                <a href="<?php echo get_site_url(); ?>/about"><button class="submit learn-more-blue" name="submit" type="submit">Learn More!</button>
</a>          </div>
                
                </div>
                
                
            
            </div>
        
        	<div class="col-xs-12 col-sm-4 mobile-circles">
            
            <div class="circle">
                <p><img src="<?php echo get_template_directory_uri(); ?>/images/speaking.png" /></p>
            </div>
            
            	<div class="col-grey">
                
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Homepage Column 2')) : ?>
                
                <?php endif; ?>
                
                <div  style="text-align:center;">
                <a href="<?php echo get_site_url(); ?>/coaching#speaking"><button class="submit learn-more-blue" name="submit" type="submit">Learn More!</button>
</a>              </div>

                </div>
            
            </div>
        
        	<div class="col-xs-12 col-sm-4 mobile-circles">
            
            <div class="circle">
                <p><img src="<?php echo get_template_directory_uri(); ?>/images/coaching.png" /></p>
            </div>
            
            	<div class="col-grey">
                
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Homepage Column 3')) : ?>
                
                <?php endif; ?>
                
                <div  style="text-align:center;">
                <a href="<?php echo get_site_url(); ?>/coaching"><button class="submit learn-more-blue" name="submit" type="submit">Learn More!</button>
</a>          </div>
                
                </div>
            
            </div>
        
        </div>
    
    </div>

</div>

</div>

<?php get_footer(); ?>