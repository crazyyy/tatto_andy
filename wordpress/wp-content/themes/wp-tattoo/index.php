<?php get_header(); ?>
  <article class="category-looper col-md-8">

    <h3 class="cat-title inner-title"><?php _e( 'Latest Posts', 'wpeasy' ); ?></h3>

    <div class="row">
      <?php get_template_part('loop'); ?>
    </div>

    <?php get_template_part('pagination'); ?>

  </article><!-- category-looper -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
