<div class="main-header-v1">
<div class="top-head">
  <div class="top-header container">
    <a href="tel:<?php echo get_option( 'top_bar-settings') ?>" class="top-header-map"><p><i class="fa fa-phone-alt" aria-hidden="true"></i>&ensp; <?php echo get_option( 'top_bar-settings') ?></p></a>
    <p> <i class="fa fa-map-pin" aria-hidden="true"></i> &ensp;<?php echo get_option( 'Location_section' );?></p>
  </div>
</div>
<header>
   <div class="container headerv1 ">
    <!-- logo -->
    <div class="logo">
      <?php if ( has_custom_logo() && ! $show_title ) : ?>
		<div class="site-logo"><?php the_custom_logo(); ?></div>
	<?php endif; ?>
    </div>
    <div class="navmenu">
    <!-- navbar -->
        <?php wp_nav_menu( 
            array(
                'theme_location'=> 'primary'
            )
        );
        ?>
    </div>
   </div>
</header>
</div>