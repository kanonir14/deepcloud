<?php
/**
 * deepcloud functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package deepcloud
 */

if ( ! function_exists( 'deepcloud_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function deepcloud_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on deepcloud, use a find and replace
	 * to change 'deepcloud' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'deepcloud', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'deepcloud' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'deepcloud_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'deepcloud_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function deepcloud_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'deepcloud_content_width', 640 );
}
add_action( 'after_setup_theme', 'deepcloud_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function deepcloud_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar-top', 'deepcloud' ),
		'id'            => 'sidebar-top',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s sidebar__block">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="block__head-title">',
		'after_title'   => '</div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar-bottom', 'deepcloud' ),
		'id'            => 'sidebar-bottom',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s sidebar__block">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="block__head-title">',
		'after_title'   => '</div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Search', 'deepcloud' ),
		'id'            => 'search',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s sidebar__block">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="block__head-title">',
		'after_title'   => '</div>',
	) );
}
add_action( 'widgets_init', 'deepcloud_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function deepcloud_scripts() {
	wp_enqueue_style( 'deepcloud-style', get_stylesheet_uri() );

	wp_enqueue_script( 'deepcloud-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'deepcloud-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'deepcloud_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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

// NAVIGATION
function wp_corenavi() {
  global $wp_query;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $a['total'] = $max;
  $a['current'] = $current;

  $total = 1; //1 - выводить текст "Страница N из N", 0 - не выводить
  $a['mid_size'] = 7; //сколько ссылок показывать слева и справа от текущей
  $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
  $a['prev_text'] = '«'; //текст ссылки "Предыдущая страница"
  $a['next_text'] = '»'; //текст ссылки "Следующая страница"

  if ($max > 1) echo '<div class="navigation">';
  if ($total == 1 && $max > 1) $pages = '<span class="pages"> </span>'."\r\n";
  echo $pages . paginate_links($a);
  if ($max > 1) echo '</div>';
}

/* 
 * Данные о количестве запросов к базе данных в подвале админки
 */
function wp_usage(){
	printf( ('SQL: %d за %s сек. '), get_num_queries(), timer_stop(0, 3) );
	if ( function_exists('memory_get_usage') ) echo round( memory_get_usage()/1024/1024, 2 ) . ' mb ';
}
add_filter('admin_footer_text', 'wp_usage');


// DISQUS
function disqus_count($disqus_shortname) {
    wp_enqueue_script('disqus_count', 'http://'.$disqus_shortname.'.disqus.com/count.js');
    echo '<a href="'. get_permalink() .'#disqus_thread"></a>';
}