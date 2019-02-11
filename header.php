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
	<div class="container-fluid p-0">
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

		  </div>
		</nav>
	</div>
