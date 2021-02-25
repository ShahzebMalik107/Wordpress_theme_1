<footer class="footer-v1">
    <div class="container">
        <div class="frow">
            
            <div class="footerlogo">
                <!-- logo -->
                <div class="logo">
                <?php if ( has_custom_logo() && ! $show_title ) : ?>
                    <div class="site-logo"><?php the_custom_logo(); ?></div>
                <?php endif; ?>
                <div class="about-section-footer">
                    <?php dynamic_sidebar( 'footer-section-1' ); ?>
                </div>
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
        </div>
    </div>

</footer>