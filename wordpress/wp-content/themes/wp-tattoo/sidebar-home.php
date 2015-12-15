<aside class="sidebar col-md-4" role="complementary">

  <div class="widget widget-last-news">
    <h6>новые новости</h6>
    <ul>

    <?php query_posts( array( 'meta_key' => 'post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC', 'posts_per_page' => '5' ) ); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <li>
        <h4>
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_title(); ?>
          </a>
        </h4>
        <?php wpeExcerpt('wpeExcerpt13'); ?>
        <span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'wpeasy' ), __( '1 Comment', 'wpeasy' ), __( '% Comments', 'wpeasy' )); ?></span>
      </li>

    <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>

    </ul>
  </div><!-- /.widget widget-last-news -->

  <?php if ( is_active_sidebar('widgetarea2') ) : ?>
    <?php dynamic_sidebar( 'widgetarea2' ); ?>
  <?php else : ?>

  <?php endif; ?>

</aside><!-- /sidebar -->
