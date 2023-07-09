<?php
/**
 * The header for our theme
 *
 * @subpackage Expert Tailor
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} else {
    do_action( 'wp_body_open' );
}?>

<a class="screen-reader-text skip-link" href="#skip-content"><?php esc_html_e( 'Skip to content', 'expert-tailor' ); ?></a>

<?php if (get_theme_mod('expert_tailor_hide_show_topbar',false) == true) {?>
	<div class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-5 text-lg-left text-center">
					<?php if(get_theme_mod('expert_tailor_topheader_text')) {?>
						<p class="topbar-text mb-0 text-md-left text-center mt-md-0 mt-2 py-1"><?php echo esc_html(get_theme_mod('expert_tailor_topheader_text')); ?></p>
					<?php }?>
				</div>
				<div class="col-lg-5 col-md-4">
					<?php if(get_theme_mod('expert_tailor_topheader_timing')) {?>
						<div class="timing py-1 text-md-right text-center">
							<i class="fas fa-clock mr-1"></i><span><?php echo esc_html(get_theme_mod('expert_tailor_topheader_timing')); ?></span>
						</div>
					<?php }?>
				</div>
				<div class="col-lg-2 col-md-3 pl-0">
					<div class="header-btn text-md-right text-center my-md-0 my-2">
						<?php if(get_theme_mod('expert_tailor_appointment_btn_url')) {?>
							<span class="appointment-btn">
								<a href="<?php echo esc_url(get_theme_mod('expert_tailor_appointment_btn_url')); ?>"><span><?php echo esc_html(get_theme_mod('expert_tailor_appointment_btn_text')); ?></span><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('expert_tailor_appointment_btn_text')); ?></span></a>
							</span>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php }?>
<div id="header">
	<div class="middle-header py-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-12 mail-location text-lg-left text-center">
					<?php if(get_theme_mod('expert_tailor_topheader_mail')) {?>
						<span class="mail py-3">
							<a href="mailto:<?php echo esc_attr(get_theme_mod('expert_tailor_topheader_mail')); ?>"><i class="fas fa-envelope mr-2"></i><span><?php echo esc_html(get_theme_mod('expert_tailor_topheader_mail')); ?></span><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('expert_tailor_topheader_mail')); ?></span></a>
						</span>
					<?php }?>
					<?php if(get_theme_mod('expert_tailor_topheader_location')) {?>
						<span class="location py-3">
							<i class="fas fa-paper-plane mr-2"></i><span><?php echo esc_html(get_theme_mod('expert_tailor_topheader_location')); ?></span>
						</span>
					<?php }?>
				</div>
				<div class="col-lg-2 col-md-5 px-md-0 px-3">
					<div class="logo text-center">
						<?php if ( has_custom_logo() ) : ?>
		            		<?php the_custom_logo(); ?>
			            <?php endif; ?>
		             	<?php if (get_theme_mod('expert_tailor_show_site_title',true)) {?>
	              			<?php $blog_info = get_bloginfo( 'name' ); ?>
			                <?php if ( ! empty( $blog_info ) ) : ?>
			                  	<?php if ( is_front_page() && is_home() ) : ?>
			                    	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			                  	<?php else : ?>
		                      		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		                  		<?php endif; ?>
			                <?php endif; ?>
			            <?php }?>
			            <?php if (get_theme_mod('expert_tailor_show_tagline',true)) {?>
			                <?php
		                  		$description = get_bloginfo( 'description', 'display' );
			                  	if ( $description || is_customize_preview() ) :
			                ?>
		                  	<p class="site-description">
		                    	<?php echo esc_attr($description); ?>
		                  	</p>
		              		<?php endif; ?>
	              		<?php }?>
					</div>
				</div>
				<div class="col-lg-5 col-md-7">
					<div class="social-icons text-md-right text-center py-lg-2 py-2">
						<?php if(get_theme_mod('expert_tailor_topheader_facebook_url')) {?>
							<a href="<?php echo esc_url(get_theme_mod('expert_tailor_topheader_facebook_url')); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php echo esc_html('Facebook', 'expert-tailor'); ?></span></a>
						<?php }?>
						<?php if(get_theme_mod('expert_tailor_topheader_twitter_url')) {?>
							<a href="<?php echo esc_url(get_theme_mod('expert_tailor_topheader_twitter_url')); ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php echo esc_html('Twitter', 'expert-tailor'); ?></span></a>
						<?php }?>
						<?php if(get_theme_mod('expert_tailor_topheader_youtube_url')) {?>
							<a href="<?php echo esc_url(get_theme_mod('expert_tailor_topheader_youtube_url')); ?>"><i class="fab fa-youtube"></i><span class="screen-reader-text"><?php echo esc_html('Youtube', 'expert-tailor'); ?></span></a>
						<?php }?>
						<?php if(get_theme_mod('expert_tailor_topheader_instagram_url')) {?>
							<a href="<?php echo esc_url(get_theme_mod('expert_tailor_topheader_instagram_url')); ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php echo esc_html('Instagram', 'expert-tailor'); ?></span></a>
						<?php }?>
						<?php if(get_theme_mod('expert_tailor_topheader_pinterest_url')) {?>
							<a href="<?php echo esc_url(get_theme_mod('expert_tailor_topheader_pinterest_url')); ?>"><i class="fab fa-pinterest"></i><span class="screen-reader-text"><?php echo esc_html('Pinterest', 'expert-tailor'); ?></span></a>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom-header">
		<div class="container">
			<div class="menu-section">
				<div class="row mx-0">
					<div class="col-lg-10 col-md-8 col-5 px-4">
						<div class="toggle-menu responsive-menu">
							<?php if(has_nav_menu('primary')){ ?>
				            	<button onclick="expert_tailor_open()" role="tab" class="mobile-menu"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','expert-tailor'); ?></span></button>
				            <?php }?>
				        </div>
						<div id="sidelong-menu" class="nav sidenav">
			                <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'expert-tailor' ); ?>">
			                  	<?php if(has_nav_menu('primary')){
				                    wp_nav_menu( array( 
										'theme_location' => 'primary',
										'container_class' => 'main-menu-navigation clearfix' ,
										'menu_class' => 'clearfix',
										'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
										'fallback_cb' => 'wp_page_menu',
				                    ) ); 
			                  	} ?>
			                  	<a href="javascript:void(0)" class="closebtn responsive-menu" onclick="expert_tailor_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','expert-tailor'); ?></span></a>
			                </nav>
			            </div>
					</div>
					<div class="col-lg-2 col-md-4 col-7 phone">
						<?php if(get_theme_mod('expert_tailor_topheader_phone_no')) {?>
							<div class="call row">
								<div class="col-lg-3 col-md-3 col-3 call-icon">
									<i class="fas fa-phone-volume"></i>
								</div>
								<div class="col-lg-9 col-md-9 col-9">
									<a href="tel:<?php echo esc_attr(get_theme_mod('expert_tailor_topheader_phone_no')); ?>"><p class="callno"><?php echo esc_html(get_theme_mod('expert_tailor_topheader_phone_no')); ?></p><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('expert_tailor_topheader_phone_no')); ?></span></a>
									<p><?php echo esc_html(get_theme_mod('expert_tailor_topheader_phone_text')); ?></p>
								</div>
							</div>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php if(is_singular()) {?>
	<div id="inner-pages-header">
		<div class="header-overlay"></div>
	    <div class="header-content">
		    <div class="container text-center"> 
		      	<h1><?php single_post_title(); ?></h1>
		    </div>
		</div>
	</div>
<?php } ?>