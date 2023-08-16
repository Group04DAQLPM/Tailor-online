<?php 

	$expert_tailor_custom_style = '';

	// Logo Size
	$expert_tailor_logo_top_padding = get_theme_mod('expert_tailor_logo_top_padding');
	$expert_tailor_logo_bottom_padding = get_theme_mod('expert_tailor_logo_bottom_padding');
	$expert_tailor_logo_left_padding = get_theme_mod('expert_tailor_logo_left_padding');
	$expert_tailor_logo_right_padding = get_theme_mod('expert_tailor_logo_right_padding');

	if( $expert_tailor_logo_top_padding != '' || $expert_tailor_logo_bottom_padding != '' || $expert_tailor_logo_left_padding != '' || $expert_tailor_logo_right_padding != ''){
		$expert_tailor_custom_style .=' .logo {';
			$expert_tailor_custom_style .=' padding-top: '.esc_attr($expert_tailor_logo_top_padding).'px;
			padding-bottom: '.esc_attr($expert_tailor_logo_bottom_padding).'px;
			padding-left: '.esc_attr($expert_tailor_logo_left_padding).'px;
			padding-right: '.esc_attr($expert_tailor_logo_right_padding).'px;';
		$expert_tailor_custom_style .=' }';
	}

	// Site Title Font Size
	$expert_tailor_site_title_font_size = get_theme_mod('expert_tailor_site_title_font_size');
	if( $expert_tailor_site_title_font_size != ''){
		$expert_tailor_custom_style .=' .logo h1.site-title, .logo p.site-title {';
			$expert_tailor_custom_style .=' font-size: '.esc_attr($expert_tailor_site_title_font_size).'px;';
		$expert_tailor_custom_style .=' }';
	}

	// Site Tagline Font Size
	$expert_tailor_site_tagline_font_size = get_theme_mod('expert_tailor_site_tagline_font_size');
	if( $expert_tailor_site_tagline_font_size != ''){
		$expert_tailor_custom_style .=' .logo p.site-description {';
			$expert_tailor_custom_style .=' font-size: '.esc_attr($expert_tailor_site_tagline_font_size).'px;';
		$expert_tailor_custom_style .=' }';
	}

	// Copyright padding
	$expert_tailor_copyright_padding = get_theme_mod('expert_tailor_copyright_padding');

	if( $expert_tailor_copyright_padding != ''){
		$expert_tailor_custom_style .=' .site-info {';
			$expert_tailor_custom_style .=' padding-top: '.esc_attr($expert_tailor_copyright_padding).'px; padding-bottom: '.esc_attr($expert_tailor_copyright_padding).'px;';
		$expert_tailor_custom_style .=' }';
	}

	$expert_tailor_copyright_color = get_theme_mod('expert_tailor_copyright_color');
	if ( $expert_tailor_copyright_color != '') {
		$expert_tailor_custom_style .=' .site-info p a {';
			$expert_tailor_custom_style .=' color:'.esc_attr($expert_tailor_copyright_color).';';
		$expert_tailor_custom_style .=' }';
	}

	$expert_tailor_copyrightbg_color = get_theme_mod('expert_tailor_copyrightbg_color');
	if ( $expert_tailor_copyrightbg_color != '') {
		$expert_tailor_custom_style .=' .copyright {';
			$expert_tailor_custom_style .=' backgroud-color:'.esc_attr($expert_tailor_copyrightbg_color).';';
		$expert_tailor_custom_style .=' }';
	}

	// Header Image
	$header_image_url = expert_tailor_banner_image( $image_url = '' );
	if( $header_image_url != ''){
		$expert_tailor_custom_style .=' #inner-pages-header {';
			$expert_tailor_custom_style .=' background-image: url('. esc_url( $header_image_url ).'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;';
		$expert_tailor_custom_style .=' }';
		$expert_tailor_custom_style .=' .header-overlay {';
			$expert_tailor_custom_style .=' position: absolute; 	width: 100%; height: 100%; 	top: 0; left: 0; background: #000; opacity: 0.2;';
		$expert_tailor_custom_style .=' }';
	} else {
		$expert_tailor_custom_style .=' #inner-pages-header {';
			$expert_tailor_custom_style .=' background: linear-gradient(0deg,#9fd5f1,#aeb6bf 80%) no-repeat; ';
		$expert_tailor_custom_style .=' }';
	}

	$expert_tailor_slider_hide_show = get_theme_mod('expert_tailor_slider_hide_show',false);
	if( $expert_tailor_slider_hide_show == true){
		$expert_tailor_custom_style .=' .page-template-custom-home-page #inner-pages-header {';
			$expert_tailor_custom_style .=' display:none;';
		$expert_tailor_custom_style .=' }';
	}

	//topbar color
	$expert_tailor_toptext_color = get_theme_mod('expert_tailor_toptext_color');
	if ( $expert_tailor_toptext_color != '') {
		$expert_tailor_custom_style .=' .top-header a, .top-header p, .top-header .timing span, .top-header i {';
			$expert_tailor_custom_style .=' color:'.esc_attr($expert_tailor_toptext_color).';';
		$expert_tailor_custom_style .=' }';
	}

	$expert_tailor_topbtn_color = get_theme_mod('expert_tailor_topbtn_color');
	$expert_tailor_topbtnbg_color = get_theme_mod('expert_tailor_topbtnbg_color');

	if ( $expert_tailor_topbtn_color != '') {
		$expert_tailor_custom_style .=' .top-header span.appointment-btn a {';
			$expert_tailor_custom_style .=' color:'.esc_attr($expert_tailor_topbtn_color).'; background-color:'.esc_attr($expert_tailor_topbtnbg_color).';';
		$expert_tailor_custom_style .=' }';
	}

	$expert_tailor_topbg_color = get_theme_mod('expert_tailor_topbg_color');
	if ( $expert_tailor_topbg_color != '') {
		$expert_tailor_custom_style .=' .page-template-custom-home-page .top-header {';
			$expert_tailor_custom_style .=' background-color:'.esc_attr($expert_tailor_topbg_color).';';
		$expert_tailor_custom_style .=' }';
	}

	//Midle header color
	$expert_tailor_peicon_color = get_theme_mod('expert_tailor_peicon_color');
	if ( $expert_tailor_peicon_color != '') {
		$expert_tailor_custom_style .=' .middle-header .mail i, .middle-header .location i {';
			$expert_tailor_custom_style .=' color:'.esc_attr($expert_tailor_peicon_color).';';
		$expert_tailor_custom_style .=' }';
	}

	$expert_tailor_midletext_color = get_theme_mod('expert_tailor_midletext_color');
	if ( $expert_tailor_midletext_color != '') {
		$expert_tailor_custom_style .=' .middle-header .mail span, .middle-header .location span {';
			$expert_tailor_custom_style .=' color:'.esc_attr($expert_tailor_midletext_color).';';
		$expert_tailor_custom_style .=' }';
	}

	$expert_tailor_midleicon_color = get_theme_mod('expert_tailor_midleicon_color');
	if ( $expert_tailor_midleicon_color != '') {
		$expert_tailor_custom_style .=' .social-icons i {';
			$expert_tailor_custom_style .=' color:'.esc_attr($expert_tailor_midleicon_color).';';
		$expert_tailor_custom_style .=' }';
	}

	$expert_tailor_midleiconhvr_color = get_theme_mod('expert_tailor_midleiconhvr_color');
	if ( $expert_tailor_midleiconhvr_color != '') {
		$expert_tailor_custom_style .=' .social-icons i:hover {';
			$expert_tailor_custom_style .=' background-color:'.esc_attr($expert_tailor_midleiconhvr_color).';';
		$expert_tailor_custom_style .=' }';
	}

	//bottom header color
	$expert_tailor_topheader_phone_no_color = get_theme_mod('expert_tailor_topheader_phone_no_color');
	if ( $expert_tailor_topheader_phone_no_color != '') {
		$expert_tailor_custom_style .=' .bottom-header .phone p.callno, .bottom-header .phone p {';
			$expert_tailor_custom_style .=' color:'.esc_attr($expert_tailor_topheader_phone_no_color).';';
		$expert_tailor_custom_style .=' }';
	}

	$expert_tailor_topheader_phonebg_color = get_theme_mod('expert_tailor_topheader_phonebg_color');
	if ( $expert_tailor_topheader_phonebg_color != '') {
		$expert_tailor_custom_style .=' .bottom-header .phone {';
			$expert_tailor_custom_style .=' background-color:'.esc_attr($expert_tailor_topheader_phonebg_color).';';
		$expert_tailor_custom_style .=' }';
	}

	$expert_tailor_menu_color = get_theme_mod('expert_tailor_menu_color');
	if ( $expert_tailor_menu_color != '') {
		$expert_tailor_custom_style .=' .nav-menu ul li a {';
			$expert_tailor_custom_style .=' color:'.esc_attr($expert_tailor_menu_color).';';
		$expert_tailor_custom_style .=' }';
	}

	$expert_tailor_submenu_color = get_theme_mod('expert_tailor_submenu_color');
	if ( $expert_tailor_submenu_color != '') {
		$expert_tailor_custom_style .=' .nav-menu ul ul a {';
			$expert_tailor_custom_style .=' color:'.esc_attr($expert_tailor_submenu_color).';';
		$expert_tailor_custom_style .=' }';
	}

	$expert_tailor_menuhvrbg_color = get_theme_mod('expert_tailor_menuhvrbg_color');
	if ( $expert_tailor_menuhvrbg_color != '') {
		$expert_tailor_custom_style .=' .nav-menu ul li:hover, .nav-menu ul li:after {';
			$expert_tailor_custom_style .=' background-color:'.esc_attr($expert_tailor_menuhvrbg_color).'; border-top-color:'.esc_attr($expert_tailor_menuhvrbg_color).';';
		$expert_tailor_custom_style .=' }';
	}

	//Slider color
	$expert_tailor_slidertitle_color = get_theme_mod('expert_tailor_slidertitle_color');
	if ( $expert_tailor_slidertitle_color != '') {
		$expert_tailor_custom_style .=' #slider .inner_carousel h2 {';
			$expert_tailor_custom_style .=' color:'.esc_attr($expert_tailor_slidertitle_color).';';
		$expert_tailor_custom_style .=' }';
	}

	$expert_tailor_slidertext_color = get_theme_mod('expert_tailor_slidertext_color');
	if ( $expert_tailor_slidertext_color != '') {
		$expert_tailor_custom_style .=' #slider .inner_carousel p {';
			$expert_tailor_custom_style .=' color:'.esc_attr($expert_tailor_slidertext_color).';';
		$expert_tailor_custom_style .=' }';
	}

	$expert_tailor_sliderbtn_color = get_theme_mod('expert_tailor_sliderbtn_color');
	$expert_tailor_sliderbtnbg_color = get_theme_mod('expert_tailor_sliderbtnbg_color');

	if ( $expert_tailor_sliderbtn_color != '') {
		$expert_tailor_custom_style .=' #slider a.read-btn {';
			$expert_tailor_custom_style .=' color:'.esc_attr($expert_tailor_sliderbtn_color).'; background-color:'.esc_attr($expert_tailor_sliderbtnbg_color).';';
		$expert_tailor_custom_style .=' }';
	}

	//Service color
	$expert_tailor_service_color = get_theme_mod('expert_tailor_service_color');
	if ( $expert_tailor_service_color != '') {
		$expert_tailor_custom_style .=' #services-section .service-box h3 {';
			$expert_tailor_custom_style .=' color:'.esc_attr($expert_tailor_service_color).';';
		$expert_tailor_custom_style .=' }';
	}

	$expert_tailor_servicebg_color = get_theme_mod('expert_tailor_servicebg_color');
	if ( $expert_tailor_servicebg_color != '') {
		$expert_tailor_custom_style .=' #services-section .service-box .service-content {';
			$expert_tailor_custom_style .=' background-color:'.esc_attr($expert_tailor_servicebg_color).';';
		$expert_tailor_custom_style .=' }';
	}