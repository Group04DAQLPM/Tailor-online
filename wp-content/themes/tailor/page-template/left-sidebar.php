<?php 
/* Template Name: Left Sidebar */
get_header(); ?>
        <!--==============================Section=================================-->
        <section class="post-page">
            <div class="site-breadcumb">
                <div class="theme-container container">
                    <h1><?php the_title(); ?></h1>
                     <ol class="breadcrumb breadcrumb-menubar">
                    <?php if (function_exists('tailor_custom_breadcrumbs')) tailor_custom_breadcrumbs(); ?>
                    </ol> 
                </div>
            </div>
            <div class="theme-container container">                
                <div class="row blog-page ">
					 <?php get_sidebar(); ?>
                    <!--==============================Post Start=================================-->
                  <div class="col-md-9 col-sm-8">
					<?php while ( have_posts() ) : the_post(); ?>		
                        <div class="post-box">
                            <?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'tailor-blog-thumbnail-image', array( 'alt' => esc_attr(get_the_title()), 'class' => 'img-responsive') ); ?>
							<?php endif; ?>
                            <div class="col-md-12 post-details">
                               <a href="<?php echo esc_url(get_permalink()); ?>" class="post-title"><?php the_title(); ?></a>
                                <div class="post-meta">
                                    <?php tailor_entry_meta(); ?> 
                                </div>
                                <?php the_content(); ?>
                            </div>  
                            <div class="comments-article">
							<?php comments_template( '', true ); ?>
						</div>
                        </div>
						<?php endwhile; ?>
                    </div>
                </div>
            </div>
        </section>
<?php get_footer(); ?>