<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-8'); ?>>
      <h3 class="single-cat-title"><?php the_category(', '); // Separated by commas ?></h3>
      <h1 class="single-title inner-title"><?php the_title(); ?></h1>

      <?php the_content(); ?>

      <?php edit_post_link(); ?>

      <?php setPostViews(get_the_ID()); ?>

      <?php comments_template(); ?>

      <?php get_template_part('include-related'); ?>

    </article>

  <?php endwhile; else: ?>
    <article class="col-md-8">

      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

    </article>
  <?php endif; ?>
<?php get_sidebar('page'); ?>
<?php get_footer(); ?>
