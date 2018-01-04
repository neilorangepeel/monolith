<?php

function tinktank_register_theme_customizer ( $wp_customizer ) {

    
    //----------------------------- APPEARANCE OPTIONS
    //-----------------------------
    $wp_customizer->add_section(
        'tinktank_appearance_options',
        array(
            'title'     => 'Appearance',
            'priority'  => 200
        )
    );

    $wp_customizer->add_setting(
        'tinktank_site_color',
        array(
            'default'   => '#DAA520',
            'transport' => 'refresh'
        )
    );
    $wp_customizer->add_control(
        new WP_Customize_Color_control(
            $wp_customizer,
            'tinktank_site_color',
            array(
                'label'     => 'Site Color',
                'section'   => 'tinktank_appearance_options',
                'settings'  => 'tinktank_site_color'
            )
        )
    );

    $wp_customizer->add_setting(
        'tinktank_logo',
        array(
            'default'   => '',
            'transport' => 'refresh'
        )
    );
    $wp_customizer->add_control(
        new WP_Customize_Image_control_SVG(
            $wp_customizer,
            'tinktank_logo',
            array(
                'label'     => 'Logo - 150px × 50px',
                'section'   => 'tinktank_appearance_options',
                'settings'  => 'tinktank_logo'
            )
        )
    );

    $wp_customizer->add_setting(
        'tinktank_header_image',
        array(
            'default'   => '',
            'transport' => 'refresh'
        )
    );
    $wp_customizer->add_control(
        new WP_Customize_Image_control_SVG(
            $wp_customizer,
            'tinktank_header_image',
            array(
                'label'     => 'Header Image - 1400px × 700px',
                'section'   => 'tinktank_appearance_options',
                'settings'  => 'tinktank_header_image'
            )
        )
    );

   

    //----------------------------- FOOTER OPTIONS
    //-----------------------------
    $wp_customizer->add_section(
        'tinktank_footer_options',
        array(
            'title'     => 'Footer',
            'priority'  => 201
        )
    );
    $wp_customizer->add_setting(
        'tinktank_footer_copyright',
        array(
            'default'   => 'Copyright 2014 All Rights Reserved',
            'transport' => 'postMessage'
        )
    );
    $wp_customizer->add_control(
        'tinktank_footer_copyright',
        array(
            'section'   => 'tinktank_footer_options',
            'label'     => 'Footer Copyright',
            'type'      => 'text'
        )
    );
    $wp_customizer->add_setting(
        'tinktank_display_tinktank_link',
        array(
            'default'   => 'true',
            'transport' => 'postMessage'
        )
    );
    $wp_customizer->add_control(
        'tinktank_display_tinktank_link',
        array(
            'section'   => 'tinktank_footer_options',
            'label'     => 'Feeling nice? Add a link to Tink Tank',
            'type'      => 'checkbox'
        )
    );


    //----------------------------- SOCIAL ICONS
    //-----------------------------
    $wp_customizer->add_section(
        'tinktank_social_media',
        array(
            'title'     => 'Social Media',
            'priority'  => 202
        )
    );

    $wp_customizer->add_setting(
        'tinktank_twitter_url',
        array(
            'default'   => '',
            'transport' => 'postMessage'
        )
    );
    $wp_customizer->add_control(
        'tinktank_twitter_url',
        array(
            'section'   => 'tinktank_social_media',
            'label'     => 'Twitter',
            'type'      => 'text',
            'priority'  => 1
        )
    );

    $wp_customizer->add_setting(
        'tinktank_facebook_url',
        array(
            'default'   => '',
            'transport' => 'postMessage'
        )
    );
    $wp_customizer->add_control(
        'tinktank_facebook_url',
        array(
            'section'   => 'tinktank_social_media',
            'label'     => 'Facebook',
            'type'      => 'text',
            'priority'  => 2
        )
    );

    $wp_customizer->add_setting(
        'tinktank_google_url',
        array(
            'default'   => '',
            'transport' => 'postMessage'
        )
    );
    $wp_customizer->add_control(
        'tinktank_google_url',
        array(
            'section'   => 'tinktank_social_media',
            'label'     => 'Google+',
            'type'      => 'text',
            'priority'  => 3
        )
    );

    $wp_customizer->add_setting(
        'tinktank_vimeo_url',
        array(
            'default'   => '',
            'transport' => 'postMessage'
        )
    );
    $wp_customizer->add_control(
        'tinktank_vimeo_url',
        array(
            'section'   => 'tinktank_social_media',
            'label'     => 'Vimeo',
            'type'      => 'text',
            'priority'  => 4
        )
    );

    $wp_customizer->add_setting(
        'tinktank_youtube_url',
        array(
            'default'   => '',
            'transport' => 'postMessage'
        )
    );
    $wp_customizer->add_control(
        'tinktank_youtube_url',
        array(
            'section'   => 'tinktank_social_media',
            'label'     => 'YouTube',
            'type'      => 'text',
            'priority'  => 5
        )
    );

    $wp_customizer->add_setting(
        'tinktank_instagram_url',
        array(
            'default'   => '',
            'transport' => 'postMessage'
        )
    );
    $wp_customizer->add_control(
        'tinktank_instagram_url',
        array(
            'section'   => 'tinktank_social_media',
            'label'     => 'Instagram',
            'type'      => 'text',
            'priority'  => 6
        )
    );

    $wp_customizer->add_setting(
        'tinktank_flickr_url',
        array(
            'default'   => '',
            'transport' => 'postMessage'
        )
    );
    $wp_customizer->add_control(
        'tinktank_flickr_url',
        array(
            'section'   => 'tinktank_social_media',
            'label'     => 'Flickr',
            'type'      => 'text',
            'priority'  => 7
        )
    );

    $wp_customizer->add_setting(
        'tinktank_pinterest_url',
        array(
            'default'   => '',
            'transport' => 'postMessage'
        )
    );
    $wp_customizer->add_control(
        'tinktank_pinterest_url',
        array(
            'section'   => 'tinktank_social_media',
            'label'     => 'Pinterest',
            'type'      => 'text',
            'priority'  => 8
        )
    );

    $wp_customizer->add_setting(
        'tinktank_dribbble_url',
        array(
            'default'   => '',
            'transport' => 'postMessage'
        )
    );
    $wp_customizer->add_control(
        'tinktank_dribbble_url',
        array(
            'section'   => 'tinktank_social_media',
            'label'     => 'Dribbble',
            'type'      => 'text',
            'priority'  => 9
        )
    );
 
    $wp_customizer->add_setting(
        'tinktank_behance_url',
        array(
            'default'   => '',
            'transport' => 'postMessage'
        )
    );
    $wp_customizer->add_control(
        'tinktank_behance_url',
        array(
            'section'   => 'tinktank_social_media',
            'label'     => 'Behance',
            'type'      => 'text',
            'priority'  => 10
        )
    );


}
add_action ( 'customize_register', 'tinktank_register_theme_customizer' );

?>