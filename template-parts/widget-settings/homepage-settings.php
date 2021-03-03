<?php

function homepage( $wp_customize)
{
    //adding Homepage setting section
    $wp_customize-> add_section('Home_Page',
        array(
            'title'=>'Home page',
            'description' => 'HomePage settings',
            'priority' => 1,
        )
    );

    //adding Settings banner
    $wp_customize-> add_setting('banner-settings',
    array(
        'default' =>'assets/homepage/pexels-pixabay-270360.jpg',
        'capibilty' => 'edit_theme_option',
        'type'  =>'option',
        )
    );

    // adding controles
    $wp_customize-> add_control(new WP_Customize_Upload_Control($wp_customize, 'upload_test',
         array(
            'label'    => __('Banner', 'themename'),
            'section'  => 'Home_Page',
            'settings' => 'banner-settings',
        ))
    );

    //adding name settings
    $wp_customize-> add_setting( 
        'Name-section', array(
            'default' => 'Full Name',
            'capibilty' => 'edit_theme_optiopn',
            'type' => 'option',
        )
    );

    //Adding controller
     $wp_customize-> add_control('name-contorl',
     array(
         'label' => __('Your Full name','shahzeb_malik'),
         'section' =>'Home_Page',
         'settings'=> 'Name-section',
     )
     );

     //Adding Designation section
     $wp_customize-> add_setting(
         'designation', array(
            'Default'=> 'What you do',
            'capibility' =>'edit_theme_optiopn',
            'type' => 'option',
         )
        );
    // adding controle
    $wp_customize -> add_control(
      'designation-control', array(
          'label'=> __('What you do'),
          'section' =>'Home_Page',
          'settings' =>'designation',
      )  
    );

    //About Image

    $wp_customize-> add_section('About_Image_section', array(
            'title'=>'About Image Section',
            'description' => 'Enter your Image for about section',
            'priority' => 2,
    )
    );

    $wp_customize-> add_setting(
        'About_Image', array(
            'Default'=> 'Your image',
            'capibility' =>'edit_theme_option',
            'type' =>'option',
        )
    );

    $wp_customize -> add_control(new WP_Customize_Upload_Control($wp_customize, 'About_section_image',
        array(
        'label'    => __('Your Image', 'themename'),
        'section'  => 'About_Image_section',
        'settings' => 'About_Image',
        ))
    );
    $wp_customize-> add_setting(
        'About_Image_Hover', array(
            'Default'=> 'Your hover image',
            'capibility' =>'edit_theme_option',
            'type' =>'option',
        )
    );

    $wp_customize -> add_control(new WP_Customize_Upload_Control($wp_customize, 'About_section_image_hover',
        array(
        'label'    => __('Your Image', 'themename'),
        'section'  => 'About_Image_section',
        'settings' => 'About_Image_Hover',
        ))
    );

    // Skills section
    
    $wp_customize-> add_section(
        'Skill_section', array(
            'title'=>'Skills Section',
            'description' => 'Add your skill levels',
            'priority' => 3,
        )
    );
    $wp_customize -> add_setting(
        'html-section', array(
            'Default'=>6,
            'capibility'=> 'edit_theme_option',
            'type'=> 'option',
        )
    );
    $wp_customize-> add_control(
        'html_section_control', array(
            'label' => __('Your HTML skills Level(range form 0 to 10)'),
            'section' => 'Skill_section',
            'settings' => 'html-section',   
        )
    );

}


add_action( 'customize_register','homepage');