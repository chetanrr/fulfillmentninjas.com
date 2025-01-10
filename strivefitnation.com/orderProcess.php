<?php
session_start();
if( isset( $_POST ) ){
	
	$bilingDetail['firstName'] = $_POST["fields_fname"];
	$bilingDetail['lastName']  = $_POST["fields_lname"];
	$bilingDetail['address1']  = $_POST["fields_address1"];
	$bilingDetail['city']      = $_POST["fields_city"];
	$bilingDetail['state']     = $_POST["fields_state"];
	$bilingDetail['zip']       = $_POST["fields_zip"];
	$bilingDetail['phone']     = $_POST["fields_phone"];
	$bilingDetail['email']     = $_POST["fields_email"];
	$_SESSION["biling_detail"] = $bilingDetail; 
	
	$shippingDetail['firstName'] = $_POST["fields_fname"];
    $shippingDetail['lastName']  = $_POST["fields_lname"];
    $shippingDetail['address1']  = $_POST["fields_address1"];
    $shippingDetail['city']      = $_POST["fields_city"];
    $shippingDetail['state']     = $_POST["fields_state"];
    $shippingDetail['zip']       = $_POST["fields_zip"];
    $shippingDetail['phone']     = $_POST["fields_phone"];

if ( $_POST["shipping-address-same-as-billing"] == 'false')
    {
        $shippingDetail['firstName'] = $_POST["shipping_fields_fname"];
        $shippingDetail['lastName']  = $_POST["shipping_fields_lname"];
        $shippingDetail['address1']  = $_POST["shipping_fields_address1"];
        $shippingDetail['city']      = $_POST["shipping_fields_city"];
        $shippingDetail['state']     = $_POST["shipping_fields_state"];
        $shippingDetail['zip']       = $_POST["shipping_fields_zip"];
        $shippingDetail['phone']     = $_POST["shipping_fields_phone"];
        //$shippingDetail['email']     = $_POST["shipping_fields_email"];
        
    }
	$_SESSION["shipping_detail"] = $shippingDetail;  
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'system' . DIRECTORY_SEPARATOR . 'validate.php';
$query_string = $_SERVER['QUERY_STRING'];

if( !empty( $query_string ) ) :
	$query_string = explode('&', $query_string);
	foreach ($query_string as $key => $value) {
		$split_query = explode('=', $value);
		if( $split_query['0'] == 'error_message' ){
			unset( $query_string[$key] );
		}
	}

endif;

$new_query_string = '';
if( !empty( $query_string ) ){
	$new_query_string = implode('&', $query_string);
}
$response = CreditCardValidate::validateCreditCard( $_POST );

$response['valid'] = 1;
if( !empty($response) && array_key_exists( 'valid', $response ) && $response['valid'] == 1 ){
    
	require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'konnektive' . DIRECTORY_SEPARATOR . 'KonnektiveApi.php';			
	$result = KonnektiveApi::createOrder($_POST); 
	/*echo "<pre>";
	print_r($result);
	exit;
    if( $result['error_found'] == 1 ){
    	$error = $result['error_message'];
    	header( 'location: checkout.php' . '?error_message=' . $error );
    	exit;
    }
    if( $result['response_code'] == 100 ){
    	$orderId = $result['order_id'];
    	header( 'location: confirm.php?order_id=' . $orderId );
    	exit;
    }
	*/
	if( $result['result'] == 'ERROR' ){
        	$error = $result['message'];
        	header( 'location: checkout.php' . '?error_message=' . json_encode($error) . 'hints' . $error );
        	exit;
        }
        if( $result['result'] == 'SUCCESS' ){
        	$orderId = $result['message']['orderId'];
        	header( 'location: confirm.php?order_id=' . $orderId );
        	exit;
        }
}

else{
	if( !empty($query_string)){
		header('location: checkout.php?' . $new_query_string . '&error_message=' . $response['message'].'hints'.$response['hints_msg'] );
	}
	else{
		header('location: checkout.php' . '?error_message=' . $response['message'] . 'hints' . $response['hints_msg'] );
	}
}
}