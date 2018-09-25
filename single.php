<?php get_header() ?>
 
  <?php
    while ( have_posts() ) : the_post(); ?>
      <div class="post-image-container"> 
        <div class="post-page-title"><?php the_title(); ?></div>
        <?php 
          the_content();
          the_post_navigation();
        ?>
      </div>

    <?php
    endwhile;
    ?>
<?php get_footer() ?>