<?php


add_filter( 'woocommerce_email_headers', ' weaoco_admin_headers_filter_function', 10, 2);


function  weaoco_admin_headers_filter_function( $headers, $object ) {

    if ($object == 'customer_completed_order') {

    	$email = get_option('admin_email');

        $headers .= 'BCC: '.$email.' <'.$email.'>' . "\r\n";

    }



    return $headers;

}

?>