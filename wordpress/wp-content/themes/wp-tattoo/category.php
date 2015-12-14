<?php get_header(); ?>
  <article class="category-looper col-md-8">

    <h3 class="cat-title inner-title"><?php the_category(', '); ?></h3>

    <div class="row">
      <?php get_template_part('loop'); ?>
    </div>

    <?php get_template_part('pagination'); ?>

    <div class="row cat-description">
      <div class="col-md-12">
        <?php echo category_description(); ?>
      </div><!-- col-md-12 -->
    </div><!-- row cat-description -->

  </article><!-- category-looper -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
