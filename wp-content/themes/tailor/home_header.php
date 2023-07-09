<header>
            <div class="main-header">
                <div class="blur-img"></div>
                <!--top header start-->
                <div class="top-header">
                    <div class="container theme-container">
                         <!--logo start-->
                    <div class="col-md-3 col-sm-3 logo">
                       <?php if ( get_theme_mod( 'tailor_logo' ) ) { ?>
                                    <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'tailor_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
                                <?php } else { ?>		  
                                  <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    				<h2 class="site-title"><?php bloginfo( 'name' ); ?></h2>
                    				<span class="site-description"><?php bloginfo( 'description' ); ?></span></a>
                                <?php } ?>
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle theme-toggle" data-toggle="collapse" data-target="#myNavbar">
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
                        'container_id' => 'myNavbar ',
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
                <!-- header slogen start -->
                <div class="container theme-container">
                    <div class="header-slogen">
                        <p><?php esc_html_e('hello','tailor'); ?></p>
                        <div class="title-box">
                            <h1>
                                <?php esc_html_e("I'm ellen holgate & I sew stuff","tailor"); ?>
                            </h1>
                            <i class="icon-img fa fa-scissors"></i>
                        </div>
                        <a class="site-btn" href="#"><?php esc_html_e('see what I can offer you','tailor'); ?></a>
                    </div>
                    <!-- header slogen end -->
                    <div class="col-md-12">
                        <!-- down arrow start -->
                        <div class="down-arrow">
                            <a class="arrow " href="javascript:void(0);"><i class="fa fa-angle-down bounce"></i></a>
                        </div>
                        <!-- down arrow end -->
                    </div>
                </div>