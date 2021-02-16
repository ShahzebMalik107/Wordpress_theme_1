<!-- Archive v1 -->


<div class="container">

    <!-- Loop of archive Page -->

    <?php if(have_posts()): while(have_posts()): the_post(  );?>
        <div class="Archive_card">
        <div class="image">
            <?php if (has_post_thumbnail( )):?>
                <img class="archive-image" src="<?php the_post_thumbnail_url( 'smalles');?>" alt="">
        <?php endif;?>
    </div>
    <div class="archive-content">
        <h3><?php the_title(); ?> </h3>
        <?php the_excerpt(  ); ?>
        <button class="button"> <a href="<?php the_permalink();?>"> View Post </a></button>
    </div>
        </div>
    <?php endwhile; endif;?>
</div>