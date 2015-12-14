<?php get_header(); ?>
  <article class="category-looper col-md-8">

    <h3 class="cat-title inner-title"><?php echo sprintf( __( '%s Search Results for ', 'wpeasy' ), $wp_query->found_posts ); echo get_search_query(); ?></h3>

    <div class="row">
      <?php get_template_part('loop'); ?>
    </div>

    <?php get_template_part('pagination'); ?>

  </article><!-- category-looper -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
