<footer class="footer-v1">
    <div class="container">
        <div class="frow">
            
            <div class="footerlogo">
                <!-- logo -->
                <div class="logo">
                    <?php if ( has_custom_logo() && ! $show_title ) : ?>
                        <div class="site-logo"><?php the_custom_logo(); ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="footer-nav">
                <?php wp_nav_menu( 
                    array(
                        'theme_location'=> 'footer'
                    )
                );
                ?>
            </div>
            <div class="socialmedia">
                <?php wp_nav_menu( 
                    array(
                        'theme_location'=> 'social_media'
                    )
                );

                ?>
            </div>
        </div>
    </div>
    <div class="copyright-section">
                <div class="container">
                <p> <?php echo get_option( 'Copyright-setction-settings' ); ?>
                </div>
    </div>  
</footer>