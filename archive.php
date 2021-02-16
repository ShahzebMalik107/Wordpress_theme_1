<?php get_header();?>
<div class="archive-body">
    <div class="container">
    <h1><?php single_cat_title();?></h1></div>
    <?php
        get_template_part( 'template-parts/Archive-page/archive-v1' )
    ?>
</div>


<?php get_footer();?>