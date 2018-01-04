<?php

// SVG UPLOADS IN CUSTOMIZER
function tinktank_customize_register( $wp_customize ) {
    class WP_Customize_Image_control_SVG extends WP_Customize_Image_Control
    {
        public function __construct( $manager, $id, $args = array() )
        {
                parent::__construct( $manager, $id, $args );
                $this->remove_tab('uploaded');
                $this->extensions = array( 'jpg', 'jpeg', 'gif', 'png', 'svg' );
        }
    }
}
add_action( 'customize_register', 'tinktank_customize_register' );


// CALLING theme-customizer.js
function tinktank_customizer_live_preview() {

    wp_enqueue_script(
        'tinktank-theme-customizer',
        get_template_directory_uri() . '/_/customizer/theme-customizer.js',
        array( 'jquery', 'customize-preview' ),
        '1.0',
        true
    );
}
add_action( 'customize_preview_init', 'tinktank_customizer_live_preview' );

?>