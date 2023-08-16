<?php 
/* 404 template file*/
get_header(); ?>
        <!--==============================Section=================================-->
        <section class="post-page">
            <div class="site-breadcumb">
                <div class="theme-container container">
                    <h1>
						<?php esc_html_e('404 - Article Not Found', 'tailor'); ?>
					</h1>
                     <ol class="breadcrumb breadcrumb-menubar">
                    <?php if (function_exists('tailor_custom_breadcrumbs')) tailor_custom_breadcrumbs(); ?>
                    </ol> 
                </div>
            </div>
            <div class="theme-container container">                
                <div class="row blog-page">
                    <!--==============================Post Start=================================-->
                    <h1><?php esc_html_e('Epic 404 - Article Not Found', 'tailor') ?></h1>
                        <p><?php esc_html_e("This is embarassing. We can't find what you were looking for.", "tailor") ?></p>
                        <p><?php esc_html_e('Whatever you were looking for was not found, but maybe try looking again or search using the form below.', 'tailor') ?></p>
                        <div class="row">
                            <div class="col-sm-12 search-formmain">
                                <?php get_search_form(); ?>
                            </div>
                </div>
            </div>
        </section>
<?php get_footer();?>