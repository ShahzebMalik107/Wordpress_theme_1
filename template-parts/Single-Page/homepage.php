<!-- HomePage banneer -->

<div class="homepage_banner" style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php echo get_option( 'banner-settings');?>);">
    <div class="container inner">
        <div class="fullname"><h1> <?php echo get_option( 'Name-section' ) ?> </h1></div>
        <div class="designation fullname">
            <h3><?php echo get_option( 'designation' );?></h3>
        </div>
    </div>
</div>

<!-- Skills section -->


<!-- About Section -->

<div class="about container">
    <div class="about_image">
   
        <style>
            .about_image{
                background-image: url(<?php echo get_option('About_Image'); ?>);
                position: relative;
            }
            
            .about_image::after
            {
                transform: translateX(100%);
                width: 500px;
                height: 500px;
                position: absolute;
                content: "";
                background-image: url(<?php echo get_option('About_Image_Hover') ?>);
                background-size: cover;
                transition: .5s;
                opacity: 0;
            }
            .about_image:hover::after{
                transform: translateX(0%);
                opacity: 1;
            }
        </style>
    </div>
    <div class="about_text">
        <h2>About Me</br>&ensp;</h2>
        <?php if(have_posts()): while(have_posts()): the_post(  );?>
        <?php the_content( );?>
        <?php endwhile; endif;?>

    </div>
</div>