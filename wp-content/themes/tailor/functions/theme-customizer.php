<?php
function tailor_theme_customizer( $wp_customize ) {
    /* sections */
    $wp_customize->add_section( 'tailor_basic_section' , array(
    'title'       => __( 'Basic Settings', 'tailor' ),
    'priority'    => 30,
	) );
        
	$wp_customize->add_section( 'tailor_social_icons_section', array(
		'title'          => __('Social Settings','tailor'),
		'priority'       => 35,
	) );
	
	$wp_customize->add_panel( 'home_id', array(
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Front Page Settings','tailor'),
		'description'    => '',
		'priority'    => 30,
	) );
	$wp_customize->add_section( 'tailor_silder_section' , array(
		'title'       => __( 'Slider Section', 'tailor' ),
		'priority'    => 30,
		'panel'  => 'home_id',
	) );

	$wp_customize->add_section( 'tailor_about_section' , array(
		'title'       => __( 'About Us Section', 'tailor' ),
		'priority'    => 30,
		'panel'  => 'home_id',
	) );
    $wp_customize->add_section( 'tailor_blog_section' , array(
		'title'       => __( 'Blog Section', 'tailor' ),
		'priority'    => 30,
		'panel'  => 'home_id',
	) );

	

	/* basic section */
	// blog title
	$wp_customize->add_setting( 'tailor_blogtitle', array(
            'default'        => ' ',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
   $wp_customize->add_control( 'tailor_blogtitle', array(
		'label'   => __('Blog Title','tailor'),
		'section' => 'tailor_basic_section',
		'type'    => 'text',
        ) );

	// copyright
	$wp_customize->add_setting( 'copyright_url_setting', array(
		'default'        => '',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'copyright_url_setting', array(
		'label'   => __('Copyright text','tailor'),
		'section' => 'tailor_basic_section',
		'type'    => 'text'
	) );
	// footer description
	$wp_customize->add_setting( 'tailor_footerdesc', array(
            'default'        => ' ',
            'sanitize_callback' => 'esc_textarea',
        ) );
   $wp_customize->add_control( 'tailor_footerdesc', array(
		'label'   => __('Footer Description','tailor'),
		'section' => 'tailor_basic_section',
		'type'    => 'textarea',
        ) );

	// Social Section
	$wp_customize->add_setting( 'twitter_setting', array(
		'default'        => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'twitter_setting', array(
		'label'   => __('Twitter URL','tailor'),
		'section' => 'tailor_social_icons_section',
		'type'    => 'text',
		'priority' => 1
	) );

	$wp_customize->add_setting( 'facebook_setting', array(
		'default'        => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'facebook_setting', array(
		'label'   => __('Facebook URL','tailor'),
		'section' => 'tailor_social_icons_section',
		'type'    => 'text',
		'priority' => 1
	) );
	
	$wp_customize->add_setting( 'youtube_setting', array(
		'default'        => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'youtube_setting', array(
		'label'   => __('YouTube URL','tailor'),
		'section' => 'tailor_social_icons_section',
		'type'    => 'text',
		'priority' => 1
	) );
	
	$wp_customize->add_setting( 'pinterest_setting', array(
		'default'        => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'pinterest_setting', array(
		'label'   => __('Pinterest URL','tailor'),
		'section' => 'tailor_social_icons_section',
		'type'    => 'text',
		'priority' => 1
	) );
	
	$wp_customize->add_setting( 'rss_setting', array(
		'default'        => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'rss_setting', array(
		'label'   => __('RSS Feed URL','tailor'),
		'section' => 'tailor_social_icons_section',
		'type'    => 'text',
		'priority' => 1
	) );   

	// home page	
	$wp_customize->add_setting( 'tailor_slidertitle', array(
		'default'        => '',
		'sanitize_callback' => 'sanitize_text_field',
	) );
    $wp_customize->add_control( 'tailor_slidertitle', array(
		'label'   => __('Slider Title','tailor'),
		'section' => 'tailor_silder_section',
		'type'    => 'text',
    ) );  
    $wp_customize->add_setting( 'tailor_slidersubtitle', array(
		'default'        => '',
		'sanitize_callback' => 'sanitize_text_field',
	) );
    $wp_customize->add_control( 'tailor_slidersubtitle', array(
		'label'   => __('Slider Subtitle','tailor'),
		'section' => 'tailor_silder_section',
		'type'    => 'text',
    ) );  
      $wp_customize->add_setting( 'tailor_class', array(
		'default'        => '',
		'sanitize_callback' => 'sanitize_text_field',
	) );
    $wp_customize->add_control( 'tailor_class', array(
		'label'   => __('Slider Class (fa-fa-user)','tailor'),
		'section' => 'tailor_silder_section',
		'type'    => 'text',
    ) );  
    $wp_customize->add_setting( 'tailor_button', array(
		'default'        => '',
		'sanitize_callback' => 'sanitize_text_field',
		
	) );
	$wp_customize->add_control( 'tailor_button', array(
		'label'   => __('Slider Button title','tailor'),
		'section' => 'tailor_silder_section',
		'type'    => 'text',
    ) ); 
     $wp_customize->add_setting( 'tailor_button_link', array(
		'default'        => '',
		'sanitize_callback' => 'sanitize_text_field',
		
	) );
	$wp_customize->add_control( 'tailor_button_link', array(
		'label'   => __('Slider Button Link','tailor'),
		'section' => 'tailor_silder_section',
		'type'    => 'text',
    ) );   
  $wp_customize->add_setting( 'tailor_header_image_bg',array(
		'sanitize_callback' => 'esc_url_raw',
		)
	);
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'tailor_header_image_bg', array(
			'label'    => __( 'Background Image (Recommended size 1280 x 853)', 'tailor' ),
			'section'  => 'tailor_silder_section',
			'settings' => 'tailor_header_image_bg',
		) 
	) );
        
   //About Us
	$wp_customize->add_setting( 'tailor_abouttitle', array(
		'default'        => '',
		'sanitize_callback' => 'sanitize_text_field',
	) );
    $wp_customize->add_control( 'tailor_abouttitle', array(
		'label'   => __('About Title','tailor'),
		'section' => 'tailor_about_section',
		'type'    => 'text',
    ) );
	$wp_customize->add_setting( 'tailor_aboutsubtitle', array(
		'default'        => '',
		'sanitize_callback' => 'sanitize_text_field',
	) );
    $wp_customize->add_control( 'tailor_aboutsubtitle', array(
		'label'   => __('About Subtitle','tailor'),
		'section' => 'tailor_about_section',
		'type'    => 'text',
    ) );
	 $wp_customize->add_setting( 'tailor_aboutinfo', array(
		'default'        => '',
		'sanitize_callback' => 'esc_textarea',
	) );
    $wp_customize->add_control( 'tailor_aboutinfo', array(
		'label'   => __('About Info','tailor'),
        'section' => 'tailor_about_section',
        'type'    => 'textarea',
   ) );
   $wp_customize->add_setting( 'tailor_about_image',array(
		'sanitize_callback' => 'esc_url_raw',
		)
	);
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'tailor_about_image', array(
			'label'    => __( 'Image (Recommended size 500 x 500)', 'tailor' ),
			'section'  => 'tailor_about_section',
			'settings' => 'tailor_about_image',
		) 
	) );
      
     //Blog Section
	$wp_customize->add_setting( 'tailor_blog-title', array(
		'default'        => '',
		'sanitize_callback' => 'sanitize_text_field',
	) );
    
    $wp_customize->add_control( 'tailor_blog-title', array(
		'label'   => __('Blog Title','tailor'),
        'section' => 'tailor_blog_section',
        'type'    => 'text'
    ) );
		
	$wp_customize->add_setting( 'tailor_bloginfo', array(
		'default'        => '',
		'sanitize_callback' => 'sanitize_text_field',
	) );
    
    $wp_customize->add_control( 'tailor_bloginfo', array(
		'label'   => __('Blog Subtitle','tailor'),
        'section' => 'tailor_blog_section',
        'type'    => 'text',
    ) );        
	
	 $wp_customize->add_setting( 'tailor_blogcategory', array(		
		'sanitize_callback' => 'tailor_sanitize_select',
				
	) );
    
    $wp_customize->add_control( 'tailor_blogcategory', array(
			'label'   => __('Select Category','tailor'),
            'section' => 'tailor_blog_section',
            'type'    => 'select',
            'choices' => tailor_post_category(),
        ) );         
}
add_action( 'customize_register', 'tailor_theme_customizer' );
function tailor_post_category(){
  $cats = array();
  $cats['']='Select Category';
  foreach ( get_categories() as $categories => $category ){
      $cats[$category->term_id] = $category->name;
  }
  return $cats;
}
function tailor_sanitize_select( $input, $setting ){         
//input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
$input = sanitize_key($input); 
//get the list of possible select options 
$choices = $setting->manager->get_control( $setting->id )->choices;                            
return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
}

function tailor_custom_css(){  ?>
<style type="text/css">
<?php if (get_theme_mod('tailor_header_image_bg','')!='' ){ ?>
.main-header { background-image :url('<?php echo esc_url(get_theme_mod('tailor_header_image_bg','')); ?>');
		background-position: center2; }
<?php } ?>
</style>
<?php }
add_action('wp_head','tailor_custom_css',900);