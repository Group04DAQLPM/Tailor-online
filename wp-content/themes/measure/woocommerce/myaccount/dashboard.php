<?php
/**
 * My Account dashboard.
 *
 * @package WooCommerce\Templates
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_account_dashboard' ); ?>

<div class="woocommerce-MyAccount-content">

	<?php
	/**
	 * My Account content.
	 *
	 * @since 2.6.0
	 */

	woocommerce_get_template( 'myaccount/my-measurements.php' ); // Tạo một template riêng cho field "Số đo"

	?>

</div>

<?php do_action( 'woocommerce_after_account_dashboard' ); ?>
