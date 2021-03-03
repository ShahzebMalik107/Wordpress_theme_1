<?php
function RegisterCustomizer( $wp_customize )
{
    //First add section
    $wp_customize->add_section(
        'top-bar', array(
            'title' => 'Top-bar',
            'description' => 'Topbar add you address and location',
            'priority'  => 2,
        )
    );
    //Add settings 
    $wp_customize->add_setting('top_bar-settings',
        array(
            'default' => 'info@email.com',
            'capibilty' => 'edit_theme_option',
            'type'  =>'option',

        )
    );

    //Add controller
    $wp_customize-> add_control('top_bar_cocntrol',
        array(
            'label' => __('Enter your Email address', 'custom-theme'),
            'section'   => 'top-bar',
            'settings'=>  'top_bar-settings',
        )
    );

    //Adding Location Settings 
    $wp_customize -> add_setting('Location_section',
        array(
            'default' => 'This is Phone Section',
            'capiblity'=> 'edit_theme_option',
            'type' => 'option',
        )
    );

    //Adding Controle
    $wp_customize -> add_control('top_bar_control',
        array(
            'label' => __('Enter the location hare', 'custom-theme'),
            'section'=> 'top-bar',
            'settings' => 'Location_section',
        )
    );
    
}

add_action( 'customize_register', 'RegisterCustomizer' );
