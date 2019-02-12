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

	// register widget areas

	function register_widget_areas() {
		register_sidebar([
			'name' => __('Header search form','alpha'),
			'id' => 'header_search_form',
		]);
		register_sidebar([
			'name' => __('Header widgets','alpha'),
			'id' => 'header_widgets',
		]);
		register_sidebar([
			'name' => __('Right sidebar','alpha'),
			'id' => 'right_sidebar',
		]);
		register_sidebar([
			'name' => __('Footer left area','alpha'),
			'id' => 'footer_left_area',
		]);
		register_sidebar([
			'name' => __('Footer center area','alpha'),
			'id' => 'footer_center_area',
		]);
		register_sidebar([
			'name' => __('Footer right area','alpha'),
			'id' => 'footer_right_area',
		]);
	}

	add_action('widgets_init', 'register_widget_areas');
?>