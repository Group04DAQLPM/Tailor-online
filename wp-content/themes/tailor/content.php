<?php /* Content Page Template */ ?>
<div class="col-md-9 col-sm-8">
	<?php while ( have_posts() ) : the_post(); ?>		
        <div class="post-box">
            <?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'tailor-blog-thumbnail-image', array( 'alt' => esc_attr(get_the_title()), 'class' => 'img-responsive') ); ?>
			<?php endif; ?>
            <div class="col-md-12 post-details">
               <a href="<?php echo esc_url(get_permalink()); ?>" class="post-title"><?php the_title();?></a>
                <div class="post-meta">
                    <?php tailor_entry_meta(); ?> 
                </div>
                <?php the_excerpt(); ?>
            </div>  
        </div>
		<?php endwhile; ?>
        <div class="site-pagination">
         <?php  the_posts_pagination(array(
				'before_page_number' => '<span class="meta-nav screen-reader-text"></span>',
		)); ?>
        </div>
    </div>