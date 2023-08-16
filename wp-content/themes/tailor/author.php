<?php 
/* Author page template */
get_header(); ?>
        <!-- Section -->
        <section class="post-page">
            <div class="site-breadcumb">
                <div class="theme-container container">
                    <h1><?php esc_html_e('Published by', 'tailor'); echo " : " . get_the_author(); ?></h1>
					 <ol class="breadcrumb breadcrumb-menubar">
                    <?php if (function_exists('tailor_custom_breadcrumbs')) tailor_custom_breadcrumbs(); ?>
                    </ol>
                </div>
            </div>
            <div class="theme-container container">                
                <div class="row blog-page">
                    <!-- Post Start -->
                  <?php  get_template_part('content'); ?>
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </section>
<?php get_footer(); ?>