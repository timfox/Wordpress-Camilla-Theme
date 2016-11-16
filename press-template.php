<?php
/*
Template Name: Press Template
*/

get_header(); ?>

<div class="desktop-padding">

<h1 class="about-head"><?php the_title( '', '' ); ?></h1>

<div class="container-fluid">

    <div class="col-xs-12">
    
    <!--<div id="template-carousel" class="carousel slide" data-ride="template-carousel">
        <!-- Indicators - ->
        <!--<ol class="carousel-indicators">
        <li data-target="#template-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#template-carousel" data-slide-to="1"></li>
        <li data-target="#template-carousel" data-slide-to="2"></li>
        <li data-target="#template-carousel" data-slide-to="3"></li>
        <li data-target="#template-carousel" data-slide-to="4"></li>
        <li data-target="#template-carousel" data-slide-to="5"></li>
        </ol>- ->
        
        <!-- Wrapper for slides - ->
        <div class="carousel-inner">
        <div class="item active press" style="">
        <img src="<?php echo get_template_directory_uri(); ?>/images/media.png" />
        <div style="margin:0 auto;">
          </div>
          <div class="carousel-caption">
            
          </div>
        </div>
        <div class="item press supershow" style="">
        <img src="http://placehold.it/400x550" />
        <div style="margin:0 auto;">
          </div>
          <div class="carousel-caption">
            
          </div>
        </div>
        <div class="item press supershow" style="">
        <img src="http://placehold.it/400x550" />
        <div style="margin:0 auto;">
          </div>
          <div class="carousel-caption">
            
          </div>
        </div>
        
         <div class="item press supershow" style="">
         <img src="http://placehold.it/400x550" />
        <div style="margin:0 auto;">
          </div>
          <div class="carousel-caption">
            
          </div>
        </div>
        
        
         <div class="item press  supershow" style="">
         <img src="http://placehold.it/400x550" />
        <div style="margin:0 auto;">
          </div>
          <div class="carousel-caption">
            
          </div>
        </div>
        
        
         <div class="item press  supershow" style="">
         <img src="http://placehold.it/400x550" />
        <div style="margin:0 auto;">
          </div>
          <div class="carousel-caption">
            
          </div>
        </div>
        
        
        
        
        </div>
    </div>        
        <!-- Controls - ->
        <a class="left carousel-control" href="#template-carousel" role="button" data-slide="prev">
        <div class="orange-circle"><i class="fa fa-angle-left orange-slider-button"></i></div>
        </a>
        <a class="right carousel-control" href="#template-carousel" role="button" data-slide="next">
        <div class="orange-circle"><i class="fa fa-angle-right orange-slider-button"></i></div>
        </a>
        </div>
        
        -->
<script type="text/javascript">
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
	   var bg = document.getElementById('magbg');
       if(e.style.display == 'block' && bg.style.display == 'block') {
			e.style.display = 'none';
			bg.style.display = 'none';
			$(document).unbind('scroll'); 
			$('body').css({'overflow':'visible'});
	   }else{
			e.style.display = 'block';
			bg.style.display = 'block';
			$('body').css({'overflow':'hidden'});
			$(document).bind('scroll',function () { 
			   window.scrollTo(0,0); 
			});
		  }
    }
//-->
</script>


                <div id="magbg" class="lightboxclose"></div>
        
<section id="press">
<ul>
<?php
$counter = 0;
// The Query
query_posts( 'cat=3' );

// The Loop
while ( have_posts() ) : the_post(); ?>


<li class="press-item">
            <?php /*<a href="#img<?php echo $counter; ?>">
              <?php 
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail();
                } 
                ?>
            </a>
            
       </li>
       <a href="#_" class="lightbox press-popup" id="img<?php echo $counter; ?>">

			  <?php 
                /*if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail();
                } * /
				
				echo the_content();
                ?>
                
                <div>class="lightbox press-popup"
                <?php //echo the_content(); ?>
                </div>
            </a>
            
            <?php $counter++;  */ ?>
            
            <?php 
                /*if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail();
                } */
                ?>

            
            <?php ?>
            
            <a onclick="toggle_visibility('mag<?php echo $counter; ?>');">
            <!--<a href="<?php echo get_permalink(); ?>">-->
            	<?php 
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail();
                } 
                ?>
            </a>
            
            
            	<!--<div style="overflow:scroll-y; height:600px; width:500px;"><a href="#_" id="img<?php echo $counter; ?>" class="lightbox press-popup">
				<?php //echo the_content(); ?>
                </div>-->
                
                            	<?php 
                /*if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail();
                } */
                ?>
                
                <?php if($post->post_content=="") : ?>
                
                <?php else: ?>
                                
                <div id="mag<?php echo $counter; ?>" class="lightbox2">
                <!--<a onclick="toggle_visibility('mag<?php echo $counter; ?>');">--><!--</a>
                <!--<a onclick="toggle_visibility('mag<?php echo $counter; ?>');"><div id="magbg" class="lightboxcover"></div></a>-->
                <div class="lightboxbtn">
                <a onclick="toggle_visibility('mag<?php echo $counter; ?>');" style="z-index:2000; cursor:pointer; font-size:32px!important;"><i class="fa fa-close" style="color:#000; margin-top:8px;"></i></a>
                </div>
                <a onclick="toggle_visibility('mag<?php echo $counter; ?>');">
                <div class="supercontent">
                	<?php echo the_content(); ?>
                </div>
                </a>
                
                
                
                </div>
                <?php endif; ?>
				
            </a><!--</div>-->
            
            </li>
            
            
            <?php  $counter++;  ?>
       <?php
endwhile;

// Reset Query
wp_reset_query();
?>
</ul>


<?php 
			/*$counter = 0;
			
			// the query
			//query_posts('cat=3');
			$the_query = new WP_Query( query_posts('cat=3') ); ?>
			
		<?php //if ( $the_query->have_posts() ) : ? > ?>
        
            <!-- pagination here -->
        
            <!-- the loop -->
            <?php  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			
        <ul>
        <li>
            <a href="#img<?php echo $counter; ?>">
              <?php 
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail();
                } 
                ?>
            </a>
            <a href="#_" class="lightbox" id="img<?php echo $counter; ?>">
              <?php 
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail();
                } 
                ?>
            </a>
       </li>
       </ul>
       
       <?php $counter++; ?>
       
       <?php endwhile; */ ?>
				<!-- end of the loop -->
			
				<!-- pagination here -->
			
				<?php //wp_reset_postdata();  ?>
       
    <!--<ul>
        <li>
            <a href="#img1">
              <img src="<?php echo get_template_directory_uri(); ?>/images/media.png" />
            </a>
            <a href="#_" class="lightbox" id="img1">
              <img src="<?php echo get_template_directory_uri(); ?>/images/media.png" />
            </a>
        </li>
        <li>
            <a href="#img2">
              <img src="http://placehold.it/400x550" />
            </a>
            <a href="#_" class="lightbox" id="img2">
              <img src="http://placehold.it/400x550" />
            </a>
        </li>
        <li>
            <a href="#img3">
              <img src="http://placehold.it/400x550" />
            </a>
            <a href="#_" class="lightbox" id="img3">
              <img src="http://placehold.it/400x550" />
            </a>
        </li>
        <li>
            <a href="#img4">
              <img src="http://placehold.it/400x550" />
            </a>
            <a href="#_" class="lightbox" id="img4">
              <img src="http://placehold.it/400x550" />
            </a>
        </li>
        <li>
            <a href="#img5">
              <img src="http://placehold.it/400x550" />
            </a>
            <a href="#_" class="lightbox" id="img5">
              <img src="http://placehold.it/400x550" />
            </a>
        </li>
        <li>
            <a href="#img6">
              <img src="http://placehold.it/400x550" />
            </a>
            <a href="#_" class="lightbox" id="img6">
              <img src="http://placehold.it/400x550" />
            </a>
        </li>
        <li>
            <a href="#img7">
              <img src="http://placehold.it/400x550" />
            </a>
            <a href="#_" class="lightbox" id="img7">
              <img src="http://placehold.it/400x550" />
            </a>
        </li>
    </ul>-->
</section>
    
    <div class="clear"></div>

</div>

</div>

</div>

<script type="text/javascript">
/*$('#template-carousel .press').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  for (var i=0;i<2;i++) {
    next=next.next();
    if (!next.length) {
    	next = $(this).siblings(':first');
  	}
    
    next.children(':first-child').clone().appendTo($(this));
  }
});*/
</script>

<script type="text/javascript">
	new Dragdealer('press');
</script>

<?php get_footer(); ?>
