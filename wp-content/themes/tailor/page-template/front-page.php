<?php
/*
 * Template Name: Home Page
 */
get_header(); ?>
<!--==============================Section=================================-->
        <section id="myId" class="home-page">
            <!--about-main start-->
            <?php $abouttitle_check = get_theme_mod('tailor_abouttitle');
				  $aboutsubtitle_check = get_theme_mod('tailor_aboutsubtitle');
				  $aboutimage_check = get_theme_mod('tailor_about_image');
				  $aboutinfo_check = get_theme_mod('tailor_aboutinfo');
					if(!empty( $abouttitle_check) || !empty( $aboutsubtitle_check) || !empty( $aboutimage_check) || !empty( $aboutinfo_check)) :
			?>
            
            <div class="about-main">            
                <div class="container theme-container">             
                    <div class="title">
                    	<?php if( $abouttitle_check != '' ) { ?>
                        <p><?php echo esc_html( get_theme_mod('tailor_abouttitle', '') );  ?></p> <?php }
                        if( $aboutsubtitle_check != '' ) { ?>
                        <h2><span><?php echo esc_html( get_theme_mod('tailor_aboutsubtitle', '') );  ?></span></h2><?php } ?>
                    </div>
                    <!--about-content start-->
                    
                    <div class="row about-content">
						<?php if( $aboutimage_check != '' ) { ?>
                        <div class="col-md-6 col-sm-6">
                            <img alt="about" src="<?php echo esc_attr( get_theme_mod('tailor_about_image', '') );  ?>" alt="<?php esc_attr( get_title_attribute);?>">
                        </div>
                        <?php } ?>
                        <?php if( $aboutinfo_check != '' ) { ?>
                        <div class="col-md-6 col-sm-6">
                            <p><?php echo esc_html( get_theme_mod('tailor_aboutinfo', '') ); ?></p>
                        </div>
                        <?php } ?>
                    </div>
                    <!--about-content end-->              
                </div>               
            </div>      
            <?php endif; ?>      
            <!--about-main end-->

            <!--main-blog strat-->
            <div class="main-blog">
                <?php $blog_check = get_theme_mod('tailor_blog-title');
				  $blogtitle_check = get_theme_mod('tailor_bloginfo');
					if(!empty($blog_check) || !empty( $blogtitle_check) ) : ?>
                <div class="container theme-container">
                    <div class="title">
                        <?php if( $blog_check != '' ) { ?>
                        <p><?php echo esc_html( get_theme_mod('tailor_blog-title', '') ); ?></p>
                        <?php }?>
                       <?php if( $blogtitle_check != '' ) { ?>
                        <h2><span><?php echo esc_html( get_theme_mod('tailor_bloginfo', '') ); ?></span></h2>
                        <?php } ?>
                    </div>
                    <?php endif; ?>
                    <div class="row blog-main-content">
                        <div class="blog-slider" id="blog-slider">
							<?php
							$tailor_blogcategory=get_theme_mod('tailor_blogcategory');
							$tailor_args = array(
								'ignore_sticky_posts' => '1',
								'meta_query' => array(
									array(
										'key' => '_thumbnail_id',
										'compare' => 'EXISTS'
									),
								)
							);
							if(!empty($tailor_blogcategory))
								$tailor_args['cat']=$tailor_blogcategory;
								$tailor_query = new WP_Query($tailor_args); ?>
                           <?php
							if ($tailor_query->have_posts()) : while ($tailor_query->have_posts()) : $tailor_query->the_post(); ?>
                            <div class="item">      
                                <div class="post-box">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'tailor-blog-thumbnail-image-home', array( 'alt' => esc_attr(get_the_title()), 'class' => 'img-responsive') ); ?>
								<?php endif; ?>
                                    <div class="col-md-12 post-details">
                                        <a href="<?php echo esc_url(get_permalink()); ?>" class="post-title"><?php the_title(); ?></a>
                                        <div class="post-meta">
                                            <?php tailor_entry_meta(); ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>
							<?php endwhile;
							 endif;?>
                        </div>
                    </div>
                </div>
            </div>
            <!--main-blog end-->
        </section>
<?php get_footer(); ?>

