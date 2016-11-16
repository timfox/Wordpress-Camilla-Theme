<?php
/*
Template Name: Page Template
*/

get_header(); ?>

<div class="desktop-padding">

<div class="container">

    <div class="col-xs-12 col-sm-12">

<h1 class="about-head"><?php the_title( '', '' ); ?></h1>

</div>

</div>

<div class="container">

    <div class="col-xs-12 col-sm-9">
    	    
    	<?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', 'page' ); ?>
		<?php endwhile; // end of the loop. ?>
        
        <?php /*<section class="contact-box">
        
        <div class="row">
        
        	<div class="col-xs-12 col-sm-4" style="text-align:center;">
        		             
                    <h2>Contact Us Today to Schedule a Session</h2>
                    
                    <br/>
                    
                    <form>
                        
                            <input name="name" type="text" class="mail-input" placeholder="Name" />
                            
                            <br/>
                            
                            <input name="email" type="email" class="mail-input" placeholder="Email" />
                            
                            <br/>
                            
                            <button class="submit green-button" name="submit" type="submit">Learn More!</button>
                            
                    </form>
                
                               
            </div>
            
            <div class="col-xs-12 col-sm-8">
            
            	Book your session today!
<br/><br/>
                Please email me <a href="mailto:speaking@camillasacredallerup.com">speaking@camillasacredallerup.com</a> for further details.
<br/>       <br/>         
                Paypal is accepted.
  <br/>   <br/>           
                All sessions are 100% confidential.
    <br/><br/>            
                If you are under 18 parental permission is needed for any bookings.
            	
                <?php 
				/*if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					echo the_post_thumbnail();
				}* /
				?>
            
            </div> 
        
               
        </div>
        
        </section>*/ ?>
    
    </div>
    
    <div class="hidden-xs col-sm-3">
    	
        <?php get_sidebar(); ?>
        
    </div>

</div>

</div>

<?php get_footer(); ?>