<?php
require 'limelight.php';
$form_fields = array(
                     'method' => 'NewOrder',
                     'username' => $llapiuser,
                     'password' => $llapipass,
					 'tranType' => 'Sale',
					 'productId' => $llpid,
					 'shippingId' => $llshipid,
					 'prospectId' => $_COOKIE["prospectId"],
					 'firstName' => $_COOKIE["firstName"],
					 'lastName' => $_COOKIE["lastName"],
					 'shippingAddress1' => $_COOKIE["address1"],
					 'shippingCity' => $_COOKIE["city"],
					 'shippingState' => $_COOKIE["state"],
					 'shippingZip' => $_COOKIE["zip"],
					 'shippingCountry' => 'US',
					 'billingAddress1' => $_COOKIE["address1"],
					 'billingCity' => $_COOKIE["city"],
					 'billingState' => $_COOKIE["state"],
					 'billingZip' => $_COOKIE["zip"],
					 'billingCountry' => 'US',
					 'phone' => $_COOKIE["phone"],
					 'email' => $_COOKIE["email"],
					 'creditCardType' => $_POST["cc_type"],
					 'creditCardNumber' => preg_replace('/\D/', '',$_POST["cc_number"]),
					 'expirationDate' => $_POST["fields_expmonth"] . $_POST["fields_expyear"],
					 'CVV' => $_POST["cc_cvv"],
					 'ipAddress' => get_client_ip(),
					 'campaignId' => $llcampid);


	$curlSession = curl_init();
  	curl_setopt($curlSession, CURLOPT_URL, $llurl);
   	curl_setopt($curlSession, CURLOPT_HEADER, 0);
   	curl_setopt($curlSession, CURLOPT_POST, 1);
   	curl_setopt($curlSession, CURLOPT_POSTFIELDS, http_build_query($form_fields));
   	curl_setopt($curlSession, CURLOPT_RETURNTRANSFER,1);
   	curl_setopt($curlSession, CURLOPT_TIMEOUT,5000);
   	curl_setopt($curlSession, CURLOPT_SSL_VERIFYPEER, FALSE);
   	curl_setopt($curlSession, CURLOPT_SSL_VERIFYHOST, 1);
    $rawresponse = curl_exec($curlSession);

	if (strpos($rawresponse, '&')){
   		$response = split('&', $rawresponse);
    	$output   = array();
    	$count    = count($response);
    	for ($i=0; $i < $count; $i++) {
      		$splitAt = strpos($response[$i], "=");
      		$output[trim(substr($response[$i], 0, $splitAt))] = trim(substr(urldecode($response[$i]), ($splitAt+1)));
    	}
		$errfound = $output['errorFound'];
		if ($errfound == '0'){
			$responseCode = $output['responseCode'];
			$transactionID = $output['transactionID'];
			$customerId = $output['customerId'];
			$orderId = $output['orderId'];
			$orderTotal = $output['orderTotal'];
			header("Location: confirm.php?order_id=" . $orderId);
		} else {
			$responseCode = $output['responseCode'];
			$declineReason = $output['declineReason'];
			$customerId = $output['customerId'];
			$orderId = $output['orderId'];
			//echo($rawresponse);
			//die();
			header("Location: order.php?error=" . $declineReason);
		}
   	} else {
    	header("Location: order.php?result=declined&err=1");
	}
   
?>
