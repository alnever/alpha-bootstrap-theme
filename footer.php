    <!-- footer widgets -->
    <div class="container p-0 mb-2">
        <div class="row m-0">
            <div class="col-4 p-2">
                <?php dynamic_sidebar('footer_left_area'); ?>
            </div>
            <div class="col-4 p-2">
                <?php dynamic_sidebar('footer_center_area'); ?>
            </div>
            <div class="col-4 p-2">
                <?php dynamic_sidebar('footer_right_area'); ?>
            </div>
        </div>
    </div>
    <!-- site footer -->
    <div class="container p-0">
      <div class="jumbotron">
        <p class="text-center">Bootstrap Wordpress Theme: Alpha &copy; Alex Neverov, 2019</p>
        <p class="text-center">All rights reserved</p>
      </div>
    </div>

    <!-- Bootstarp scripts -->
    <script src="<?php _e(get_template_directory_uri()); ?>/js/jquery.min.js" charset="utf-8"></script>
    <script src="<?php _e(get_template_directory_uri()); ?>/js/popper.min.js" charset="utf-8"></script>
    <script src="<?php _e(get_template_directory_uri()); ?>/js/bootstrap.min.js" charset="utf-8"></script>

    <!-- my scripts -->
    <script src="<?php _e(get_template_directory_uri()); ?>/js/index.js"></script>
    <!-- wp_footer -->
    <?php wp_footer(); ?>
  </body>
</html>
