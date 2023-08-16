<?php 
/* Category page template */
get_header(); ?>
        <!-- Section -->
        <section class="post-page">
            <div class="site-breadcumb">
                <div class="theme-container container">
                    <h1>
						<?php esc_html_e('Category', 'tailor'); echo " : " . single_cat_title('', false); ?>
					</h1>
                     <ol class="breadcrumb breadcrumb-menubar">
                    <?php if (function_exists('tailor_custom_breadcrumbs')) tailor_custom_breadcrumbs(); ?>
                    </ol> 
                </div>
            </div>
            <div class="theme-container container">                
                <div class="row blog-page">
                    <!-- Post Start -->
                  <?php  get_template_part('content');
                        get_sidebar(); ?>
                </div>
            </div>
        </section>
<?php get_footer(); ?>
