<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php
        if( ! is_home() ):
            wp_title( '|', true, 'right' );
        endif;
            bloginfo( 'name' );
        ?></title>
        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/_images/favicon.ico">
        <link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/_/_images/apple-touch-icon.png">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?><!--- MMM need? -->
        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>

    <?php include (TEMPLATEPATH . '/_/parts/navigation.php' ); ?>
    
    <div class="wrapper" id="wrapper">

        <header class="header">
                <div class="contain">

                    <?php if ( '' != get_theme_mod( 'tinktank_logo' ) ) { ?>
                    <div class="logo">
                        <a href="<?php bloginfo('siteurl'); ?>">
                            <img src="<?php echo get_theme_mod( 'tinktank_logo' ) ?>" alt="Logo">
                        </a>
                    </div>
                    <?php } ?>

                    <a href="#" class="menuToggle" id="menuToggle">Menu <span class="navicon">☰</span></a>
                </div>
            </header>