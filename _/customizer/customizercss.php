<?php

// CUSTOMIZER CSS TO <head>
function tinktank_customizer_css() {
    ?>
    <style type="text/css">
        a, 
        .theTags,
        .postTitle a:hover, 
        .postTitle a:focus {
            color: <?php echo get_theme_mod( 'tinktank_site_color' )?>;
        }
        .theTags a:hover,
        .theTags a:focus,
        .categoryList .active {
            border-bottom: 2px solid <?php echo get_theme_mod( 'tinktank_site_color' )?>;
        }
        blockquote {
            border-left: 2px solid <?php echo get_theme_mod( 'tinktank_site_color' )?>;
        }
        input[type="submit"] {
            background: <?php echo get_theme_mod( 'tinktank_site_color' )?>;
        }

        <?php if ( '' != get_theme_mod( 'tinktank_header_image' ) ) { ?>
        .hero {
            background-image: url( <?php echo get_theme_mod( 'tinktank_header_image' ) ?> );
        }
        <?php } ?>
    </style>
    <?php
}
add_action( 'wp_head', 'tinktank_customizer_css' );

?>