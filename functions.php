<?php
/**
 * Camilla functions and definitions
 *
 * @package Camilla
 */

update_option('siteurl', 'http://thecreative.company/camilla' );
update_option('home', 'http://thecreative.company/camilla' );

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'camilla_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function camilla_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Camilla, use a find and replace
	 * to change 'camilla' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'camilla', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'camilla' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'camilla_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // camilla_setup
add_action( 'after_setup_theme', 'camilla_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function camilla_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'camilla' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1><div class="col-border"></div>',
	) );
}
add_action( 'widgets_init', 'camilla_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function camilla_scripts() {
	wp_enqueue_style( 'camilla-style', get_stylesheet_uri() );

	wp_enqueue_script( 'camilla-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'camilla-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'camilla_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/* Automatically make Twitter links */
function twtreplace($content) {
	$twtreplace = preg_replace('/([^a-zA-Z0-9-_&])@([0-9a-zA-Z_]+)/',"$1<a href=\"http://twitter.com/$2\" target=\"_blank\" rel=\"nofollow\">@$2</a>",$content);
	return $twtreplace;
}

add_filter('the_content', 'twtreplace');   
add_filter('comment_text', 'twtreplace');

/* Thumbnail Crop */
// Standard Size Thumbnail
if(false === get_option("thumbnail_crop")) {
     add_option("thumbnail_crop", "1"); }
     else {
          update_option("thumbnail_crop", "1");
     }

// Medium Size Thumbnail
if(false === get_option("medium_crop")) {
     add_option("medium_crop", "1"); }
     else {
          update_option("medium_crop", "1");
     }

// Large Size Thumbnail
if(false === get_option("large_crop")) {
     add_option("large_crop", "1"); }
     else {
          update_option("large_crop", "1");
      }

/* -------------------------------*/


/* Support Widget */

function timfox_dashboard_widgets(){
    wp_add_dashboard_widget('timfox_widget_id', 'The Creative Company', 'timfox_widget');
}
function timfox_widget() {
    echo '<p>Developed by Tim Fox</p>';
}

/* Footer Text */
function new_footer_admin () {
echo 'The Creative Company';
}
add_filter('admin_footer_text', 'new_footer_admin');

/* Hide Help */
function hide_help() {
    echo '<style type="text/css">
            #contextual-help-link-wrap { display: none !important; }
          </style>';
}
add_action('admin_head', 'hide_help');



/* -----------------------------------*/

/* Theme Options */


add_action('admin_menu', 'add_dashboard_menu');

function add_dashboard_menu(){
     add_dashboard_page( 'Theme Options', 'Theme Options', 'ondeweb-now', 'ondeweb_admin', theme_options()); 
}

function theme_options() {  
    require_once( get_template_directory() . '/inc/theme-options.php' );
}


/* ------------------------------------ */



/* Testimonials Widget */

// Creating the widget 
class testimonials_sidebar_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'testimonials_widget', 

// Widget name will appear in UI
__('Testimonials Widget', 'testimonials_widget_domain'), 

// Widget description
array( 'description' => __( 'Testimonial Sidebar Widget', 'testimonials_widget_domain' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$text = apply_filters( 'widget_text', $instance['text'] );
// before and after widget arguments are defined by themes



echo $args['before_widget'];

echo '<h2 class="widget-title">Testimonials</h2><div class="col-border"></div>';

if ( ! empty( $text ) )
echo $args['before_text']  . $text . $args['after_text'];

// This is where you run the code and display the output
echo __( 'Testimonials', 'testimonials_widget_domain' );

echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'text' ] ) ) {
$text = $instance[ 'text' ];
}
else {
$text = __( 'Testimonials', 'testimonials_widget_domain' );
}


// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'text' ); ?>"><?php _e( 'Text:' ); ?></label> 
<textarea class="widefat" id="<?php echo $this->get_field_id( 'text' ); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>"><?php echo esc_attr( $text ); ?></textarea>
</p>
<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['text'] = ( ! empty( $new_instance['text'] ) ) ? strip_tags( $new_instance['text'] ) : '';
return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function testimonials_load_widget() {
	register_widget( 'testimonials_sidebar_widget' );
}
add_action( 'widgets_init', 'testimonials_load_widget' );





/* Learn More Widget */

// Creating the widget 
class learn_more_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'learn_more_widget', 

// Widget name will appear in UI
__('Learn More Widget', 'learn_more_widget_domain'), 

// Widget description
array( 'description' => __( 'Learn More Sidebar Widget', 'learn_more_widget_domain' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$imgurl = apply_filters( 'widget_imgurl', $instance['imgurl'] );
$text = apply_filters( 'widget_text', $instance['text'] );
// before and after widget arguments are defined by themes
echo $args['before_widget'];
/*if ( ! empty( $imgurl ) )
echo $imgurl;*/
if ( ! empty( $text ) )
//echo $args['before_text'] . $text . $args['after_text'];

// This is where you run the code and display the output
//echo __( $text, 'learn_more_widget_domain' );


echo '<img style="width:100%;" src="'.__( $imgurl, 'learn_more_widget_domain' ).'" /><div class="clear"></div><div style="text-align:center;"><p style="margin:1em;">'.__( $text, 'learn_more_widget_domain' ).'</p><a href="http://www.amazon.com/gp/product/1780288662/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=1780288662&linkCode=as2&tag=utea0e-20&linkId=VE5WDXURRI3FWVQL" target="_blank"><button class="submit green-button" name="submit" type="submit" style="">Buy Now!</button></a></div>';

echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'imgurl' ] ) ) {
$imgurl = $instance[ 'imgurl' ];
}
else {
$imgurl = __( 'Learn More', 'learn_more_widget_domain' );
}

if ( isset( $instance[ 'text' ] ) ) {
$text = $instance[ 'text' ];

}
else {
$text = __( '', 'learn_more_widget_domain' );
}

// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'imgurl' ); ?>"><?php _e( 'Image URL:' ); ?></label> 
<textarea class="widefat" id="<?php echo $this->get_field_id( 'imgurl' ); ?>" name="<?php echo $this->get_field_name( 'imgurl' ); ?>"><?php echo esc_attr( $imgurl ); ?></textarea>

<label for="<?php echo $this->get_field_id( 'text' ); ?>"><?php _e( 'Text:' ); ?></label> 
<textarea class="widefat" id="<?php echo $this->get_field_id( 'text' ); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>"><?php echo esc_attr( $text ); ?></textarea>
</p>
<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['imgurl'] = ( ! empty( $new_instance['imgurl'] ) ) ? strip_tags( $new_instance['imgurl'] ) : '';
$instance['text'] = ( ! empty( $new_instance['text'] ) ) ? strip_tags( $new_instance['text'] ) : '';
return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function learn_more_load_widget() {
	register_widget( 'learn_more_widget' );
}
add_action( 'widgets_init', 'learn_more_load_widget' );


/* ------------------------------------------------------------------
---------------------------------------------------------------------
------------------------------------------------------------------ */

add_theme_support( 'post-thumbnails' );

////////////////////////////////////////////////////////////////
/// New Widget Areas

if (function_exists('register_sidebar')) {
		
	register_sidebar(array(
		'name'=> 'Homepage Column 1',
		'id' => 'col1',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3><div class="col-border"></div>',
	));
	
	register_sidebar(array(
		'name'=> 'Homepage Column 2',
		'id' => 'col2',
		'before_widget' => '',
		'after_widget' => '</li>',
		'before_title' => '<h3>',
		'after_title' => '</h3><div class="col-border"></div>',
	));
	
	register_sidebar(array(
		'name'=> 'Homepage Column 3',
		'id' => 'col3',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3><div class="col-border"></div>',
	));
}

/**
 * Remove the text - 'You may use these <abbr title="HyperText Markup
 * Language">HTML</abbr> tags ...'
 * from below the comment entry box.
 */

add_filter('comment_form_defaults', 'remove_comment_styling_prompt');

function remove_comment_styling_prompt($defaults) {
	$defaults['comment_notes_after'] = '';
	
	return $defaults;
}


