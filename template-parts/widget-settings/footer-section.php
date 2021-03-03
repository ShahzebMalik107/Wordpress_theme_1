<?php
function footer_section( $wp_customize )
{
    $wp_customize->add_section(
        'footer-section', array(
            'title' => 'Footer',
            'description' => 'Footer',
            'priority'  => 3,
        )
    );
    $wp_customize->add_setting('Copyright-setction-settings',
        array(
            'default' => 'Copyright by Shahzeb Malik',
            'capibilty' => 'edit_theme_option',
            'type'  =>'option',

        )
    );
    
    //Add controller
    $wp_customize-> add_control('Footer-control',
        array(
            'label' => __('Footer Copyright Section', 'custom-theme'),
            'section'   => 'footer-section',
            'settings'=>  'Copyright-setction-settings',
        )
    );

}



add_action( 'customize_register','footer_section');