<?php
/*
 * tailor Breadcrumbs
*/
function tailor_custom_breadcrumbs() {
    $tailor_showonhome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $tailor_showcurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
    global $post;
    if (is_home() || is_front_page()) {

        if ($tailor_showonhome == 1)
            echo '<li><a href="' . esc_url(home_url('/')) . '">' . esc_html__('Home', 'tailor') . '</a></li>';
    } else {

        echo '<li><a href="' . esc_url(home_url('/')). '">' . esc_html__('Home', 'tailor') . '</a> ';
        if (is_category()) {
            $tailor_thisCat = get_category(get_query_var('cat'), false);
            if ($tailor_thisCat->parent != 0)
                echo get_category_parents($tailor_thisCat->parent, TRUE, ' ');
            echo  esc_html__('Category', 'tailor') . ' " ' . single_cat_title('', false) . ' "';
        } elseif (is_search()) {
            echo  esc_html__('Search Results For ', 'tailor') . ' " ' . get_search_query() . ' "';
        } elseif (is_day()) {
            echo '<a href="' . esc_url(get_year_link(get_the_time('Y'))) . '">' . esc_html(get_the_time('Y')) . '</a> ';
            echo '<a href="' . esc_url(get_month_link(get_the_time('Y'), get_the_time('m'))) . '">' . esc_html(get_the_time('F') ). '</a> ';
            echo  esc_html(get_the_time('d'));
        } elseif (is_month()) {
            echo '<a href="' . esc_url(get_year_link(get_the_time('Y'))) . '">' . esc_html(get_the_time('Y')) . '</a> ';
            echo  esc_html(get_the_time('F')) ;
        } elseif (is_year()) {
            echo esc_html(get_the_time('Y')) ;
        } elseif (is_single() && !is_attachment()) {
            if (get_post_type() != 'post') {
                $tailor_post_type = get_post_type_object(get_post_type());
                $tailor_slug = $tailor_post_type->rewrite;
                echo '<a href="' . esc_url(home_url('/'. $tailor_slug['slug'] . '/')) .'">' . esc_html($tailor_post_type->labels->singular_name) . '</a>';
                if ($tailor_showcurrent == 1)
                    echo  esc_html(get_the_title()) ;
            } else {
                $tailor_cat = get_the_category();
                $tailor_cat = $tailor_cat[0];
                $tailor_cats = get_category_parents($tailor_cat, TRUE, ' ');
                if ($tailor_showcurrent == 0)
                    $tailor_cats =
                            preg_replace("#^(.+)\s\s$#", "$1", $tailor_cats);
                echo $tailor_cats;
                if ($tailor_showcurrent == 1)
                    echo  get_the_title();
            }
        } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $tailor_post_type = get_post_type_object(get_post_type());
            echo esc_html($tailor_post_type->labels->singular_name );
        } elseif (is_attachment()) {
            $tailor_parent = get_post($post->post_parent);
            $tailor_cat = get_the_category($tailor_parent->ID);
            $tailor_cat = $tailor_cat[0];
            echo get_category_parents($tailor_cat, TRUE, '  ');
            echo '<a href="' . esc_url(get_permalink($tailor_parent)) . '">' . esc_html($tailor_parent->post_title) . '</a>';
            if ($tailor_showcurrent == 1)
                echo   esc_html(get_the_title());
        } elseif (is_page() && !$post->post_parent) {
            if ($tailor_showcurrent == 1)
                echo esc_html(get_the_title());
        } elseif (is_page() && $post->post_parent) {
            $tailor_parent_id = $post->post_parent;
            $tailor_breadcrumbs = array();
            while ($tailor_parent_id) {
                $tailor_page = get_page($tailor_parent_id);
                $tailor_breadcrumbs[] = '<a href="' . get_permalink($tailor_page->ID) . '">' . get_the_title($tailor_page->ID) . '</a>';
                $tailor_parent_id = $tailor_page->post_parent;
            }
            $tailor_breadcrumbs = array_reverse($tailor_breadcrumbs);
            for ($tailor_i = 0; $tailor_i < count($tailor_breadcrumbs); $tailor_i++) {
                echo $tailor_breadcrumbs[$tailor_i];
                if ($tailor_i != count($tailor_breadcrumbs) - 1)
                    echo ' ';
            }
            if ($tailor_showcurrent == 1)
                echo get_the_title();
        } elseif (is_tag()) {
            echo  esc_html__('Posts tagged', 'tailor') . ' " ' . esc_html(single_tag_title('', false)) . ' "';
        } elseif (is_author()) {
            global $author;
            $tailor_userdata = get_userdata($author);
            echo  esc_html__('Articles Published by', 'tailor') . ' " ' . esc_html($tailor_userdata->display_name ). ' "';
        } elseif (is_404()) {
            echo esc_html__('Error 404', 'tailor') ;
        }

        if (get_query_var('paged')) {
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
                echo ' (';
            echo esc_html__('Page', 'tailor') . ' ' . esc_html(get_query_var('paged'));
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
                echo ')';
        }

        echo '</li>';
    }
}