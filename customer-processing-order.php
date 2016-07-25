<?php
/**
 * Customer processing order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-processing-order.php.
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

<p><?php _e( "Thanks so much for your order! You have chosen to support a 100% handmade product with your dollars today and we want to know that it is deeply appreciated. We make every single high quality item that exists in our line in South Texas. One at a time. All by hand. We still believe in quality items that can be used and loved every single day, that will stand the test of time and can even be passed on to someone else for more use later. We do everything we can to keep things out of landfills, upcycled, and cheerful around here! Thanks for taking part in our zany, colorful day!
All the best,
Liz Leatherbury
The Head Chick
Bird and Pear

Your order details are shown below for your reference:", 'woocommerce'
"A note about International shipping:
Bird and Pear ships all over the world and is happy to do it! We will gladly ship to any country where we can track a package all the way to your door. That said, we cannot be held responsible for any VAT, taxes or customs fees imposed by a country outside the USA. Too, if your customs service is having a really bad day, week or month, please don’t hold us responsible for that either!

We read up on all requirements for paperwork and forms for each individual country before we put anything in the mail and do our best to make certain our packaging and paperwork is in compliance but sometimes those folks with all the power are just plain grumpy! We will NOT refund any monies for any item left in customs until the packages are received back in Texas in the exact condition they left. Sometimes this takes months."); ?></p>

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
