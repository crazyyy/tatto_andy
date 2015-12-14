<div class="row related-block">
  <h6 class="related-title col-md-12">почитать по теме:</h6>
  <?php $categories = get_the_category();
    foreach ($categories as $category) {
      $cat = $category->cat_ID;
      $args=array(
        'cat' => $cat,
        'order' =>DESC,
        'post__not_in' => array($post->ID),
        'posts_per_page'=>3
      );
      $my_query = null;
      $my_query = new WP_Query($args);
      if( $my_query->have_posts() ) {
        $i = 0; while ($my_query->have_posts() && $i < 3) : $my_query->the_post(); ?>

      <div class="related-block-inner col-md-4">
        <a href="">
          <?php if ( has_post_thumbnail()) :
            the_post_thumbnail('medium');
          else: ?>
            <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
          <?php endif; ?>
          <h4>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h4>
        </a>
      </div><!-- /.related-block-inner col-md-4 -->

  <?php  $i++; endwhile; }
      }
      wp_reset_query();
  ?>
</div><!-- /.row related-block-->
