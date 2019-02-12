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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <!-- script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script -->

    <!-- my scripts -->
    <script src="<?php _e(get_template_directory_uri()); ?>/js/index.js"></script>
    <!-- wp_footer -->
    <?php wp_footer(); ?>
  </body>
</html>
