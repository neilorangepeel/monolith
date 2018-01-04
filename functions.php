<?php 
    // ADDING THEME CUSTOMIZER
    include('_/customizer/customizer.php');

    // LOAD JQUERY SCRIPTS
    function tinktank_add_scripts() {
        wp_enqueue_script('jquery');
        wp_register_script( 'add-custom-js', get_template_directory_uri() . '/_/_js/custom-ck.js', array('jquery'),'',true  ); // TO FOOTER
        wp_enqueue_script( 'add-custom-js' );
    }
    add_action( 'wp_enqueue_scripts', 'tinktank_add_scripts' );

    // CLEAN UP <head>
    function removeHeadLinks() {
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');

    // MENUS
    function your_function_name() {
        add_theme_support( 'menus' );
    }
    add_action( 'after_setup_theme', 'your_function_name' );

    // REGISTER MENU WIDGET
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __('Menu Widgets','monolith' ),
            'id'   => 'menu-widgets',
            'description'   => __( 'These are widgets for the menu.','monolith' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s col-1-4">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>'
        ));
    }

    // ADD IMAGE SIZE
    if ( function_exists( 'add_image_size' ) ) { 
        add_image_size( '1x1', 800, 800, true );
        add_image_size( '6x5', 800, 667, true );
        add_image_size( 'fullWidth', 1600, 99999 );
    }
    
    // ALLOW SVG UPLOADS
    function cc_mime_types( $mimes ){
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }
    add_filter( 'upload_mimes', 'cc_mime_types' );

    // FEATURED IMAGE
    if ( function_exists( 'add_theme_support' ) )
    add_theme_support( 'post-thumbnails' );

    // REMOVE PAGINATION IF NOT NEEDED
    function show_posts_nav() {
        global $wp_query;
        return ($wp_query->max_num_pages > 1);
    }

?>