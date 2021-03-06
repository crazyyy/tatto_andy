<?php /* Template Name: Home Page Template */ get_header(); ?>

  <?php if( have_rows('slider') ): ?>
    <div class="home-slider col-md-12">
      <ul class="pgwSlider">
      <?php while( have_rows('slider') ): the_row();
        // vars
        $image = get_sub_field('img');
        $button = get_sub_field('button-text');
        $content = get_sub_field('img-text');
        $link = get_sub_field('link');
        ?>

          <li>
            <a href="<?php echo $link; ?>" target="_blank">
              <img src="<?php echo $image; ?>" data-description="<?php echo $content; ?>">
              <span><?php echo $button; ?></span>
            </a>
          </li>
      <?php endwhile; ?>
      </ul>
    </div><!-- /.home-slider col-md-12 -->
  <?php endif; ?>

  </div><!-- inner row -->

  <div class="inner row">

    <article class="category-looper col-md-8">
      <h4 class="home-loop-title">Брови</h4>
      <?php query_posts("showposts=4&cat=2"); ?>
        <div class="row">
          <?php get_template_part('loop'); ?>
        </div>
      <?php wp_reset_query(); ?>

      <?php query_posts("showposts=4&cat=1"); ?>
        <h4 class="home-loop-title">Глаза</h4>
        <div class="row">
          <?php get_template_part('loop'); ?>
        </div>
      <?php wp_reset_query(); ?>

      <?php query_posts("showposts=4&cat=3"); ?>
        <h4 class="home-loop-title">Губы</h4>
        <div class="row">
          <?php get_template_part('loop'); ?>
        </div>
      <?php wp_reset_query(); ?>

      <?php query_posts("showposts=4&cat=5"); ?>
        <h4 class="home-loop-title">Советы</h4>
        <div class="row">
          <?php get_template_part('loop'); ?>
        </div>
      <?php wp_reset_query(); ?>
    </article><!-- category-looper col-md-8 -->

    <?php get_sidebar('home'); ?>

  </div>

  <div class="row inner cat-description">
    <div class="col-md-8">
      <?php the_content(); ?>
    </div><!-- col-md-12 -->
  </div><!-- row cat-description -->


<?php get_footer(); ?>
