<?php
/**
 * Customer completed order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-completed-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<p><?php printf( __( "Warning! An extremely happy, confetti filled package is headed your way!

Thanks again for your order and please do let us know what you think of everything. Comments and reviews are always welcome on our website, Instagram or FB pages. We love to see things in action!

And – should ANYTHING prove unsatisfactory, or worse – not show up in a timely fashion - please shoot us a note asap! We are a no fuss, no muss old school company. Above all else, we want you to love your purchase as much as we love making it. We will always strive to get you just what you want but please note a couple of things: Custom orders are not returnable. Any returns or exchanges must be initiated within 14 days of delivery of your shipment. It’s totally your call when you actually ship things back but we would very much like to hear about it within a couple of weeks of receipt of merchandise. Exchanges are encouraged whenever possible. If you wish to return merchandise for any reason other than errors on our part, you are responsible for all costs involved in doing so. Your order details are shown below for your reference:", 'woocommerce' ), get_option( 'blogname' ) ); ?></p>

<?php

/**
 * @hooked WC_Emails::order_details() Shows the order details table.
 * @since 2.5.0
 */
do_action( 'woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email );

/**
 * @hooked WC_Emails::order_meta() Shows order meta data.
 */
do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email );

/**
 * @hooked WC_Emails::customer_details() Shows customer details
 * @hooked WC_Emails::email_address() Shows email address
 */
do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email );

/**
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action( 'woocommerce_email_footer', $email );
