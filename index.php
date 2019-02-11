<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta lang="en">
<head>
	<title><?php _e(get_bloginfo('name'))?></title>

	<!-- styles -->
	<link rel="stylesheet" type="text/css" href="<?php _e(get_template_directory_uri()); ?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php _e(get_template_directory_uri()); ?>/css/style.css">
	<!-- wp_head -->
	<?php wp_head() ; ?>
</head>
<body>
	<!-- navigation -->
	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">

				<?php
					wp_nav_menu([
						'theme_location' => 'primary',
						'menu' => __('Primary manu', 'alpha'),
						'depth' => 3,
					]);
				?>

		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		  </div>
		</nav>
	</div>

	<!-- site header -->
	<div class="container">
		<div class="jumbotron">
			<h1 class="display-4">
				<?php bloginfo('name'); ?>
			</h1>
			<p class="lead">
				<?php bloginfo('description'); ?>
			</p>
		</div>
	</div>

	<!-- site body -->
	<div class="container">
		<?php if (have_posts()):  ?>
			<div class="row">
				<?php while(have_posts()): the_post(); ?>
					<div class="col-4">
						<?php if (has_post_thumbnail()): ?>
							<img src="<?php the_post_thumbnail_url(); ?>" />
						<?php endif; ?>
						<h3><?php the_title(); ?></h3>
						<p><?php the_excerpt(); ?></p>
						<div class="d-flex flex-row justify-content-end">
							<a href="<?php the_permalink(); ?>" class="btn btn-outline-primary">
								<?php _e('More...', 'alpha'); ?>
							</a>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
			<div class="d-flex flex-row justify-content-center">
				<?php _e(paginate_links()); ?>
			</div>
		<?php endif; ?>
	</div>



	<!-- site footer -->
	<div class="container">
		<div class="jumbotron">
			<p class="text-center">Bootstrap Wordpress Theme: Alpha &copy; Alex Neverov, 2019</p>
			<p class="text-center">All rights reserved</p>
		</div>
	</div>

	<!-- Bootstarp scripts -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

	<!-- my scripts -->
	<script src="<?php _e(get_template_directory_uri()); ?>/js/index.js"></script>
	<!-- wp_footer -->
	<?php wp_footer(); ?>
</body>
</html>
