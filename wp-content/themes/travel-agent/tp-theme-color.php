<?php

	$adventure_travelling_tp_color_option = get_theme_mod('adventure_travelling_tp_color_option');
	$adventure_travelling_tp_color_option_link = get_theme_mod('adventure_travelling_tp_color_option_link');

	$adventure_travelling_tp_theme_css = '';

	if($adventure_travelling_tp_color_option != false){
		$adventure_travelling_tp_theme_css .='.search-box i,.prev.page-numbers, .next.page-numbers,.page-numbers,#theme-sidebar button[type="submit"], #footer button[type="submit"],span.meta-nav,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,#comments input[type="submit"],button[type="submit"],.error-404 [type="submit"],.headerbox,.main-navigation ul ul,.more-btn a,#slider .carousel-control-prev-icon, #slider .carousel-control-next-icon,.blog-info,.toggle-nav i{';
			$adventure_travelling_tp_theme_css .='background-color: '.esc_attr($adventure_travelling_tp_color_option).';';
		$adventure_travelling_tp_theme_css .='}';
	}
	if($adventure_travelling_tp_color_option != false){
		$adventure_travelling_tp_theme_css .='a,.box-content a, #theme-sidebar .textwidget a, #footer .textwidget a, .comment-body a, .entry-content a, .entry-summary a,.main-navigation a:hover,#theme-sidebar h3,#theme-sidebar a:hover,.main-navigation .current_page_item > a, .main-navigation .current-menu-item > a, .main-navigation .current_page_ancestor > a{';
			$adventure_travelling_tp_theme_css .='color: '.esc_attr($adventure_travelling_tp_color_option).';';
		$adventure_travelling_tp_theme_css .='}';
	}
	if($adventure_travelling_tp_color_option != false){
		$adventure_travelling_tp_theme_css .='.menubar,.woocommerce-info,.search_inner form.search-form,#static-blog h3{';
			$adventure_travelling_tp_theme_css .='border-color: '.esc_attr($adventure_travelling_tp_color_option).';';
		$adventure_travelling_tp_theme_css .='}';
	}
	if($adventure_travelling_tp_color_option_link != false){
		$adventure_travelling_tp_theme_css .='{';
			$adventure_travelling_tp_theme_css .='background: '.esc_attr($adventure_travelling_tp_color_option_link).';';
		$adventure_travelling_tp_theme_css .='}';
	}
	if($adventure_travelling_tp_color_option_link != false){
		$adventure_travelling_tp_theme_css .='@media screen and (max-width:767px){
				.sidenav,.main-navigation ul ul{';
				$adventure_travelling_tp_theme_css .='background: '.esc_attr($adventure_travelling_tp_color_option_link).';';
			$adventure_travelling_tp_theme_css .='} }';
	}
	if($adventure_travelling_tp_color_option_link != false){
		$adventure_travelling_tp_theme_css .='#theme-sidebar a:hover,.search-box i,.call i, .email i,p.infotext,.logo a,.page-numbers,#theme-sidebar button[type="submit"], #footer button[type="submit"],span.meta-nav,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,#comments input[type="submit"],button[type="submit"],.more-btn a,.blog-info{';
			$adventure_travelling_tp_theme_css .='color: '.esc_attr($adventure_travelling_tp_color_option_link).';';
		$adventure_travelling_tp_theme_css .='}';
	}
