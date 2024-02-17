<?php


if (!function_exists('cptheme')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function cptheme()
    {
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
    }
endif;
add_action('after_setup_theme', 'cptheme');


function cp_scripts()
{
    wp_enqueue_style('span-font-css', '//use.typekit.net/nrv5rxa.css');

    wp_register_script('jQuery', '//code.jquery.com/jquery-3.5.1.min.js', null, null, true);
    wp_enqueue_script('jQuery');

    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

    wp_enqueue_style('slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

    wp_enqueue_style('slick-theme-css', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css');

    wp_enqueue_style('bestmind-styleheet', get_stylesheet_uri(), array(), rand(111, 9999));

    wp_register_script('slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', null, null, true);
    wp_enqueue_script('slick-js');

    wp_enqueue_script('bestmind-script', get_template_directory_uri() . '/scripts/main.js', array(), filemtime(get_template_directory() . '/scripts/main.js'), true);
}
add_action('wp_enqueue_scripts', 'cp_scripts');


/* MENUS */
function register_menus()
{
    register_nav_menus(
        array(
            'primary-nav' => __('Primary Nav'),
            'business-nav' => __('Business Nav'),
            'personal-nav' => __('Personal Nav'),
            'footer-nav-1' => __('Footer Nav Main'),
            'footer-nav-2' => __('Footer Nav Side')
        )
    );
}
add_action('init', 'register_menus');


/* THEME FEATURES */
add_theme_support('title-tag');
add_theme_support('post-thumbnails');


/* DISABLE GUTENBERG */
add_filter('use_block_editor_for_post', '__return_false', 10);


/* PAGE TEXTAREA REMOVAL */
function remove_textarea()
{
    remove_post_type_support('page', 'editor');
    remove_post_type_support( 'services', 'editor' ); 
    remove_post_type_support( 'team-members', 'editor' ); 
    remove_post_type_support( 'locations', 'editor' ); 
}
add_action('admin_init', 'remove_textarea');


/* EXCERPT LENGTH */
add_filter( 'excerpt_length', function($length) {
    return 20;
}, PHP_INT_MAX );


/* WIDGETS */
function blog_widgets_init()
{
    register_sidebar(array(
        'name'          => 'Blog Sidebar',
        'id'            => 'blog-sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="heading">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'blog_widgets_init');


/* ADMIN FOOTER MODIFICATION */
function remove_footer_admin () 
{
    echo '<span id="footer-thankyou">Developed by <a href="http://www.cardinaldigitalmarketing.com" target="_blank">Cardinal Digital Marketing</a></span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');



/* CUSTOM POST TYPES */
function custom_post_types() {
 
    register_post_type( 'services',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'Service' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-clipboard',
            'supports' => array( 'title', 'thumbnail', 'excerpt' )

        )
    );

    register_post_type( 'team-members',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Team Members' ),
                'singular_name' => __( 'Team Member' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => '/who-we-serve/leadership-team'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-businessperson',
            'supports' => array( 'title', 'thumbnail', 'excerpt' )

        )
    );

    register_post_type( 'locations',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Locations' ),
                'singular_name' => __( 'Location' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'locations'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-location',
            'supports' => array( 'title', 'thumbnail', 'excerpt' )

        )
    );
}
add_action( 'init', 'custom_post_types' );



/* TEAM MEMBERS TEAM TAXONOMY */
add_action( 'init', 'team_member_team_taxonomy', 0 );
 
function team_member_team_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Teams', 'taxonomy general name' ),
    'singular_name' => _x( 'Team', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Teams' ),
    'all_items' => __( 'All Teams' ),
    'parent_item' => __( 'Parent Team' ),
    'parent_item_colon' => __( 'Parent Team:' ),
    'edit_item' => __( 'Edit Team' ), 
    'update_item' => __( 'Update Team' ),
    'add_new_item' => __( 'Add New Team' ),
    'new_item_name' => __( 'New Team Name' ),
    'menu_name' => __( 'Assign Teams' ),
  ); 	
 
  register_taxonomy('teams',array('team-members'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'team' ),
  ));
}




/* Display a custom taxonomy dropdown in admin */
add_action('restrict_manage_posts', 'teams_taxonomy_filter');
function teams_taxonomy_filter() {
	global $typenow;
	$post_type = 'team-members'; // change to your post type
	$taxonomy  = 'teams'; // change to your taxonomy
	if ($typenow == $post_type) {
		$selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
		$info_taxonomy = get_taxonomy($taxonomy);
		wp_dropdown_categories(array(
			'show_option_all' => sprintf( __( 'Show all %s', 'textdomain' ), $info_taxonomy->label ),
			'taxonomy'        => $taxonomy,
			'name'            => $taxonomy,
			'orderby'         => 'name',
			'selected'        => $selected,
			'show_count'      => true,
			'hide_empty'      => true,
		));
	};
}
/* Filter posts by taxonomy in admin */
add_filter('parse_query', 'teams_convert_id_to_term_in_query');
function teams_convert_id_to_term_in_query($query) {
	global $pagenow;
	$post_type = 'team-members'; // change to your post type
	$taxonomy  = 'teams'; // change to your taxonomy
	$q_vars    = &$query->query_vars;
	if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
		$term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
		$q_vars[$taxonomy] = $term->slug;
	}
}




/* SERVICE TYPE TAXONOMY */
add_action( 'init', 'service_type_taxonomy', 0 );
 
function service_type_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Service Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Service Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Service Types' ),
    'all_items' => __( 'All Service Types' ),
    'parent_item' => __( 'Parent Service Type' ),
    'parent_item_colon' => __( 'Parent Service Type:' ),
    'edit_item' => __( 'Edit Service Type' ), 
    'update_item' => __( 'Update Service Type' ),
    'add_new_item' => __( 'Add New Service Type' ),
    'new_item_name' => __( 'New Service Type Name' ),
    'menu_name' => __( 'Assign Service Types' ),
  ); 	
 
  register_taxonomy('service-types',array('services'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'service-type' ),
  ));
}



/* DISPLAY A CUSTOM POST TAXONOMY DROPDOWN IN ADMIN */
add_action('restrict_manage_posts', 'service_types_taxonomy_filter');
function service_types_taxonomy_filter() {
	global $typenow;
	$post_type = 'services'; // change to your post type
	$taxonomy  = 'service-types'; // change to your taxonomy
	if ($typenow == $post_type) {
		$selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
		$info_taxonomy = get_taxonomy($taxonomy);
		wp_dropdown_categories(array(
			'show_option_all' => sprintf( __( 'Show all %s', 'textdomain' ), $info_taxonomy->label ),
			'taxonomy'        => $taxonomy,
			'name'            => $taxonomy,
			'orderby'         => 'name',
			'selected'        => $selected,
			'show_count'      => true,
			'hide_empty'      => true,
		));
	};
}
/* FILTER POSTS BY TAXONOMY IN ADMIN */
add_filter('parse_query', 'service_types_convert_id_to_term_in_query');
function service_types_convert_id_to_term_in_query($query) {
	global $pagenow;
	$post_type = 'services'; // change to your post type
	$taxonomy  = 'service-types'; // change to your taxonomy
	$q_vars    = &$query->query_vars;
	if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
		$term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
		$q_vars[$taxonomy] = $term->slug;
	}
}




/* THEMES OPTIONS */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Topbar Settings',
		'menu_title'	=> 'Topbar',
		'parent_slug'	=> 'theme-general-settings',
        'redirect'		=> false
	));
	
}

$my_excerpt = wp_strip_all_tags( get_the_excerpt(), true );



// remove jquery from ONLY the events page

add_action( 'wp_enqueue_scripts', 'my_deregister_javascript' );
function my_deregister_javascript() {
   if ( is_page('events') ) {
        wp_deregister_script( 'jquery' );
   }
}