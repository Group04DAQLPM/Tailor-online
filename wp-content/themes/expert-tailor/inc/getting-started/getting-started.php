<?php
//about theme info
add_action( 'admin_menu', 'expert_tailor_gettingstarted' );
function expert_tailor_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'expert-tailor'), esc_html__('About Theme', 'expert-tailor'), 'edit_theme_options', 'expert_tailor_guide', 'expert_tailor_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function expert_tailor_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'expert_tailor_admin_theme_style');

//guidline for about theme
function expert_tailor_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'expert-tailor' );

?>

<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Expert Tailor WordPress Theme', 'expert-tailor' ); ?> <span>Version: <?php echo esc_html($theme['Version']);?></span></h3>
		</div>
		<div class="started">
			<hr>
			<div class="free-doc">
				<div class="lz-4">
					<h4><?php esc_html_e( 'Start Customizing', 'expert-tailor' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Go to', 'expert-tailor' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'expert-tailor' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'expert-tailor' ); ?></span>
					</ul>
				</div>
				<div class="lz-4">
					<h4><?php esc_html_e( 'Support', 'expert-tailor' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Send your query to our', 'expert-tailor' ); ?> <a href="<?php echo esc_url( EXPERT_TAILOR_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support', 'expert-tailor' ); ?></a></span>
					</ul>
				</div>
			</div>
			<p><?php esc_html_e( 'Expert Tailor is a trendy and modern WordPress theme that brings a layout tailored especially for websites working in the fashion field, boutiques, clothing range, and expert tailors providing custom tailoring facilities. With slight alterations in the layout, it can work magnificently for textile industries, handlooms, and relevant businesses. Giving a sophisticated display of the services you provide, it makes a commendable impact by presenting your content in an elegant manner. Its minimal and clean design makes it different from other themes and gives your products and services ample space to shine. As everyone loves to shop online nowadays, making your website accessible from mobile devices is a huge advantage for your business, and considering this, makers have made it responsive and mobile-friendly. At the same time, it consists of highly optimized codes that work in a direction to improve your search engine visibility by fetching better SEO ranks. Being compatible with Woocommerce, this theme also has a Call To Action Button (CTA) that adds more to the interactive part of your site. With stunning animations, customization options, social media, and plenty of useful elements at your disposal, websites designed using this beautiful theme will look no less than professional.', 'expert-tailor')?></p>
			<hr>			
			<div class="col-left-inner">
				<h3><?php esc_html_e( 'Get started with Free Expert Tailor Theme', 'expert-tailor' ); ?></h3>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/customizer-image.png" alt="" />
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'expert-tailor'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<a href="<?php echo esc_url( EXPERT_TAILOR_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'expert-tailor'); ?></a>
			<a href="<?php echo esc_url( EXPERT_TAILOR_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'expert-tailor'); ?></a>
			<a href="<?php echo esc_url( EXPERT_TAILOR_PRO_DOCS ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'expert-tailor'); ?></a>
			<hr class="secondhr">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/expert-tailor.jpg" alt="" />
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'expert-tailor'); ?></h3>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon01.png" alt="" />
			<h4><?php esc_html_e( 'Banner Slider', 'expert-tailor'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon02.png" alt="" />
			<h4><?php esc_html_e( 'Theme Options', 'expert-tailor'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon03.png" alt="" />
			<h4><?php esc_html_e( 'Custom Innerpage Banner', 'expert-tailor'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon04.png" alt="" />
			<h4><?php esc_html_e( 'Custom Colors and Images', 'expert-tailor'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon05.png" alt="" />
			<h4><?php esc_html_e( 'Fully Responsive', 'expert-tailor'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon06.png" alt="" />
			<h4><?php esc_html_e( 'Hide/Show Sections', 'expert-tailor'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon07.png" alt="" />
			<h4><?php esc_html_e( 'Woocommerce Support', 'expert-tailor'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon08.png" alt="" />
			<h4><?php esc_html_e( 'Limit to display number of Posts', 'expert-tailor'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon09.png" alt="" />
			<h4><?php esc_html_e( 'Multiple Page Templates', 'expert-tailor'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon10.png" alt="" />
			<h4><?php esc_html_e( 'Custom Read More link', 'expert-tailor'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon11.png" alt="" />
			<h4><?php esc_html_e( 'Code written with WordPress standard', 'expert-tailor'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon12.png" alt="" />
			<h4><?php esc_html_e( '100% Multi language', 'expert-tailor'); ?></h4>
		</div>
	</div>
</div>
<?php } ?>