<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<main id="skip-content" role="main">

	<?php do_action( 'expert_tailor_above_slider' ); ?>

	<?php if( get_theme_mod('expert_tailor_slider_hide_show') != ''){ ?>
		<section id="slider">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
			    <?php $expert_tailor_slider_pages = array();
			    for ( $count = 1; $count <= 4; $count++ ) {
			        $mod = intval( get_theme_mod( 'expert_tailor_slider'. $count ));
			        if ( 'page-none-selected' != $mod ) {
			          $expert_tailor_slider_pages[] = $mod;
			        }
			    }
		      	if( !empty($expert_tailor_slider_pages) ) :
			        $args = array(
			          	'post_type' => 'page',
			          	'post__in' => $expert_tailor_slider_pages,
			          	'orderby' => 'post__in'
			        );
		        	$query = new WP_Query( $args );
		        if ( $query->have_posts() ) :
		          	$i = 1;
		    	?>     
			    <div class="carousel-inner" role="listbox">
			      	<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
			        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
		          		<img src="<?php esc_url(the_post_thumbnail_url('full')); ?>" alt="<?php the_title_attribute(); ?> "/>
						  <svg viewBox="0 0 147.19 145.45" class="service-svg2">
							<defs><style>.cls-1{fill:#5e6674;}</style></defs>
								<g id="Layer_2" data-name="Layer 2">
								<g id="Layer_1-2" data-name="Layer 1">
									<circle class="cls-1" cx="2.54" cy="2.54" r="2.54"></circle>
									<circle class="cls-1" cx="15.37" cy="2.54" r="2.54"></circle>
									<circle class="cls-1" cx="28.17" cy="2.54" r="2.54"></circle>
									<circle class="cls-1" cx="41.13" cy="2.54" r="2.54"></circle>
									<circle class="cls-1" cx="54.04" cy="2.54" r="2.54"></circle>
									<circle class="cls-1" cx="66.78" cy="2.54" r="2.54"></circle>
									<circle class="cls-1" cx="79.63" cy="2.54" r="2.54"></circle>
									<circle class="cls-1" cx="92.57" cy="2.54" r="2.54"></circle>
									<circle class="cls-1" cx="105.62" cy="2.54" r="2.54"></circle>
									<circle class="cls-1" cx="118.63" cy="2.54" r="2.54"></circle>
									<circle class="cls-1" cx="131.54" cy="2.54" r="2.54"></circle>
									<circle class="cls-1" cx="144.64" cy="2.54" r="2.54"></circle>
									<circle class="cls-1" cx="2.54" cy="16.58" r="2.54"></circle>
									<circle class="cls-1" cx="15.37" cy="16.58" r="2.54"></circle>
									<circle class="cls-1" cx="28.17" cy="16.58" r="2.54"></circle>
									<circle class="cls-1" cx="41.13" cy="16.58" r="2.54"></circle>
									<circle class="cls-1" cx="54.04" cy="16.58" r="2.54"></circle>
									<circle class="cls-1" cx="66.78" cy="16.58" r="2.54"></circle>
									<circle class="cls-1" cx="79.63" cy="16.58" r="2.54"></circle>
									<circle class="cls-1" cx="92.57" cy="16.58" r="2.54"></circle>
									<circle class="cls-1" cx="105.62" cy="16.58" r="2.54"></circle>
									<circle class="cls-1" cx="118.63" cy="16.58" r="2.54"></circle>
									<circle class="cls-1" cx="131.54" cy="16.58" r="2.54"></circle>
									<circle class="cls-1" cx="144.64" cy="16.58" r="2.54"></circle>
									<circle class="cls-1" cx="2.54" cy="30.62" r="2.54"></circle>
									<circle class="cls-1" cx="15.37" cy="30.62" r="2.54"></circle>
									<circle class="cls-1" cx="28.17" cy="30.62" r="2.54"></circle>
									<circle class="cls-1" cx="41.13" cy="30.62" r="2.54"></circle>
									<circle class="cls-1" cx="54.04" cy="30.62" r="2.54"></circle>
									<circle class="cls-1" cx="66.78" cy="30.62" r="2.54"></circle>
									<circle class="cls-1" cx="79.63" cy="30.62" r="2.54"></circle>
									<circle class="cls-1" cx="92.57" cy="30.62" r="2.54"></circle>
									<circle class="cls-1" cx="105.62" cy="30.62" r="2.54"></circle>
									<circle class="cls-1" cx="118.63" cy="30.62" r="2.54"></circle>
									<circle class="cls-1" cx="131.54" cy="30.62" r="2.54"></circle>
									<circle class="cls-1" cx="144.64" cy="30.62" r="2.54"></circle>
									<circle class="cls-1" cx="2.54" cy="44.65" r="2.54"></circle>
									<circle class="cls-1" cx="15.37" cy="44.65" r="2.54"></circle>
									<circle class="cls-1" cx="28.17" cy="44.65" r="2.54"></circle>
									<circle class="cls-1" cx="41.13" cy="44.65" r="2.54"></circle>
									<circle class="cls-1" cx="54.04" cy="44.65" r="2.54"></circle>
									<circle class="cls-1" cx="66.78" cy="44.65" r="2.54"></circle>
									<circle class="cls-1" cx="79.63" cy="44.65" r="2.54"></circle>
									<circle class="cls-1" cx="92.57" cy="44.65" r="2.54"></circle>
									<circle class="cls-1" cx="105.62" cy="44.65" r="2.54"></circle>
									<circle class="cls-1" cx="118.63" cy="44.65" r="2.54"></circle>
									<circle class="cls-1" cx="131.54" cy="44.65" r="2.54"></circle>
									<circle class="cls-1" cx="144.64" cy="44.65" r="2.54"></circle>
									<circle class="cls-1" cx="2.54" cy="58.69" r="2.54"></circle>
									<circle class="cls-1" cx="15.37" cy="58.69" r="2.54"></circle>
									<circle class="cls-1" cx="28.17" cy="58.69" r="2.54"></circle>
									<circle class="cls-1" cx="41.13" cy="58.69" r="2.54"></circle>
									<circle class="cls-1" cx="54.04" cy="58.69" r="2.54"></circle>
									<circle class="cls-1" cx="66.78" cy="58.69" r="2.54"></circle>
									<circle class="cls-1" cx="79.63" cy="58.69" r="2.54"></circle>
									<circle class="cls-1" cx="92.57" cy="58.69" r="2.54"></circle>
									<circle class="cls-1" cx="105.62" cy="58.69" r="2.54"></circle>
									<circle class="cls-1" cx="118.63" cy="58.69" r="2.54"></circle>
									<circle class="cls-1" cx="131.54" cy="58.69" r="2.54"></circle>
									<circle class="cls-1" cx="144.64" cy="58.69" r="2.54"></circle>
									<circle class="cls-1" cx="2.54" cy="72.72" r="2.54"></circle>
									<circle class="cls-1" cx="15.37" cy="72.72" r="2.54"></circle>
									<circle class="cls-1" cx="28.17" cy="72.72" r="2.54"></circle>
									<circle class="cls-1" cx="41.13" cy="72.72" r="2.54"></circle>
									<circle class="cls-1" cx="54.04" cy="72.72" r="2.54"></circle>
									<circle class="cls-1" cx="66.78" cy="72.72" r="2.54"></circle>
									<circle class="cls-1" cx="79.63" cy="72.72" r="2.54"></circle>
									<circle class="cls-1" cx="92.57" cy="72.72" r="2.54"></circle>
									<circle class="cls-1" cx="105.62" cy="72.72" r="2.54"></circle>
									<circle class="cls-1" cx="118.63" cy="72.72" r="2.54"></circle>
									<circle class="cls-1" cx="131.54" cy="72.72" r="2.54"></circle>
									<circle class="cls-1" cx="144.64" cy="72.72" r="2.54"></circle>
									<circle class="cls-1" cx="2.54" cy="86.76" r="2.54"></circle>
									<circle class="cls-1" cx="15.37" cy="86.76" r="2.54"></circle>
									<circle class="cls-1" cx="28.17" cy="86.76" r="2.54"></circle>
									<circle class="cls-1" cx="41.13" cy="86.76" r="2.54"></circle>
									<circle class="cls-1" cx="54.04" cy="86.76" r="2.54"></circle>
									<circle class="cls-1" cx="66.78" cy="86.76" r="2.54"></circle>
									<circle class="cls-1" cx="79.63" cy="86.76" r="2.54"></circle>
									<circle class="cls-1" cx="92.57" cy="86.76" r="2.54"></circle>
									<circle class="cls-1" cx="105.62" cy="86.76" r="2.54"></circle>
									<circle class="cls-1" cx="118.63" cy="86.76" r="2.54"></circle>
									<circle class="cls-1" cx="131.54" cy="86.76" r="2.54"></circle>
									<circle class="cls-1" cx="144.64" cy="86.76" r="2.54"></circle>
									<circle class="cls-1" cx="2.54" cy="100.79" r="2.54"></circle>
									<circle class="cls-1" cx="15.37" cy="100.79" r="2.54"></circle>
									<circle class="cls-1" cx="28.17" cy="100.79" r="2.54"></circle>
									<circle class="cls-1" cx="41.13" cy="100.79" r="2.54"></circle>
									<circle class="cls-1" cx="54.04" cy="100.79" r="2.54"></circle>
									<circle class="cls-1" cx="66.78" cy="100.79" r="2.54"></circle>
									<circle class="cls-1" cx="79.63" cy="100.79" r="2.54"></circle>
									<circle class="cls-1" cx="92.57" cy="100.79" r="2.54"></circle>
									<circle class="cls-1" cx="105.62" cy="100.79" r="2.54"></circle>
									<circle class="cls-1" cx="118.63" cy="100.79" r="2.54"></circle>
									<circle class="cls-1" cx="131.54" cy="100.79" r="2.54"></circle>
									<circle class="cls-1" cx="144.64" cy="100.79" r="2.54"></circle>
									<circle class="cls-1" cx="2.54" cy="114.83" r="2.54"></circle>
									<circle class="cls-1" cx="15.37" cy="114.83" r="2.54"></circle>
									<circle class="cls-1" cx="28.17" cy="114.83" r="2.54"></circle>
									<circle class="cls-1" cx="41.13" cy="114.83" r="2.54"></circle>
									<circle class="cls-1" cx="54.04" cy="114.83" r="2.54"></circle>
									<circle class="cls-1" cx="66.78" cy="114.83" r="2.54"></circle>
									<circle class="cls-1" cx="79.63" cy="114.83" r="2.54"></circle>
									<circle class="cls-1" cx="92.57" cy="114.83" r="2.54"></circle>
									<circle class="cls-1" cx="105.62" cy="114.83" r="2.54"></circle>
									<circle class="cls-1" cx="118.63" cy="114.83" r="2.54"></circle>
									<circle class="cls-1" cx="131.54" cy="114.83" r="2.54"></circle>
									<circle class="cls-1" cx="144.64" cy="114.83" r="2.54"></circle>
									<circle class="cls-1" cx="2.54" cy="128.87" r="2.54"></circle>
									<circle class="cls-1" cx="15.37" cy="128.87" r="2.54"></circle>
									<circle class="cls-1" cx="28.17" cy="128.87" r="2.54"></circle>
									<circle class="cls-1" cx="41.13" cy="128.87" r="2.54"></circle>
									<circle class="cls-1" cx="54.04" cy="128.87" r="2.54"></circle>
									<circle class="cls-1" cx="66.78" cy="128.87" r="2.54"></circle>
									<circle class="cls-1" cx="79.63" cy="128.87" r="2.54"></circle>
									<circle class="cls-1" cx="92.57" cy="128.87" r="2.54"></circle>
									<circle class="cls-1" cx="105.62" cy="128.87" r="2.54"></circle>
									<circle class="cls-1" cx="118.63" cy="128.87" r="2.54"></circle>
									<circle class="cls-1" cx="131.54" cy="128.87" r="2.54"></circle>
									<circle class="cls-1" cx="144.64" cy="128.87" r="2.54"></circle>
									<circle class="cls-1" cx="2.54" cy="142.9" r="2.54"></circle>
									<circle class="cls-1" cx="15.37" cy="142.9" r="2.54"></circle>
									<circle class="cls-1" cx="28.17" cy="142.9" r="2.54"></circle>
									<circle class="cls-1" cx="41.13" cy="142.9" r="2.54"></circle>
									<circle class="cls-1" cx="54.04" cy="142.9" r="2.54"></circle>
									<circle class="cls-1" cx="66.78" cy="142.9" r="2.54"></circle>
									<circle class="cls-1" cx="79.63" cy="142.9" r="2.54"></circle>
									<circle class="cls-1" cx="92.57" cy="142.9" r="2.54"></circle>
									<circle class="cls-1" cx="105.62" cy="142.9" r="2.54"></circle>
									<circle class="cls-1" cx="118.63" cy="142.9" r="2.54"></circle>
									<circle class="cls-1" cx="131.54" cy="142.9" r="2.54"></circle>
									<circle class="cls-1" cx="144.64" cy="142.9" r="2.54"></circle>
							</g></g></svg>
			          	<div class="carousel-caption">
				            <div class="inner_carousel">
				              	<h2><?php the_title(); ?></h2>
				              	<p><?php $expert_tailor_excerpt = get_the_excerpt(); echo esc_html( expert_tailor_string_limit_words( $expert_tailor_excerpt,15 ) ); ?></p>
				            </div>
		            		<a href="<?php the_permalink(); ?>" class="read-btn"><?php esc_html_e('Read More','expert-tailor'); ?><span class="screen-reader-text"><?php esc_html_e('Read More','expert-tailor'); ?></span></a>
			          	</div>
			        </div>
			      	<?php $i++; endwhile; 
			      	wp_reset_postdata();?>
			    </div>
			    <?php else : ?>
			    <div class="no-postfound"></div>
		      		<?php endif;
			    endif;?>
			    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			      	<span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-long-arrow-alt-left"></i></span>
			      	<span class="screen-reader-text"><?php esc_html_e( 'Prev','expert-tailor' );?></span>
			    </a>
			    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			      	<span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-long-arrow-alt-right"></i></span>
			      	<span class="screen-reader-text"><?php esc_html_e( 'Next','expert-tailor' );?></span>
			    </a>
			</div>
		  	<div class="clearfix"></div>
		</section>
	<?php }?>

	<?php do_action('expert_tailor_below_slider'); ?>

	<?php if( get_theme_mod('expert_tailor_service_category') != ''){ ?>
		<div class="service-bg">
			<svg viewBox="0 0 185.18 134.14" class="service-svg1"><defs><style>.cls-4{fill:#52aea5;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-4" d="M0,0S11.71,2.57,42.86,23.14,115.71,42.29,122.57,44s75.14,2.29,60.57,90.14H.46Z"/></g></g></svg>
		</div>
		<section id="services-section" class="mb-5">
			<div class="container">
				<svg viewBox="0 0 147.19 145.45" class="service-svg2"><defs><style>.cls-1{fill:#5e6674;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><circle class="cls-1" cx="2.54" cy="2.54" r="2.54"/><circle class="cls-1" cx="15.37" cy="2.54" r="2.54"/><circle class="cls-1" cx="28.17" cy="2.54" r="2.54"/><circle class="cls-1" cx="41.13" cy="2.54" r="2.54"/><circle class="cls-1" cx="54.04" cy="2.54" r="2.54"/><circle class="cls-1" cx="66.78" cy="2.54" r="2.54"/><circle class="cls-1" cx="79.63" cy="2.54" r="2.54"/><circle class="cls-1" cx="92.57" cy="2.54" r="2.54"/><circle class="cls-1" cx="105.62" cy="2.54" r="2.54"/><circle class="cls-1" cx="118.63" cy="2.54" r="2.54"/><circle class="cls-1" cx="131.54" cy="2.54" r="2.54"/><circle class="cls-1" cx="144.64" cy="2.54" r="2.54"/><circle class="cls-1" cx="2.54" cy="16.58" r="2.54"/><circle class="cls-1" cx="15.37" cy="16.58" r="2.54"/><circle class="cls-1" cx="28.17" cy="16.58" r="2.54"/><circle class="cls-1" cx="41.13" cy="16.58" r="2.54"/><circle class="cls-1" cx="54.04" cy="16.58" r="2.54"/><circle class="cls-1" cx="66.78" cy="16.58" r="2.54"/><circle class="cls-1" cx="79.63" cy="16.58" r="2.54"/><circle class="cls-1" cx="92.57" cy="16.58" r="2.54"/><circle class="cls-1" cx="105.62" cy="16.58" r="2.54"/><circle class="cls-1" cx="118.63" cy="16.58" r="2.54"/><circle class="cls-1" cx="131.54" cy="16.58" r="2.54"/><circle class="cls-1" cx="144.64" cy="16.58" r="2.54"/><circle class="cls-1" cx="2.54" cy="30.62" r="2.54"/><circle class="cls-1" cx="15.37" cy="30.62" r="2.54"/><circle class="cls-1" cx="28.17" cy="30.62" r="2.54"/><circle class="cls-1" cx="41.13" cy="30.62" r="2.54"/><circle class="cls-1" cx="54.04" cy="30.62" r="2.54"/><circle class="cls-1" cx="66.78" cy="30.62" r="2.54"/><circle class="cls-1" cx="79.63" cy="30.62" r="2.54"/><circle class="cls-1" cx="92.57" cy="30.62" r="2.54"/><circle class="cls-1" cx="105.62" cy="30.62" r="2.54"/><circle class="cls-1" cx="118.63" cy="30.62" r="2.54"/><circle class="cls-1" cx="131.54" cy="30.62" r="2.54"/><circle class="cls-1" cx="144.64" cy="30.62" r="2.54"/><circle class="cls-1" cx="2.54" cy="44.65" r="2.54"/><circle class="cls-1" cx="15.37" cy="44.65" r="2.54"/><circle class="cls-1" cx="28.17" cy="44.65" r="2.54"/><circle class="cls-1" cx="41.13" cy="44.65" r="2.54"/><circle class="cls-1" cx="54.04" cy="44.65" r="2.54"/><circle class="cls-1" cx="66.78" cy="44.65" r="2.54"/><circle class="cls-1" cx="79.63" cy="44.65" r="2.54"/><circle class="cls-1" cx="92.57" cy="44.65" r="2.54"/><circle class="cls-1" cx="105.62" cy="44.65" r="2.54"/><circle class="cls-1" cx="118.63" cy="44.65" r="2.54"/><circle class="cls-1" cx="131.54" cy="44.65" r="2.54"/><circle class="cls-1" cx="144.64" cy="44.65" r="2.54"/><circle class="cls-1" cx="2.54" cy="58.69" r="2.54"/><circle class="cls-1" cx="15.37" cy="58.69" r="2.54"/><circle class="cls-1" cx="28.17" cy="58.69" r="2.54"/><circle class="cls-1" cx="41.13" cy="58.69" r="2.54"/><circle class="cls-1" cx="54.04" cy="58.69" r="2.54"/><circle class="cls-1" cx="66.78" cy="58.69" r="2.54"/><circle class="cls-1" cx="79.63" cy="58.69" r="2.54"/><circle class="cls-1" cx="92.57" cy="58.69" r="2.54"/><circle class="cls-1" cx="105.62" cy="58.69" r="2.54"/><circle class="cls-1" cx="118.63" cy="58.69" r="2.54"/><circle class="cls-1" cx="131.54" cy="58.69" r="2.54"/><circle class="cls-1" cx="144.64" cy="58.69" r="2.54"/><circle class="cls-1" cx="2.54" cy="72.72" r="2.54"/><circle class="cls-1" cx="15.37" cy="72.72" r="2.54"/><circle class="cls-1" cx="28.17" cy="72.72" r="2.54"/><circle class="cls-1" cx="41.13" cy="72.72" r="2.54"/><circle class="cls-1" cx="54.04" cy="72.72" r="2.54"/><circle class="cls-1" cx="66.78" cy="72.72" r="2.54"/><circle class="cls-1" cx="79.63" cy="72.72" r="2.54"/><circle class="cls-1" cx="92.57" cy="72.72" r="2.54"/><circle class="cls-1" cx="105.62" cy="72.72" r="2.54"/><circle class="cls-1" cx="118.63" cy="72.72" r="2.54"/><circle class="cls-1" cx="131.54" cy="72.72" r="2.54"/><circle class="cls-1" cx="144.64" cy="72.72" r="2.54"/><circle class="cls-1" cx="2.54" cy="86.76" r="2.54"/><circle class="cls-1" cx="15.37" cy="86.76" r="2.54"/><circle class="cls-1" cx="28.17" cy="86.76" r="2.54"/><circle class="cls-1" cx="41.13" cy="86.76" r="2.54"/><circle class="cls-1" cx="54.04" cy="86.76" r="2.54"/><circle class="cls-1" cx="66.78" cy="86.76" r="2.54"/><circle class="cls-1" cx="79.63" cy="86.76" r="2.54"/><circle class="cls-1" cx="92.57" cy="86.76" r="2.54"/><circle class="cls-1" cx="105.62" cy="86.76" r="2.54"/><circle class="cls-1" cx="118.63" cy="86.76" r="2.54"/><circle class="cls-1" cx="131.54" cy="86.76" r="2.54"/><circle class="cls-1" cx="144.64" cy="86.76" r="2.54"/><circle class="cls-1" cx="2.54" cy="100.79" r="2.54"/><circle class="cls-1" cx="15.37" cy="100.79" r="2.54"/><circle class="cls-1" cx="28.17" cy="100.79" r="2.54"/><circle class="cls-1" cx="41.13" cy="100.79" r="2.54"/><circle class="cls-1" cx="54.04" cy="100.79" r="2.54"/><circle class="cls-1" cx="66.78" cy="100.79" r="2.54"/><circle class="cls-1" cx="79.63" cy="100.79" r="2.54"/><circle class="cls-1" cx="92.57" cy="100.79" r="2.54"/><circle class="cls-1" cx="105.62" cy="100.79" r="2.54"/><circle class="cls-1" cx="118.63" cy="100.79" r="2.54"/><circle class="cls-1" cx="131.54" cy="100.79" r="2.54"/><circle class="cls-1" cx="144.64" cy="100.79" r="2.54"/><circle class="cls-1" cx="2.54" cy="114.83" r="2.54"/><circle class="cls-1" cx="15.37" cy="114.83" r="2.54"/><circle class="cls-1" cx="28.17" cy="114.83" r="2.54"/><circle class="cls-1" cx="41.13" cy="114.83" r="2.54"/><circle class="cls-1" cx="54.04" cy="114.83" r="2.54"/><circle class="cls-1" cx="66.78" cy="114.83" r="2.54"/><circle class="cls-1" cx="79.63" cy="114.83" r="2.54"/><circle class="cls-1" cx="92.57" cy="114.83" r="2.54"/><circle class="cls-1" cx="105.62" cy="114.83" r="2.54"/><circle class="cls-1" cx="118.63" cy="114.83" r="2.54"/><circle class="cls-1" cx="131.54" cy="114.83" r="2.54"/><circle class="cls-1" cx="144.64" cy="114.83" r="2.54"/><circle class="cls-1" cx="2.54" cy="128.87" r="2.54"/><circle class="cls-1" cx="15.37" cy="128.87" r="2.54"/><circle class="cls-1" cx="28.17" cy="128.87" r="2.54"/><circle class="cls-1" cx="41.13" cy="128.87" r="2.54"/><circle class="cls-1" cx="54.04" cy="128.87" r="2.54"/><circle class="cls-1" cx="66.78" cy="128.87" r="2.54"/><circle class="cls-1" cx="79.63" cy="128.87" r="2.54"/><circle class="cls-1" cx="92.57" cy="128.87" r="2.54"/><circle class="cls-1" cx="105.62" cy="128.87" r="2.54"/><circle class="cls-1" cx="118.63" cy="128.87" r="2.54"/><circle class="cls-1" cx="131.54" cy="128.87" r="2.54"/><circle class="cls-1" cx="144.64" cy="128.87" r="2.54"/><circle class="cls-1" cx="2.54" cy="142.9" r="2.54"/><circle class="cls-1" cx="15.37" cy="142.9" r="2.54"/><circle class="cls-1" cx="28.17" cy="142.9" r="2.54"/><circle class="cls-1" cx="41.13" cy="142.9" r="2.54"/><circle class="cls-1" cx="54.04" cy="142.9" r="2.54"/><circle class="cls-1" cx="66.78" cy="142.9" r="2.54"/><circle class="cls-1" cx="79.63" cy="142.9" r="2.54"/><circle class="cls-1" cx="92.57" cy="142.9" r="2.54"/><circle class="cls-1" cx="105.62" cy="142.9" r="2.54"/><circle class="cls-1" cx="118.63" cy="142.9" r="2.54"/><circle class="cls-1" cx="131.54" cy="142.9" r="2.54"/><circle class="cls-1" cx="144.64" cy="142.9" r="2.54"/></g></g></svg>

	            <div class="row">
		      		<?php $expert_tailor_catData1 =  get_theme_mod('expert_tailor_service_category');
	  				if($expert_tailor_catData1){ 
	      				$page_query = new WP_Query(array( 'category_name' => esc_html($expert_tailor_catData1 ,'expert-tailor'))); ?>
		        		<?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>	
		          			<div class="col-lg-4 col-md-4">
		          				<div class="service-box">
		      						<div class="service-img">
							      		<img src="<?php esc_url(the_post_thumbnail_url('full')); ?>" />
							  		</div>
	          						<div class="service-content text-center">
					            		<h3><?php the_title(); ?></h3>
					            		<div class="read-btn">
					            			<a href="<?php the_permalink(); ?>"><?php esc_html_e( 'EXPLORE','expert-tailor' );?><i class="fas fa-chevron-right"></i></a>
					            		</div>
		            				</div>
		          				</div>
						    </div>
		          		<?php endwhile; 
		          		wp_reset_postdata();
		      		}?>
	      		</div>

	      		<svg viewBox="0 0 147.19 145.45" class="service-svg3"><defs><style>.cls-2{fill:#050606;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><circle class="cls-2" cx="2.54" cy="2.54" r="2.54"/><circle class="cls-2" cx="15.37" cy="2.54" r="2.54"/><circle class="cls-2" cx="28.17" cy="2.54" r="2.54"/><circle class="cls-2" cx="41.13" cy="2.54" r="2.54"/><circle class="cls-2" cx="54.04" cy="2.54" r="2.54"/><circle class="cls-2" cx="66.78" cy="2.54" r="2.54"/><circle class="cls-2" cx="79.63" cy="2.54" r="2.54"/><circle class="cls-2" cx="92.57" cy="2.54" r="2.54"/><circle class="cls-2" cx="105.62" cy="2.54" r="2.54"/><circle class="cls-2" cx="118.63" cy="2.54" r="2.54"/><circle class="cls-2" cx="131.54" cy="2.54" r="2.54"/><circle class="cls-2" cx="144.64" cy="2.54" r="2.54"/><circle class="cls-2" cx="2.54" cy="16.58" r="2.54"/><circle class="cls-2" cx="15.37" cy="16.58" r="2.54"/><circle class="cls-2" cx="28.17" cy="16.58" r="2.54"/><circle class="cls-2" cx="41.13" cy="16.58" r="2.54"/><circle class="cls-2" cx="54.04" cy="16.58" r="2.54"/><circle class="cls-2" cx="66.78" cy="16.58" r="2.54"/><circle class="cls-2" cx="79.63" cy="16.58" r="2.54"/><circle class="cls-2" cx="92.57" cy="16.58" r="2.54"/><circle class="cls-2" cx="105.62" cy="16.58" r="2.54"/><circle class="cls-2" cx="118.63" cy="16.58" r="2.54"/><circle class="cls-2" cx="131.54" cy="16.58" r="2.54"/><circle class="cls-2" cx="144.64" cy="16.58" r="2.54"/><circle class="cls-2" cx="2.54" cy="30.62" r="2.54"/><circle class="cls-2" cx="15.37" cy="30.62" r="2.54"/><circle class="cls-2" cx="28.17" cy="30.62" r="2.54"/><circle class="cls-2" cx="41.13" cy="30.62" r="2.54"/><circle class="cls-2" cx="54.04" cy="30.62" r="2.54"/><circle class="cls-2" cx="66.78" cy="30.62" r="2.54"/><circle class="cls-2" cx="79.63" cy="30.62" r="2.54"/><circle class="cls-2" cx="92.57" cy="30.62" r="2.54"/><circle class="cls-2" cx="105.62" cy="30.62" r="2.54"/><circle class="cls-2" cx="118.63" cy="30.62" r="2.54"/><circle class="cls-2" cx="131.54" cy="30.62" r="2.54"/><circle class="cls-2" cx="144.64" cy="30.62" r="2.54"/><circle class="cls-2" cx="2.54" cy="44.65" r="2.54"/><circle class="cls-2" cx="15.37" cy="44.65" r="2.54"/><circle class="cls-2" cx="28.17" cy="44.65" r="2.54"/><circle class="cls-2" cx="41.13" cy="44.65" r="2.54"/><circle class="cls-2" cx="54.04" cy="44.65" r="2.54"/><circle class="cls-2" cx="66.78" cy="44.65" r="2.54"/><circle class="cls-2" cx="79.63" cy="44.65" r="2.54"/><circle class="cls-2" cx="92.57" cy="44.65" r="2.54"/><circle class="cls-2" cx="105.62" cy="44.65" r="2.54"/><circle class="cls-2" cx="118.63" cy="44.65" r="2.54"/><circle class="cls-2" cx="131.54" cy="44.65" r="2.54"/><circle class="cls-2" cx="144.64" cy="44.65" r="2.54"/><circle class="cls-2" cx="2.54" cy="58.69" r="2.54"/><circle class="cls-2" cx="15.37" cy="58.69" r="2.54"/><circle class="cls-2" cx="28.17" cy="58.69" r="2.54"/><circle class="cls-2" cx="41.13" cy="58.69" r="2.54"/><circle class="cls-2" cx="54.04" cy="58.69" r="2.54"/><circle class="cls-2" cx="66.78" cy="58.69" r="2.54"/><circle class="cls-2" cx="79.63" cy="58.69" r="2.54"/><circle class="cls-2" cx="92.57" cy="58.69" r="2.54"/><circle class="cls-2" cx="105.62" cy="58.69" r="2.54"/><circle class="cls-2" cx="118.63" cy="58.69" r="2.54"/><circle class="cls-2" cx="131.54" cy="58.69" r="2.54"/><circle class="cls-2" cx="144.64" cy="58.69" r="2.54"/><circle class="cls-2" cx="2.54" cy="72.72" r="2.54"/><circle class="cls-2" cx="15.37" cy="72.72" r="2.54"/><circle class="cls-2" cx="28.17" cy="72.72" r="2.54"/><circle class="cls-2" cx="41.13" cy="72.72" r="2.54"/><circle class="cls-2" cx="54.04" cy="72.72" r="2.54"/><circle class="cls-2" cx="66.78" cy="72.72" r="2.54"/><circle class="cls-2" cx="79.63" cy="72.72" r="2.54"/><circle class="cls-2" cx="92.57" cy="72.72" r="2.54"/><circle class="cls-2" cx="105.62" cy="72.72" r="2.54"/><circle class="cls-2" cx="118.63" cy="72.72" r="2.54"/><circle class="cls-2" cx="131.54" cy="72.72" r="2.54"/><circle class="cls-2" cx="144.64" cy="72.72" r="2.54"/><circle class="cls-2" cx="2.54" cy="86.76" r="2.54"/><circle class="cls-2" cx="15.37" cy="86.76" r="2.54"/><circle class="cls-2" cx="28.17" cy="86.76" r="2.54"/><circle class="cls-2" cx="41.13" cy="86.76" r="2.54"/><circle class="cls-2" cx="54.04" cy="86.76" r="2.54"/><circle class="cls-2" cx="66.78" cy="86.76" r="2.54"/><circle class="cls-2" cx="79.63" cy="86.76" r="2.54"/><circle class="cls-2" cx="92.57" cy="86.76" r="2.54"/><circle class="cls-2" cx="105.62" cy="86.76" r="2.54"/><circle class="cls-2" cx="118.63" cy="86.76" r="2.54"/><circle class="cls-2" cx="131.54" cy="86.76" r="2.54"/><circle class="cls-2" cx="144.64" cy="86.76" r="2.54"/><circle class="cls-2" cx="2.54" cy="100.79" r="2.54"/><circle class="cls-2" cx="15.37" cy="100.79" r="2.54"/><circle class="cls-2" cx="28.17" cy="100.79" r="2.54"/><circle class="cls-2" cx="41.13" cy="100.79" r="2.54"/><circle class="cls-2" cx="54.04" cy="100.79" r="2.54"/><circle class="cls-2" cx="66.78" cy="100.79" r="2.54"/><circle class="cls-2" cx="79.63" cy="100.79" r="2.54"/><circle class="cls-2" cx="92.57" cy="100.79" r="2.54"/><circle class="cls-2" cx="105.62" cy="100.79" r="2.54"/><circle class="cls-2" cx="118.63" cy="100.79" r="2.54"/><circle class="cls-2" cx="131.54" cy="100.79" r="2.54"/><circle class="cls-2" cx="144.64" cy="100.79" r="2.54"/><circle class="cls-2" cx="2.54" cy="114.83" r="2.54"/><circle class="cls-2" cx="15.37" cy="114.83" r="2.54"/><circle class="cls-2" cx="28.17" cy="114.83" r="2.54"/><circle class="cls-2" cx="41.13" cy="114.83" r="2.54"/><circle class="cls-2" cx="54.04" cy="114.83" r="2.54"/><circle class="cls-2" cx="66.78" cy="114.83" r="2.54"/><circle class="cls-2" cx="79.63" cy="114.83" r="2.54"/><circle class="cls-2" cx="92.57" cy="114.83" r="2.54"/><circle class="cls-2" cx="105.62" cy="114.83" r="2.54"/><circle class="cls-2" cx="118.63" cy="114.83" r="2.54"/><circle class="cls-2" cx="131.54" cy="114.83" r="2.54"/><circle class="cls-2" cx="144.64" cy="114.83" r="2.54"/><circle class="cls-2" cx="2.54" cy="128.87" r="2.54"/><circle class="cls-2" cx="15.37" cy="128.87" r="2.54"/><circle class="cls-2" cx="28.17" cy="128.87" r="2.54"/><circle class="cls-2" cx="41.13" cy="128.87" r="2.54"/><circle class="cls-2" cx="54.04" cy="128.87" r="2.54"/><circle class="cls-2" cx="66.78" cy="128.87" r="2.54"/><circle class="cls-2" cx="79.63" cy="128.87" r="2.54"/><circle class="cls-2" cx="92.57" cy="128.87" r="2.54"/><circle class="cls-2" cx="105.62" cy="128.87" r="2.54"/><circle class="cls-2" cx="118.63" cy="128.87" r="2.54"/><circle class="cls-2" cx="131.54" cy="128.87" r="2.54"/><circle class="cls-2" cx="144.64" cy="128.87" r="2.54"/><circle class="cls-2" cx="2.54" cy="142.9" r="2.54"/><circle class="cls-2" cx="15.37" cy="142.9" r="2.54"/><circle class="cls-2" cx="28.17" cy="142.9" r="2.54"/><circle class="cls-2" cx="41.13" cy="142.9" r="2.54"/><circle class="cls-2" cx="54.04" cy="142.9" r="2.54"/><circle class="cls-2" cx="66.78" cy="142.9" r="2.54"/><circle class="cls-2" cx="79.63" cy="142.9" r="2.54"/><circle class="cls-2" cx="92.57" cy="142.9" r="2.54"/><circle class="cls-2" cx="105.62" cy="142.9" r="2.54"/><circle class="cls-2" cx="118.63" cy="142.9" r="2.54"/><circle class="cls-2" cx="131.54" cy="142.9" r="2.54"/><circle class="cls-2" cx="144.64" cy="142.9" r="2.54"/></g></g></svg>

	      		<svg viewBox="0 0 292.96 137.63" class="service-svg4"><defs><style>.cls-3{fill:#383c6f;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-3" d="M0,137.63s32.21-18,50.21-24,48-35.43,66-55.14,62.72-78,113.29-51.86,49.71,30.43,63,33l.46,98Z"/></g></g></svg>
				<div class="clearfix"></div>
			</div>
		</section>
	<?php }?>

	<?php do_action('expert_tailor_below_service_section'); ?>

	<div class="container">
	  	<?php while ( have_posts() ) : the_post(); ?>
	  		<div class="lz-content">
	        	<?php the_content(); ?>
	        </div>
	    <?php endwhile; // end of the loop. ?>
	</div>
</main>

<?php get_footer(); ?>