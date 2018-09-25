<?php get_header() ?>
  <?php
    $tag="thumbnail";
    $query_1 = new WP_Query( 'tag='.$tag );
  ?>
   <div class="row">
  <?php  if ( $query_1->have_posts() ) : while ( $query_1->have_posts() ) : $query_1->the_post(); ?>
      <a class="col-6 col-md-3 mb-5 post-thumbnail" href="<?php echo get_permalink($ID); ?>">
        <?php the_post_thumbnail('10%', '10%') ;?>
      </a>
  <?php
    endwhile;
    endif;
    wp_reset_postdata();
  ?>
<?php get_footer() ?>