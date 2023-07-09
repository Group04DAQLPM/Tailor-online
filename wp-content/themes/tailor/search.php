<?php 
/* Search template file*/
get_header(); ?>
<!-- Section -->
<section class="post-page">
    <div class="site-breadcumb">
        <div class="theme-container container">
            <h1><?php esc_html_e('Search results for', 'tailor'); echo " : " . get_search_query(); ?></h1>
             <ol class="breadcrumb breadcrumb-menubar">
            <?php if (function_exists('tailor_custom_breadcrumbs')) tailor_custom_breadcrumbs(); ?>
            </ol> 
        </div>
    </div>
    <div class="theme-container container">
        <div class="row blog-page">
            <!-- Post Start -->
         <?php if ( have_posts() ) :
            get_template_part('content');
            get_sidebar(); else : ?>
			<div class="post-box search-formmain">
		<?php echo '<p>' . esc_html__('Sorry, but nothing matched your search terms. Please try again with some different keywords.','tailor') . '</p>'; ?>
		<p><?php get_search_form(); ?></p>
			</div>	 
      <?php endif; ?>
        </div>
    </div>
</section>
<?php get_footer();?>