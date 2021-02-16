<div class="top-head">
  <div class="top-header container">
  <?php 
        dynamic_sidebar( 'top-left' );
    ?>
    <?php 
        dynamic_sidebar( 'top-right' );?>
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