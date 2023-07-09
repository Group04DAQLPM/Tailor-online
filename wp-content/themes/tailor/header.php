
<?php
/**
 * The Header template file
 */ ?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
    <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	
	<?php wp_head(); ?>
	
</head>
    <body <?php body_class(); ?>>
    <?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open();   }  ?>
     <!-- Header -->
          <?php if(is_page_template('page-template/front-page.php')){ 
			 $headerclass=" main-header";
			 $blurclass ="blur-img";
		 }
		 else{
			 $headerclass=" ";
			 $blurclass=" ";
		 }
		?>	 
			<header>
            <div class="<?php echo esc_attr($headerclass); ?>">
                <div class="<?php echo esc_attr($blurclass); ?>"></div>
                <!--top header start-->
                <div class="top-header">
                    <div class="container theme-container">
                         <!--logo start-->
                    <div class="col-md-3 col-sm-3 logo">
                       <?php if ( has_custom_logo( ) ) {  the_custom_logo(); } 
                        if(display_header_text()) { ?>
                          <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
        		  		      <h2 class="site-title"><?php bloginfo( 'name' ); ?></h2>
	           			      <span class="site-description"><?php bloginfo( 'description' ); ?></span>
                		 </a>
                        <?php } ?>
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle theme-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                    </div>
                    <!--logo end-->
                    <!--  menu start -->
                    <div class="col-md-9 col-sm-9 menu">
					<?php
					if (has_nav_menu('primary')) {						
						wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse theme-navbar ',
                        'container_id' => 'example-navbar-collapse',
                        'echo' => true,
                        'items_wrap' => '<ul id="%1$s" class="%2$s nav-inner" >%3$s</ul>',
                        'depth' => 0,
                    ));
					} ?>
                    </div>
                    <?php if (get_header_image()) { ?>
								<div class="custom-header-img">
									<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
										<img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="<?php the_title_attribute(); ?>">
									</a>
								</div>
						<?php } ?> 
                    <!-- menu end -->
                    </div>
                </div>
                <!--top header end-->
         <?php if(is_page_template('page-template/front-page.php')){ 
			 $headerclass=" main-header";
			 $blurclass ="blur-img"; ?>
                <div class="container theme-container">
                   <?php $headertitle_check = get_theme_mod( 'tailor_slidertitle' );
                   		$headersubtitle_check = get_theme_mod( 'tailor_slidersubtitle' );
						$headerclass_check = get_theme_mod('tailor_class');
						$headerbutton_check = get_theme_mod('tailor_button');
						$headerlink_check = get_theme_mod('tailor_button_link');
					if(!empty($headertitle_check) || !empty($headersubtitle_check) || !empty($headerclass_check) || !empty($headerbutton_check) || !empty($headerlink_check) ) : ?>
                    <div class="header-slogen">
                       <?php 
						if( $headertitle_check != '' ) { ?>
                        <p><?php echo esc_html( get_theme_mod('tailor_slidertitle', '') ); ?></p>
                        <?php } ?>
                        <div class="title-box">
                       <?php if( $headersubtitle_check != '' ) { ?>
                            <h1>
                                 <?php echo esc_html( get_theme_mod('tailor_slidersubtitle', '') ); ?>                             
                            </h1>
                         <?php } ?>
                           <?php if( $headersubtitle_check != '' ) { ?>
                            <i class="icon-img <?php echo esc_attr( get_theme_mod('tailor_class', '' ) ); ?>"></i>
                        </div>
                        <?php } ?>
                        <?php if( $headerbutton_check != '' ) { ?>
                        <a class="site-btn" href="<?php  if( $headerbutton_check != '' ) { echo esc_url( get_theme_mod('tailor_button_link', '') ); }?>">
							<?php echo esc_html( get_theme_mod('tailor_button', '') ); ?>
                        </a>
                        <?php } ?>
                    </div>
                    <?php endif; ?>
                    <div class="col-md-12">
                        <!-- down arrow start -->
                        <div class="down-arrow">
                            <a class="arrow " href="javascript:void(0);"><i class="fa fa-angle-down bounce"></i></a>
                        </div> 
                        <!-- down arrow end -->
                    </div>
                </div>
            </div>
	<?php }
		 else{
			 $headerclass=" ";
			 $blurclass=" ";
		 } ?>	 
	</header>