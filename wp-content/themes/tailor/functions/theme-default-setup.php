<?php
/*
 * tailor Main Sidebar
 */
function tailor_widgets_init() {
    register_sidebar(array(
        'name' => __('Main Sidebar', 'tailor'),
        'id' => 'sidebar-1',
        'description' => __('Main sidebar that appears on the right.', 'tailor'),
        'before_widget' => '<div class="sidebar-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
        ));
}
add_action('widgets_init', 'tailor_widgets_init');

/**
 * Set up post entry meta.    
 * Meta information for current post: categories, tags, permalink, author, and date.    
 * */
function tailor_entry_meta() {
	$tailor_categories_list = get_the_category_list(', ','');
	$tailor_tag_list = get_the_tag_list('', ', ' );
	$tailor_comments = wp_count_comments(get_the_ID()); 	
?>	
	<ul>
       <li><?php printf('<time datetime="%1$s">%2$s</time>', esc_attr(get_the_date('c')), esc_html(get_the_date('F d , Y'))); ?></li>
       <li><?php esc_html_e('By : ', 'tailor'); ?><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="tag"><?php echo esc_html(ucfirst(get_the_author())); ?></a></li>
		<?php if (!is_page_template('page-template/front-page.php')) { ?>
	       <li><?php if(!empty($tailor_categories_list)) { esc_html_e('Category : ', 'tailor'); ?><?php echo $tailor_categories_list; ?></li><?php } if(!empty($tailor_tag_list)) { ?>
			<li><?php esc_html_e('Tags : ', 'tailor'); echo $tailor_tag_list; ?></li><?php }
		} ?>
       <li><?php $tailor_comment = comments_number(__('Comment : 0', 'tailor'), __('Comment : 1', 'tailor'), __('Comments : %', 'tailor')); ?></li>
    </ul>	
<?php 	
}
/*
 * Comments placeholder function
 * 
**/
add_filter( 'comment_form_default_fields', 'tailor_comment_placeholders' );
function tailor_comment_placeholders( $fields )
{
	$fields['author'] = str_replace(
		'<input',
		'<input placeholder="'
		. _x(
		'Name *',
		'comment form placeholder',
		'tailor'
		)
		. '" required',
		
	$fields['author']
	);
	$fields['email'] = str_replace(
		'<input',
		'<input id="email" name="email" type="text" placeholder="'
		. _x(
		'Email Id *',
		'comment form placeholder',
		'tailor'
		)
		. '" required',
	$fields['email']
	);
	$fields['url'] = str_replace(
		'<input',
		'<input id="url" name="url" type="text" placeholder="'
		. _x(
		'Website URL',
		'comment form placeholder',
		'tailor'
		)
		. '" required',
	$fields['url']
	);
	return $fields;
}
add_filter( 'comment_form_defaults', 'tailor_textarea_insert' );
	function tailor_textarea_insert( $fields ) {
		$fields['comment_field'] = str_replace(
			'<textarea',
			'<textarea id="comment" aria-required="true" rows="8" cols="45" name="comment" placeholder="'
			. _x(
			'Comment',
			'comment form placeholder',
			'tailor'
			)
		. '" ',
		$fields['comment_field']
		);
	return $fields;
	}