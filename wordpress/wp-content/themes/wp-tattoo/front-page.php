<?php /* Template Name: Home Page Template */ get_header(); ?>

    <article class="home-slider col-md-12">
      slider
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores fugit maiores perspiciatis odit, tempora necessitatibus error consequuntur rem inventore incidunt et non ipsa vel soluta labore sit voluptate, expedita quibusdam?
    </article><!-- /.home-slider col-md-12 -->

  </div><!-- inner row -->

  <div class="inner row">

    <article class="category-looper col-md-8">
      <h4 class="home-loop-title">Lorem ipsum dolor sit amet</h4>
      <?php query_posts("showposts=4&cat=9"); ?>
        <div class="row">
          <?php get_template_part('loop'); ?>
        </div>
      <?php wp_reset_query(); ?>

      <?php query_posts("showposts=4&cat=8"); ?>
        <h4 class="home-loop-title">Lorem ipsum dolor sit amet</h4>
        <div class="row">
          <?php get_template_part('loop'); ?>
        </div>
      <?php wp_reset_query(); ?>

      <?php query_posts("showposts=4&cat=9"); ?>
        <h4 class="home-loop-title">Lorem ipsum dolor sit amet</h4>
        <div class="row">
          <?php get_template_part('loop'); ?>
        </div>
      <?php wp_reset_query(); ?>

      <?php query_posts("showposts=4&cat=8"); ?>
        <h4 class="home-loop-title">Lorem ipsum dolor sit amet</h4>
        <div class="row">
          <?php get_template_part('loop'); ?>
        </div>
      <?php wp_reset_query(); ?>
    </article><!-- category-looper col-md-8 -->

    <?php get_sidebar(); ?>

  </div>

  <div class="row inner cat-description">
    <div class="col-md-8">
      <?php the_content(); ?>
    </div><!-- col-md-12 -->
  </div><!-- row cat-description -->


<?php get_footer(); ?>
