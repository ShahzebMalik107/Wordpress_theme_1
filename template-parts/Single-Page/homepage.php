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

<div class="skill_section">
    <div class="container flex">
        <div class="wordpress" onclick="showwordpress()">
        <h2 class="wordpress"><i class="fa fa-wordpress" aria-hidden="true"></i>&ensp;Wordpress</h2>
        <div class="discriptionwordpress">
        <p>Page Builders</p>
        <ul>
            <li>Elementor</li>
            <li>Wp-Bakery</li>
            <li>DEVI</li>
        </ul>
        <p>Dynaminc Content</p>
        <ul>
            <li>ACF</li>
            <li>CPT-UI</li>
            <li>Custom Code</li>
        </ul>
        </div>
        </div>
        
        <div class="HTML">
        <h2><i class="fa fa-html5" aria-hidden="true"></i>&ensp;HTML-CSS</h2>
        </div>
        
        <div class="HTML">
        <h2><i class="fab fa-js"></i>&ensp;JavaScript</h2>
        </div>
    </div>
</div>

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

<!-- Major skills  -->

<div class="skill_section-2">
    <div class="container">
        <h1>Skills</h1>
    </div>
</div>

<div class="skill_main container">
    <div class="item ">
        <label for="html">HTML/CSS</label> <progress id="html" value="<?php echo get_option( 'html-section' ); ?>" max="10"> </progress>
    </div>
    <div class="item ">
        <label for="Bootstrap">Bootstrap</label> <progress id="bootstrap" value="<?php echo get_option( 'Bootstrap-section' ); ?>" max="10"> </progress>
    </div>
    <div class="item">
        <label for="Javascript">Javascript</label> <progress id="Javascript" value="<?php echo get_option( 'Javascript-section' ); ?>" max="10"> </progress>
    </div>   
    <div class="item ">
        <label for="Wordpress">Wordpress</label> <progress id="Wordpress" value="<?php echo get_option( 'wordpress-section' ); ?>" max="10"> </progress>
    </div>
    <div class="item ">
        <label for="Photoshop">Photoshop</label> <progress id="Photoshop" value="<?php echo get_option( 'photoshop-section' ); ?>" max="10"> </progress>
    </div>
    <div class="item">
        <label for="Javascript">Illustrator</label> <progress id="illustrator" value="<?php echo get_option( 'Illustrator-section' ); ?>" max="10"> </progress>
    </div>
</div>









<script>
    function showwordpress()
{
    var show=document.getElementsByClassName('discriptionwordpress');
    show[0].classList.toggle('show');
}
</script>