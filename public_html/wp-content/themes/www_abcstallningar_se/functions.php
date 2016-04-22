<?php

////////////////////////////////////////////////////////////////////
// Theme Information
////////////////////////////////////////////////////////////////////

    $themename = "DevDmBootstrap3";
    $developer_uri = "http://devdm.com";
    $shortname = "dm";
    $version = '1.29';
    load_theme_textdomain( 'devdmbootstrap3', get_template_directory() . '/languages' );

////////////////////////////////////////////////////////////////////
// include Theme-options.php for Admin Theme settings
////////////////////////////////////////////////////////////////////

   include 'theme-options.php';

////////////////////////////////////////////////////////////////////
// Enqueue Styles (normal style.css and bootstrap.css)
////////////////////////////////////////////////////////////////////
    function devdmbootstrap3_theme_stylesheets()
    {
        wp_register_style('bootstrap.css', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.3', 'all' );
        wp_enqueue_style( 'bootstrap.css');
        // wp_enqueue_style( 'stylesheet', get_stylesheet_uri(), array(), '1', 'all' );
    }
    add_action('wp_enqueue_scripts', 'devdmbootstrap3_theme_stylesheets');

//Editor Style
add_editor_style('css/editor-style.css');

////////////////////////////////////////////////////////////////////
// Register Bootstrap JS with jquery
////////////////////////////////////////////////////////////////////
    function devdmbootstrap3_theme_js()
    {
        global $version;
        wp_enqueue_script('theme-js', get_template_directory_uri() . '/js/global.min.js',array( 'jquery' ),$version,true );
    }
    add_action('wp_enqueue_scripts', 'devdmbootstrap3_theme_js');



////////////////////////////////////////////////////////////////////
// Add Title Parameters
////////////////////////////////////////////////////////////////////

    function devdmbootstrap3_wp_title( $title, $sep ) { // Taken from Twenty Twelve 1.0
        global $paged, $page;

        if ( is_feed() )
            return $title;

        // Add the site name.
        $title .= get_bloginfo( 'name' );

        // Add the site description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            $title = "$title $sep $site_description";

        // Add a page number if necessary.
        if ( $paged >= 2 || $page >= 2 )
            $title = "$title $sep " . sprintf( __( 'Page %s', 'devdmbootstrap3' ), max( $paged, $page ) );

        return $title;
    }
    add_filter( 'wp_title', 'devdmbootstrap3_wp_title', 10, 2 );

////////////////////////////////////////////////////////////////////
// Register Custom Navigation Walker include custom menu widget to use walkerclass
////////////////////////////////////////////////////////////////////

    require_once('lib/wp_bootstrap_navwalker.php');
    require_once('lib/bootstrap-custom-menu-widget.php');

////////////////////////////////////////////////////////////////////
// Register Menus
////////////////////////////////////////////////////////////////////

        register_nav_menus(
            array(
                'main_menu' => 'Main Menu',
                'top_menu' => 'Top Menu'
            )
        );

////////////////////////////////////////////////////////////////////
// Register the Sidebar(s)
////////////////////////////////////////////////////////////////////

         register_sidebar(
            array(
            'name' => 'Vänster Sidofält',
            'id' => 'left-sidebar',
            'before_widget' => '<aside class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));

        register_sidebar(
            array(
            'name' => 'Höger Sidofält',
            'id' => 'right-sidebar',
            'before_widget' => '<aside class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));

        register_sidebar(
            array(
            'name' => 'Sidfotfält 1',
            'id' => 'footer-field-3',
            'before_widget' => '<div class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));

         register_sidebar(
            array(
            'name' => 'Sidfotfält 2',
            'id' => 'footer-field-4',
            'before_widget' => '<div class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));

        register_sidebar(
            array(
            'name' => 'Resp. Top Menu',
            'id' => 'resp-top-menu',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));
       

////////////////////////////////////////////////////////////////////
// Register hook and action to set Main content area col-md- width based on sidebar declarations
////////////////////////////////////////////////////////////////////

add_action( 'devdmbootstrap3_main_content_width_hook', 'devdmbootstrap3_main_content_width_columns');

function devdmbootstrap3_main_content_width_columns () {

    global $dm_settings;

    $columns = '12';

    if ($dm_settings['right_sidebar'] != 0) {
        $columns = $columns - $dm_settings['right_sidebar_width'];
    }

    if ($dm_settings['left_sidebar'] != 0) {
        $columns = $columns - $dm_settings['left_sidebar_width'];
    }

    echo $columns;
}

function devdmbootstrap3_main_content_width() {
    do_action('devdmbootstrap3_main_content_width_hook');
}

////////////////////////////////////////////////////////////////////
// Add support for a featured image and the size
////////////////////////////////////////////////////////////////////

    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size(500,400, true);
    add_image_size( 'header-image', 720, 265, array( 'center', 'center' ) );

    add_image_size( 'profilbild', 300, 450, true);

    

////////////////////////////////////////////////////////////////////
// Adds RSS feed links to for posts and comments.
////////////////////////////////////////////////////////////////////

    add_theme_support( 'automatic-feed-links' );


////////////////////////////////////////////////////////////////////
// Set Content Width
////////////////////////////////////////////////////////////////////

if ( ! isset( $content_width ) ) $content_width = 800;


////////////////////////////////////////////////////////////////////
// Add Search form
////////////////////////////////////////////////////////////////////

    add_theme_support( 'html5', array( 'search-form' ) );


////////////////////////////////////////////////////////////////////
// Add shortcode support to widgets
////////////////////////////////////////////////////////////////////

    add_filter('widget_text', 'do_shortcode');


////////////////////////////////////////////////////////////////////
// Add Sidebar Menu
////////////////////////////////////////////////////////////////////

function sidebar_menu() {
   $ID = get_the_ID();
    $ancestors = get_post_ancestors($ID);
    $ancestors = array_reverse($ancestors);
    $ancestors[] = $ID;
    ?><div class="sidebar-menu-container"><?php
    echo '<h3 class="ancestor-title"><a href="' . get_permalink($ancestors[0]) . '">' . get_the_title($ancestors[0]) . '</a></h3>' . "\n";

    $pages = get_pages('sort_column=menu_order');

    echo '<ul id="sidebar-menu">' . "\n";
    wp_list_pages('title_li=&child_of=' . $ancestors[0] . '&exclude='.$exclude.'&sort_column=menu_order');
    echo '</ul>' . "\n";
    ?></div><?php
}    

add_shortcode('Sidebar-Menu', 'sidebar_menu');


////////////////////////////////////////////////////////////////////
// Enable Pagination
////////////////////////////////////////////////////////////////////

function pagination($prev = 'Föregående', $next = 'Nästa') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    $pagination = array(
        'base' => @add_query_arg('paged','%#%'),
        'format' => '',
        'total' => $wp_query->max_num_pages,
        'current' => $current,
        'prev_text' => __($prev),
        'next_text' => __($next),
        'type' => 'plain'
);
    if( $wp_rewrite->using_permalinks() )
        $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
 
    // Conflict with URL search rewrite
    if( !empty($wp_query->query_vars['s']) )
      $pagination['add_args'] = array( 's' => urlencode( get_query_var( 's' ) ) ); 
 
    echo paginate_links( $pagination );
};


////////////////////////////////////////////////////////////////////
// New Excerpt length
////////////////////////////////////////////////////////////////////

function custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



////////////////////////////////////////////////////////////////////
// New Excerpt "Read more" link
////////////////////////////////////////////////////////////////////

function new_excerpt_more( $more ) {
    return '... <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Läs mer  »</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );



////////////////////////////////////////////////////////////////////
// Custom Login Logo
////////////////////////////////////////////////////////////////////

function login_wp_custom_logo() {
    // Login theme modifier
    add_filter( 'login_headerurl', 'login_headerurl_custom_logo' );
    add_action( 'login_head', 'login_head_custom_logo' );
    add_filter( 'login_headertitle', 'login_headertitle_custom_logo' );
}
add_action( 'init', 'login_wp_custom_logo' );

function login_head_custom_logo() {
    echo '
    <style type="text/css">
        h1 a {
            background-image:url('. get_stylesheet_directory_uri() .'/img/logo@2x.svg) !important;
            height: 180px !important;
            width: auto !important;          
            background-size: auto 180px !important;
        }
    </style>
    ';
}

function login_headerurl_custom_logo( $url ) {
    return get_bloginfo( 'url' );
}

function login_headertitle_custom_logo() {
    return get_option('blogname');
}


////////////////////////////////////////////////////////////////////
// If is sub-page of
////////////////////////////////////////////////////////////////////

function is_tree($pid) {      // $pid = The ID of the page we're looking for pages underneath
    global $post;         // load details about this page
    if(is_page()&&($post->post_parent==$pid)) 
        return true;   // we're at the page or at a sub page
    else 
        return false;  // we're elsewhere
};


////////////////////////////////////////////////////////////////////
// Get page-id by slug
////////////////////////////////////////////////////////////////////

function get_id_by_slug($page_slug) {
    $page = get_page_by_path($page_slug);
    if ($page) {
        return $page->ID;
    } else {
        return null;
    }
}





