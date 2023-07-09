<?php 
/* blog page template */
get_header(); ?>
        <!-- Section -->
        <section class="post-page">
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="site-breadcumb">
                <div class="theme-container container">
                    <h1><?php $blogtitle_check = get_theme_mod( 'tailor_blogtitle' );
                    if( $blogtitle_check != '' ) {  
					echo esc_attr( get_theme_mod('tailor_blogtitle', '') );
				 } else { 	
					esc_html_e('My Blog','tailor');
				} ?></h1>
                </div>
            </div>
            <div class="theme-container container">                
                <div class="row blog-page">
                    <!-- Post Start -->
                  <?php  get_template_part('content'); get_sidebar();?>
                </div>
            </div>
            </div>
        </section>
<?php get_footer();?>