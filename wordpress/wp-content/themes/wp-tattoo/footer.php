    </div><!-- /.inner row-->
  </section><!-- /section -->
</div><!-- /wrapper -->

<footer role="contentinfo">
  <div class="inner row">

    <h6 class="copyright col-md-3">
      &copy; <?php echo date("Y"); ?> Собственность  <?php bloginfo('name'); ?>.
    </h6><!-- /copyright -->

    <?php wpeFootNav(); ?>

    <ul class="social col-md-2">
      <li>
        <a rel="nofollow" href=""><i class="fa fa-vk"></i></a>
      </li>
      <li>
        <a rel="nofollow" href=""><i class="fa fa-facebook"></i></a>
      </li>
      <li>
        <a rel="nofollow" href=""><i class="fa fa-odnoklassniki"></i></a>
      </li>
    </ul>
    <!-- /.social -->

  </div><!-- /.inner -->
</footer><!-- /footer -->

    <?php wp_footer(); ?>

<script>
$(document).ready(function() {
  $('.pgwSlider').pgwSlider({
      maxHeight : 360
    }
  );
});
</script>



</body>
</html>
