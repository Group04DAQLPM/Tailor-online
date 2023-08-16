<?php
function tailor_custom_header_setup() {
	$tailor_args = array(
		// Text color and image (empty to use none).
		'default-text-color'     => 'f7ef00',
		'header-text'            => true,
		// Callbacks for styling the header and the admin preview.
		'wp-head-callback'       => 'tailor_header_style',
		'admin-head-callback'    => 'tailor_admin_header_style',
		'admin-preview-callback' => 'tailor_admin_header_image',
	);

	add_theme_support( 'custom-header', $tailor_args );

	
}
add_action( 'after_setup_theme', 'tailor_custom_header_setup', 11 );

function tailor_header_style() {
	$tailor_header_image = get_header_image();
	$tailor_text_color   = get_header_textcolor();

	// If no custom options for text are set, let's bail.
	if ( empty( $tailor_header_image ) && $tailor_text_color == get_theme_support( 'custom-header', 'default-text-color' ) )
		return;

	// If we get this far, we have custom styles.
	?>
	<style type="text/css" id="tailor-header-css">
	<?php if ( ! empty( $tailor_header_image ) ) :	?>
		.site-header {
			background: url(<?php header_image(); ?>) no-repeat scroll top;
			background-size: 1600px auto;
		}
		@media (max-width: 767px) {
			.site-header {
				background-size: 768px auto;
			}
		}
		@media (max-width: 359px) {
			.site-header {
				background-size: 360px auto;
			}
		}
	<?php endif;
		// Has the text been hidden?
		if ( ! display_header_text() ) : ?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px 1px 1px 1px); /* IE7 */
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php if ( empty( $tailor_header_image ) ) : ?>
		.site-header .home-link {
			min-height: 0;
		}
	<?php endif;
		// If the user has set a custom color for the text, use that.
		elseif ( $tailor_text_color != get_theme_support( 'custom-header', 'default-text-color' ) ) : ?>
		.site-title,
		.site-description {
			color: #<?php echo esc_attr( $tailor_text_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php 
}

function tailor_admin_header_style() {
	$tailor_header_image = get_header_image();
?>
	<style type="text/css" id="tailor-admin-header-css">
	.appearance_page_custom-header #headimg {
		border: none;
		-webkit-box-sizing: border-box;
		-moz-box-sizing:    border-box;
		box-sizing:         border-box;
		<?php
		if ( ! empty( $tailor_header_image ) ) {
			echo 'background: url(' . esc_url( $tailor_header_image ) . ') no-repeat scroll top; background-size: 1600px auto;';
		} ?>
		padding: 0 20px;
	}
	#headimg .home-link {
		-webkit-box-sizing: border-box;
		-moz-box-sizing:    border-box;
		box-sizing:         border-box;
		margin: 0 auto;
		max-width: 1040px;
		<?php
		if ( ! empty( $tailor_header_image ) || display_header_text() ) {
			echo 'min-height: 230px;';
		} ?>
		width: 100%;
	}
	<?php if ( ! display_header_text() ) : ?>
	#headimg h1,
	#headimg h2 {
		position: absolute !important;
		clip: rect(1px 1px 1px 1px); /* IE7 */
		clip: rect(1px, 1px, 1px, 1px);
	}
	<?php endif; ?>
	#headimg h1 {
		font: bold 60px/1 Bitter, Georgia, serif;
		margin: 0;
		padding: 58px 0 10px;
	}
	#headimg h1 a {
		text-decoration: none;
	}
	#headimg h1 a:hover {
		text-decoration: underline;
	}
	#headimg h2 {
		font: 200 italic 24px "Source Sans Pro", Helvetica, sans-serif;
		margin: 0;
		text-shadow: none;
	}
	
	</style>
<?php
}
function tailor_admin_header_image() {
	?>
	<div id="headimg" style="background: url(<?php header_image(); ?>) no-repeat scroll top; background-size: 1600px auto;">
		<?php $style = ' style="color:#' . get_header_textcolor() . ';"'; ?>
		<div class="home-link">
			<h1 class="displaying-header-text"><a id="name"<?php echo esc_attr($tailor_style); ?> onclick="return false;" href="#" tabindex="-1"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 id="desc" class="displaying-header-text"<?php echo esc_attr($tailor_style); ?>><?php bloginfo( 'description' ); ?></h2>
		</div>
	</div>
<?php } ?>