<aside class="sidebar col-md-4" role="complementary">

  <div class="widget widget-last-news">
    <h6>популярные статьи</h6>
    <ul>

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

        <li>
          <h4>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              <?php the_title(); ?>
            </a>
          </h4>
          <?php wpeExcerpt('wpeExcerpt13'); ?>
          <span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'wpeasy' ), __( '1 Comment', 'wpeasy' ), __( '% Comments', 'wpeasy' )); ?></span>
        </li>

  <?php  $i++; endwhile; }
      }
      wp_reset_query();
  ?>



    </ul>
  </div><!-- /.widget widget-last-news -->

  <?php if ( is_active_sidebar('widgetarea1') ) : ?>
    <?php dynamic_sidebar( 'widgetarea1' ); ?>
  <?php else : ?>

  <?php endif; ?>

</aside><!-- /sidebar -->
