<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Camilla
 */
?>

	</div>
    
    <div class="clear"></div>
    
    <section id="mailinglist" class="mailinglist" role="form">
    	
        <div class="container" style="position:relative;">
        
        <div class="hidden-xs" style="position:absolute; bottom:-1em; z-index:10; left:-6em;">
        <img src="<?php echo get_template_directory_uri(); ?>/images/camilla1.png" style="height:400px;" />
		</div>
                
        <div class="col-xs-12 col-sm-12 col-md-12 mailinglist-inner">
        
            <div class="col-xs-12 col-sm-6 mailinglist-box">
            	<h2 style="font-size:24px;">Sign Up<br/> For Happy Thoughts</h2>
        	
            	<p style="font-size:16px; margin-left:3em; margin-right:3em;">Having spend a life in sports, I know how important it is to stay motivated even at the toughest of times, therefor I love sharing my motivational thought and ideas with you. I have created this space so that I can share any helpful tools and thoughts with you, for free, right to your inbox. I look forward to connecting with you.</p>

                
                <!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div>
<form action="//camillasacredallerup.us9.list-manage.com/subscribe/post?u=5829d35d8e08d04359ecd7561&amp;id=4e852d8f79" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
<div class="mc-field-group">
	<input type="text" value="" name="FNAME" class="" style="margin:5px;" placeholder="Name">
</div>
<div class="mc-field-group">
	<input type="email" value="" name="EMAIL" class="required email" style="margin:5px;" placeholder="Email">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_5829d35d8e08d04359ecd7561_4e852d8f79" tabindex="-1" value=""></div>
    <input type="submit" class="submit" value="Sign Up!" name="subscribe" class="button">
    </div>
</form>
</div>

<!--End mc_embed_signup-->
            </div>
            
            <div class="hidden-xs col-sm-6">
            	<iframe width="640" height="360" src="//www.youtube.com/embed/DtpU91gwiCY" frameborder="0" allowfullscreen></iframe>
            </div>
            
        
            
        
        <div class="clear"></div>
        
        </div>
        
        <div class="hidden-xs hidden-sm col-md-2"></div>
        
        </div>
        
    </section>

	<footer id="footer" class="footer" role="contentinfo">
    
        <div class="container">
            
            <nav id="footer-navigation" class="footer-navigation" role="navigation">
                <?php wp_nav_menu(); ?>
            </nav>
            
            
            <div style="text-align:center; padding:1em;">
            	<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/camilla-logo-white.png" alt="White Logo" /></a>
                
                <hr style="background:none; border-bottom:2px solid #fff; width:182px;" />
            </div>
            
            <div style="text-align:center;">
            <ul class="social">
            <li><a href="https://www.facebook.com/CamillaSacreDallerup" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/CamillaDallerup" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="http://instagram.com/camilladallerup" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UC8DsIwCtFG9IgrZpmBEuB7A" target="_blank"><i class="fa fa-youtube"></i></a></li>
   			</ul>
        
        
        </div>
	</footer>
    
    
        <div class="copyright">&copy <?php echo date('Y'); ?> Camilla Sacre-Dallerup All rights reserved. Designed by <a href="http://thecreative.company" target="_blank">The Company Creative</a>  |  <a href="./terms-conditions" target="_blank">Terms & Conditions</a></div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/dragdealer.js"></script>

<script type="text/javascript">
jQuery(document).ready(function($) {
    $('.carousel').carousel({
  		interval: 10000	
  	})
	
});
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-36674931-5', 'auto');
  ga('send', 'pageview');

</script>

<?php wp_footer(); ?>

</body>
</html>
