<?php
/**
 * Expert Tailor: Customizer
 *
 * @subpackage Expert Tailor
 * @since 1.0
 */

use WPTRT\Customize\Section\Expert_Tailor_Button;

add_action( 'customize_register', function( $manager ) {

	$manager->register_section_type( Expert_Tailor_Button::class );

	$manager->add_section(
		new Expert_Tailor_Button( $manager, 'expert_tailor_pro', [
			'title'      => __( 'Expert Tailor Pro', 'expert-tailor' ),
			'priority'    => 0,
			'button_text' => __( 'Go Pro', 'expert-tailor' ),
			'button_url'  => esc_url( 'https://www.luzuk.com/products/tailor-wordpress-theme/', 'expert-tailor')
		] )
	);

} );

// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'expert-tailor-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/js/customize-controls.js' ),
		[ 'customize-controls' ],
		$version,
		true
	);

	wp_enqueue_style(
		'expert-tailor-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/css/customize-controls.css' ),
		[ 'customize-controls' ],
 		$version
	);

} );

function expert_tailor_customize_register( $wp_customize ) {

	$wp_customize->add_setting('expert_tailor_logo_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('expert_tailor_logo_padding',array(
		'label' => __('Logo Padding','expert-tailor'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('expert_tailor_logo_top_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'expert_tailor_sanitize_float'
	));
	$wp_customize->add_control('expert_tailor_logo_top_padding',array(
		'type' => 'number',
		'description' => __('Top','expert-tailor'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('expert_tailor_logo_bottom_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'expert_tailor_sanitize_float'
	));
	$wp_customize->add_control('expert_tailor_logo_bottom_padding',array(
		'type' => 'number',
		'description' => __('Bottom','expert-tailor'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('expert_tailor_logo_left_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'expert_tailor_sanitize_float'
	));
	$wp_customize->add_control('expert_tailor_logo_left_padding',array(
		'type' => 'number',
		'description' => __('Left','expert-tailor'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('expert_tailor_logo_right_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'expert_tailor_sanitize_float'
	));
	$wp_customize->add_control('expert_tailor_logo_right_padding',array(
		'type' => 'number',
		'description' => __('Right','expert-tailor'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('expert_tailor_show_site_title',array(
		'default' => true,
		'sanitize_callback'	=> 'expert_tailor_sanitize_checkbox'
	));
	$wp_customize->add_control('expert_tailor_show_site_title',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Title','expert-tailor'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('expert_tailor_show_site_title_color',array(
		'default' => '#fff',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_tailor_show_site_title_color',array(
		'type' => 'color',
		'label' => __('Site Title Color','expert-tailor'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('expert_tailor_site_title_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'expert_tailor_sanitize_float'
	));
	$wp_customize->add_control('expert_tailor_site_title_font_size',array(
		'type' => 'number',
		'label' => __('Site Title Font Size','expert-tailor'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('expert_tailor_show_tagline',array(
		'default' => true,
		'sanitize_callback'	=> 'expert_tailor_sanitize_checkbox'
	));
	$wp_customize->add_control('expert_tailor_show_tagline',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Tagline','expert-tailor'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('expert_tailor_site_tagline_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'expert_tailor_sanitize_float'
	));
	$wp_customize->add_control('expert_tailor_site_tagline_font_size',array(
		'type' => 'number',
		'label' => __('Site Tagline Font Size','expert-tailor'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_panel( 'expert_tailor_panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Settings', 'expert-tailor' ),
		'description' => __( 'Description of what this panel does.', 'expert-tailor' ),
	) );

	$wp_customize->add_section( 'expert_tailor_theme_options_section', array(
    	'title'      => __( 'General Settings', 'expert-tailor' ),
		'priority'   => 30,
		'panel' => 'expert_tailor_panel_id'
	) );

	$wp_customize->add_setting('expert_tailor_theme_options',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'expert_tailor_sanitize_choices'
	));
	$wp_customize->add_control('expert_tailor_theme_options',array(
		'type' => 'radio',
		'label' => __('Do you want this section','expert-tailor'),
		'section' => 'expert_tailor_theme_options_section',
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','expert-tailor'),
		   'Right Sidebar' => __('Right Sidebar','expert-tailor'),
		   'One Column' => __('One Column','expert-tailor'),
		   'Three Columns' => __('Three Columns','expert-tailor'),
		   'Four Columns' => __('Four Columns','expert-tailor'),
		   'Grid Layout' => __('Grid Layout','expert-tailor')
		),
	));

	//Top Header
	$wp_customize->add_section( 'expert_tailor_top_header_section' , array(
    	'title'    => __( 'Top Header', 'expert-tailor' ),
		'priority' => null,
		'panel' => 'expert_tailor_panel_id'
	) );

	$wp_customize->add_setting('expert_tailor_hide_show_topbar',array(
    	'default' => false,
    	'sanitize_callback'	=> 'expert_tailor_sanitize_checkbox'
	));
	$wp_customize->add_control('expert_tailor_hide_show_topbar',array(
	   	'type' => 'checkbox',
	   	'label' => __('Show / Hide Topbar','expert-tailor'),
	   	'section' => 'expert_tailor_top_header_section',
	));

	$wp_customize->add_setting('expert_tailor_topheader_text',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_tailor_topheader_text',array(
	   	'type' => 'text',
	   	'label' => __('Add Text','expert-tailor'),
	   	'section' => 'expert_tailor_top_header_section',
	));

	$wp_customize->add_setting('expert_tailor_topheader_timing',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_tailor_topheader_timing',array(
	   	'type' => 'text',
	   	'label' => __('Add Timing','expert-tailor'),
	   	'section' => 'expert_tailor_top_header_section',
	));

	$wp_customize->add_setting('expert_tailor_appointment_btn_text',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_tailor_appointment_btn_text',array(
   	'type' => 'text',
   	'label' => __('Add Appointment Button Text','expert-tailor'),
   	'section' => 'expert_tailor_top_header_section',
	));

	$wp_customize->add_setting('expert_tailor_appointment_btn_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('expert_tailor_appointment_btn_url',array(
   	'type' => 'url',
   	'label' => __('Add Appointment Button URL','expert-tailor'),
   	'section' => 'expert_tailor_top_header_section',
	));

	$wp_customize->add_setting( 'expert_tailor_toptext_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'expert_tailor_toptext_color', array(
		'label' => 'Text Color',
		'section' => 'expert_tailor_top_header_section',
	)));

	$wp_customize->add_setting( 'expert_tailor_topbtn_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'expert_tailor_topbtn_color', array(
		'label' => 'Button Text Color',
		'section' => 'expert_tailor_top_header_section',
	)));

	$wp_customize->add_setting( 'expert_tailor_topbtnbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'expert_tailor_topbtnbg_color', array(
		'label' => 'Button Bg Color',
		'section' => 'expert_tailor_top_header_section',
	)));

	$wp_customize->add_setting( 'expert_tailor_topbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'expert_tailor_topbg_color', array(
		'label' => 'Background Color',
		'section' => 'expert_tailor_top_header_section',
	)));

	//Middle Header
	$wp_customize->add_section( 'expert_tailor_middle_header_section' , array(
    	'title'    => __( 'Middle Header', 'expert-tailor' ),
		'priority' => null,
		'panel' => 'expert_tailor_panel_id'
	) );

	$wp_customize->add_setting('expert_tailor_topheader_mail',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_email'
	));
	$wp_customize->add_control('expert_tailor_topheader_mail',array(
   	'type' => 'text',
   	'label' => __('Add Email Address','expert-tailor'),
   	'section' => 'expert_tailor_middle_header_section',
	));

	$wp_customize->add_setting('expert_tailor_topheader_location',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_tailor_topheader_location',array(
   	'type' => 'text',
   	'label' => __('Add Location','expert-tailor'),
   	'section' => 'expert_tailor_middle_header_section',
	));

	$wp_customize->add_setting('expert_tailor_topheader_facebook_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('expert_tailor_topheader_facebook_url',array(
   	'type' => 'url',
   	'label' => __('Add Facebook URL','expert-tailor'),
   	'section' => 'expert_tailor_middle_header_section',
	));

	$wp_customize->add_setting('expert_tailor_topheader_twitter_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('expert_tailor_topheader_twitter_url',array(
   	'type' => 'url',
   	'label' => __('Add Twitter URL','expert-tailor'),
   	'section' => 'expert_tailor_middle_header_section',
	));

	$wp_customize->add_setting('expert_tailor_topheader_youtube_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('expert_tailor_topheader_youtube_url',array(
	   	'type' => 'url',
	   	'label' => __('Add Youtube URL','expert-tailor'),
	   	'section' => 'expert_tailor_middle_header_section',
	));

	$wp_customize->add_setting('expert_tailor_topheader_instagram_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('expert_tailor_topheader_instagram_url',array(
	   	'type' => 'url',
	   	'label' => __('Add Instagram URL','expert-tailor'),
	   	'section' => 'expert_tailor_middle_header_section',
	));

	$wp_customize->add_setting('expert_tailor_topheader_pinterest_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('expert_tailor_topheader_pinterest_url',array(
	   	'type' => 'url',
	   	'label' => __('Add Pinterest URL','expert-tailor'),
	   	'section' => 'expert_tailor_middle_header_section',
	));

	$wp_customize->add_setting( 'expert_tailor_peicon_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'expert_tailor_peicon_color', array(
		'label' => 'Phone, Email Icon Color',
		'section' => 'expert_tailor_middle_header_section',
	)));

	$wp_customize->add_setting( 'expert_tailor_midletext_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'expert_tailor_midletext_color', array(
		'label' => 'Text Color',
		'section' => 'expert_tailor_middle_header_section',
	)));

	$wp_customize->add_setting( 'expert_tailor_midleicon_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'expert_tailor_midleicon_color', array(
		'label' => 'Social Icon Color',
		'section' => 'expert_tailor_middle_header_section',
	)));

	$wp_customize->add_setting( 'expert_tailor_midleiconhvr_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'expert_tailor_midleiconhvr_color', array(
		'label' => 'Social Icon Hover Bg Color',
		'section' => 'expert_tailor_middle_header_section',
	)));

	//Bottom Header
	$wp_customize->add_section( 'expert_tailor_header_section' , array(
    	'title'    => __( 'Bottom Header', 'expert-tailor' ),
		'priority' => null,
		'panel' => 'expert_tailor_panel_id'
	) );

	$wp_customize->add_setting('expert_tailor_topheader_phone_no',array(
    	'default' => '',
    	'sanitize_callback' => 'expert_tailor_sanitize_phone_number'
	));
	$wp_customize->add_control('expert_tailor_topheader_phone_no',array(
	   	'type' => 'text',
	   	'label' => __('Add Phone Number','expert-tailor'),
	   	'section' => 'expert_tailor_header_section',
	));

	$wp_customize->add_setting('expert_tailor_topheader_phone_text',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_tailor_topheader_phone_text',array(
	   	'type' => 'text',
	   	'label' => __('Add Phone Text','expert-tailor'),
	   	'section' => 'expert_tailor_header_section',
	));

	$wp_customize->add_setting( 'expert_tailor_topheader_phone_no_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'expert_tailor_topheader_phone_no_color', array(
		'label' => 'Color',
		'section' => 'expert_tailor_header_section',
	)));

	$wp_customize->add_setting( 'expert_tailor_topheader_phonebg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'expert_tailor_topheader_phonebg_color', array(
		'label' => 'Background Color',
		'section' => 'expert_tailor_header_section',
	)));

	$wp_customize->add_setting( 'expert_tailor_menu_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'expert_tailor_menu_color', array(
		'label' => 'Menu Color',
		'section' => 'expert_tailor_header_section',
	)));

	$wp_customize->add_setting( 'expert_tailor_submenu_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'expert_tailor_submenu_color', array(
		'label' => 'Submenu Color',
		'section' => 'expert_tailor_header_section',
	)));

	$wp_customize->add_setting( 'expert_tailor_menuhvrbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'expert_tailor_menuhvrbg_color', array(
		'label' => 'Menu Hover Bg Color',
		'section' => 'expert_tailor_header_section',
	)));

	//home page slider
	$wp_customize->add_section( 'expert_tailor_slider_section' , array(
    	'title'    => __( 'Slider Settings', 'expert-tailor' ),
		'priority' => null,
		'panel' => 'expert_tailor_panel_id'
	) );

	$wp_customize->add_setting('expert_tailor_slider_hide_show',array(
    	'default' => false,
    	'sanitize_callback'	=> 'expert_tailor_sanitize_checkbox'
	));
	$wp_customize->add_control('expert_tailor_slider_hide_show',array(
	   	'type' => 'checkbox',
	   	'label' => __('Show / Hide Slider','expert-tailor'),
	   	'section' => 'expert_tailor_slider_section',
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'expert_tailor_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'expert_tailor_sanitize_dropdown_pages'
		));
		$wp_customize->add_control( 'expert_tailor_slider' . $count, array(
			'label' => __('Select Slider Image Page', 'expert-tailor' ),
			'description' => __('Image Size (1400px x 650px)', 'expert-tailor' ),
			'section' => 'expert_tailor_slider_section',
			'type' => 'dropdown-pages'
		));
	}

	$wp_customize->add_setting( 'expert_tailor_slidertitle_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'expert_tailor_slidertitle_color', array(
		'label' => 'Title Color',
		'section' => 'expert_tailor_slider_section',
	)));

	$wp_customize->add_setting( 'expert_tailor_slidertext_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'expert_tailor_slidertext_color', array(
		'label' => 'Text Color',
		'section' => 'expert_tailor_slider_section',
	)));

	$wp_customize->add_setting( 'expert_tailor_sliderbtn_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'expert_tailor_sliderbtn_color', array(
		'label' => 'Button Text Color',
		'section' => 'expert_tailor_slider_section',
	)));

	$wp_customize->add_setting( 'expert_tailor_sliderbtnbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'expert_tailor_sliderbtnbg_color', array(
		'label' => 'Button Bg Color',
		'section' => 'expert_tailor_slider_section',
	)));

	//Services Section
	$wp_customize->add_section('expert_tailor_services_section',array(
		'title'	=> __('Services Section','expert-tailor'),
		'description'=> __('<b>Note :</b> This section will appear below the slider.','expert-tailor'),
		'panel' => 'expert_tailor_panel_id',
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_pst[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_pst[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('expert_tailor_service_category',array(
		'default' => 'select',
		'sanitize_callback' => 'expert_tailor_sanitize_choices',
	));
	$wp_customize->add_control('expert_tailor_service_category',array(
		'type' => 'select',
		'choices' => $cat_pst,
		'label' => __('Select Category To Display Post','expert-tailor'),
		'section' => 'expert_tailor_services_section',
	));

	$wp_customize->add_setting( 'expert_tailor_service_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'expert_tailor_service_color', array(
		'label' => 'Title Color',
		'section' => 'expert_tailor_services_section',
	)));

	$wp_customize->add_setting( 'expert_tailor_servicebg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'expert_tailor_servicebg_color', array(
		'label' => 'Box Bg Color',
		'section' => 'expert_tailor_services_section',
	)));
	
	//Footer
    $wp_customize->add_section( 'expert_tailor_footer', array(
    	'title'  => __( 'Footer Settings', 'expert-tailor' ),
		'priority' => null,
		'panel' => 'expert_tailor_panel_id'
	) );

	$wp_customize->add_setting('expert_tailor_show_back_totop',array(
 		'default' => true,
   		'sanitize_callback'	=> 'expert_tailor_sanitize_checkbox'
	));
	$wp_customize->add_control('expert_tailor_show_back_totop',array(
	   	'type' => 'checkbox',
	   	'label' => __('Show / Hide Back to Top','expert-tailor'),
	   	'section' => 'expert_tailor_footer'
	));

    $wp_customize->add_setting('expert_tailor_footer_copy',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('expert_tailor_footer_copy',array(
		'label'	=> __('Copyright Text','expert-tailor'),
		'section' => 'expert_tailor_footer',
		'setting' => 'expert_tailor_footer_copy',
		'type' => 'text'
	));

	$wp_customize->add_setting('expert_tailor_copyright_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'expert_tailor_sanitize_float'
 	));
 	$wp_customize->add_control('expert_tailor_copyright_padding',array(
		'type' => 'number',
		'label' => __('Copyright Top Bottom Padding','expert-tailor'),
		'section' => 'expert_tailor_footer',
	));

	$wp_customize->add_setting( 'expert_tailor_copyright_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'expert_tailor_copyright_color', array(
		'label' => 'Text Color',
		'section' => 'expert_tailor_footer',
	)));

	$wp_customize->add_setting( 'expert_tailor_copyrightbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'expert_tailor_copyrightbg_color', array(
		'label' => 'Background Color',
		'section' => 'expert_tailor_footer',
	)));

	$wp_customize->register_section_type( Expert_Tailor_Button::class );

	$wp_customize->add_section(
		new Expert_Tailor_Button( $wp_customize, 'expert_tailor_pro_link', [
			'title'      => __( 'Expert Tailor Pro', 'expert-tailor' ),
			'priority'    => 0,
			'button_text' => __( 'Go Pro', 'expert-tailor' ),
			'button_url'  => esc_url( 'https://www.luzuk.com/products/tailor-wordpress-theme/', 'expert-tailor'),
			'panel' => 'expert_tailor_panel_id'
		] )
	);

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'expert_tailor_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'expert_tailor_customize_partial_blogdescription',
	) );
}
add_action( 'customize_register', 'expert_tailor_customize_register' );

function expert_tailor_customize_partial_blogname() {
	bloginfo( 'name' );
}

function expert_tailor_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function expert_tailor_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function expert_tailor_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}