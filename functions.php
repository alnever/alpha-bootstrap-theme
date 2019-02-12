<?php

	// load text domain
	load_theme_textdomain('alpha', get_template_directory().'/languages');

	// allow additional features within the theme
	add_theme_support('post-thumbnails');

	// register navigation menus
	register_nav_menus([
		'primary' => __('Primary menu', 'alpha'),
		'secondary' => __('Secondary menu', 'alpha'),
	]);
?>