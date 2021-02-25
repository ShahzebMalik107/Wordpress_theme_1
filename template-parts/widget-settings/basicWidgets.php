<?php 
// Adding firstwidget

function custom_widgets()
{
    register_sidebar( 
        array(
            'name'               => esc_html__( 'Top Bar-left','customtheme' ),
            'id'                 => 'top-left',
            'description'        => esc_html__( 'Add contact info and location hare' ),
            'before_widget'      => '<section class="top-left">',
            'after_widget'       =>'</section>',
            'before_title'       =>'<h4>',
            'after_title'        => '</h4>',
        )
        
    );

    register_sidebar( 
        array(
            'name'               => esc_html__( 'Top Bar-right','customtheme' ),
            'id'                 => 'top-right',
            'description'        => esc_html__( 'Add contact info and location hare' ),
            'before_widget'      => '<section class="top-right">',
            'after_widget'       =>'</section>',
            'before_title'       =>'<h4>',
            'after_title'        => '</h4>',
        )
        
    );
    register_sidebar( 
        array(
            'name'                => esc_html__( 'footer-secion-1', 'customtheme' ),
            'id'                  => 'footer-section-1',
            'description'         => esc_html__( 'Add your About section hare'),
            'before_widget'       => '<section class="footer-section-1">',
            'after_widget'        => '</section>',
            'before_title'        => '<h2 class="footer-title">',
            'after_title'         => '</h2>',
        )
    );
    
}
add_action( 'widgets_init', 'custom_widgets' );