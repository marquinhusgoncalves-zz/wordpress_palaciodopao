<?php 

function palaciodopao_resources() {
	wp_enqueue_style( 'style', get_stylesheet_uri());
	wp_enqueue_style( 'icons', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_script( 'custom-script' );
	wp_enqueue_script( 'samplejs', get_template_directory_uri() . '/js/clean-blog.min.js', array( '' ) );
	wp_enqueue_script( 'pp-functions', get_template_directory_uri() . '/js/functions.min.js', array('jquery') );
	wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/js/smooth-scroll.js', array( 'jquery' ), '',  true );
	wp_enqueue_script( 'sticky', get_template_directory_uri() . '/js/sticky.js', array( 'jquery' ), '',  true );
  wp_enqueue_script( 'menulateral', get_template_directory_uri() . '/js/menulateral.js', array( 'jquery' ), '',  true );
	wp_enqueue_script( 'mapsgoogle', get_template_directory_uri() . '/js/mapsgoogle.js', array( '' ) );
  wp_enqueue_script( 'panzoom', get_template_directory_uri() . '/js/panzoom.js', array( 'jquery' ), '',  true );
  wp_enqueue_script( 'pointertouch', get_template_directory_uri() . '/js/pointertouch.js', array( 'jquery' ), '',  true );
}
add_action('wp_enqueue_scripts', 'palaciodopao_resources');


// THEME SETUP

// Navigation Menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu' ),
	'footer' => __( 'Footer Menu' ),
  'extra-menu' => __( 'Extra Menu'  )
));


add_filter('show_admin_bar', '__return_false');

// Add post format support
add_theme_support('post-formats' , array('aside', 'gallery', 'link'));


// A. somente nos posts
add_theme_support('post-thumbnails', array('post'));

// Changing excerpt length
  function new_excerpt_length($length) {
  return 15;
  }
  add_filter('excerpt_length', 'new_excerpt_length');
   
  // Changing excerpt more
  function new_excerpt_more($more) {
  return '...';
  }
  add_filter('excerpt_more', 'new_excerpt_more');

// Changing title length
  function new_title_length($length) {
  return 4;
  }
  add_filter('title_length', 'new_title_length');
   
  // Changing title more
  function new_title_more($more) {
  return '...';
  }
  add_filter('title_more', 'new_title_more');
  
  
  // Catch the second image
  function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches[1][0];
  
    if(empty($first_img)) {
      $first_img = "/path/to/default.png";
    }
    return $first_img;
  }
  
  
  /**
   * Register widgetized area and update sidebar with default widgets.
   */
  function pp_widgets_init() {
    	register_sidebar( array(
    		'name'          => __( 'Sidebar', 'pp' ),
    		'id'            => 'sidebar-1',
    		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</aside>',
    		'before_title'  => '<h3 class="widget-title">',
    		'after_title'   => '</h3>',
    	) );
  
      register_sidebar(array(
      	'id' => 'home-widget-1',
      	'name' => __( 'Homepage Widget 1', 'pp' ),
      	'description' => __( 'Displays on the Home Page', 'pp' ),
      	'before_widget' => '<div id="%1$s" class="widget %2$s">',
      	'after_widget' => '</div>',
      	'before_title' => '<h3 class="widgettitle">',
      	'after_title' => '</h3>',
      ));
  
      register_sidebar(array(
        'id' => 'home-widget-2',
        'name' =>  __( 'Homepage Widget 2', 'pp' ),
        'description' => __( 'Displays on the Home Page', 'pp' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
      ));
  
      register_sidebar(array(
        'id' => 'home-widget-3',
        'name' =>  __( 'Homepage Widget 3', 'pp' ),
        'description' =>  __( 'Displays on the Home Page', 'pp' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
      ));
  
      register_sidebar(array(
      	'id' => 'footer-widget-1',
      	'name' =>  __( 'Footer Widget 1', 'pp' ),
      	'description' =>  __( 'Used for footer widget area', 'pp' ),
      	'before_widget' => '<div id="%1$s" class="widget %2$s">',
      	'after_widget' => '</div>',
      	'before_title' => '<h3 class="widgettitle">',
      	'after_title' => '</h3>',
      ));
  
      register_sidebar(array(
        'id' => 'footer-widget-2',
        'name' =>  __( 'Footer Widget 2', 'pp' ),
        'description' =>  __( 'Used for footer widget area', 'pp' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
      ));
  
      register_sidebar(array(
        'id' => 'footer-widget-3',
        'name' =>  __( 'Footer Widget 3', 'pp' ),
        'description' =>  __( 'Used for footer widget area', 'pp' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
      ));
  
      register_widget( 'pp_social_widget' );
      register_widget( 'pp_popular_posts' );
      register_widget( 'pp_categories' );
  
  }
  add_action( 'widgets_init', 'pp_widgets_init' );
  
  
  /* --------------------------------------------------------------
         Theme Widgets
  -------------------------------------------------------------- */
  require_once(get_template_directory() . '/widgets/widget-categories.php');
  require_once(get_template_directory() . '/widgets/widget-social.php');
  require_once(get_template_directory() . '/widgets/widget-popular-posts.php');
  
   