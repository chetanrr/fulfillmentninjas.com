<?php
/*
 * framework t14
 * file : validate
 * specification : this file validate credit cards
 * version : 1.0.0
 */

include dirname(__FILE__) . DIRECTORY_SEPARATOR . "curl.php";

class KonnektiveApi
	{
    function __construct(){
        return;
    }

    public static function createOrder($requestData)
    {
        $campaignProdMapping = [
            // index => productIds price
            
            10 => 7045, // 59.99
            11 => 7046, // 129.98
            12 => 7047, // 159.99
            13 => 7048, // 189.98
            14 => 7049, // 239.98

            20 => 7050, // 39.99
            21 => 7051, // 59.99
            22 => 7052, // 99.98
            23 => 7053, // 129.98

            30 => 7054, // 79.99
            31 => 7055, // 119.99
            32 => 7056, // 159.99
            33 => 7057, // 189.98
            34 => 7058, // 239.98
     
            40 => 7059, // 69.99
            41 => 7060, // 129.98
            42 => 7061, // 149.98
            43 => 7062, // 179.98
            44 => 7063, // 239.98

            50 => 7064, // 239.98
          
            60 => 7065, // 239.98

            70 => 7066, // 1.95

            80 => 7067, // 1.95
        ];
        $cart = $_SESSION["shopping_cart"];

        $curl = new Curl();
        $curl->setUrl("https://api.konnektive.com/order/import/");

        $var_to_send["loginId"] = "Amit_Api";
        $var_to_send["password"] = "pRukEtHe!ob5";

        $var_to_send["firstName"] = $_SESSION["biling_detail"]["firstName"];
        $var_to_send["lastName"] = $_SESSION["biling_detail"]["lastName"];
        $var_to_send["address1"] = $_SESSION["biling_detail"]["address1"];
        $var_to_send["address2"] = "";
        $var_to_send["postalCode"] = $_SESSION["biling_detail"]["zip"];
        $var_to_send["city"] = $_SESSION["biling_detail"]["city"];
        $var_to_send["state"] = $_SESSION["biling_detail"]["state"];
        $var_to_send["country"] = "US";
        $var_to_send["emailAddress"] = $_SESSION["biling_detail"]["email"];
        $var_to_send["phoneNumber"] = $_SESSION["biling_detail"]["phone"];

        $var_to_send["shipFirstName"] = $_SESSION["shipping_detail"]["firstName"];
        $var_to_send["shipLastName"] = $_SESSION["shipping_detail"]["lastName"];
        $var_to_send["shipAddress1"] = $_SESSION["shipping_detail"]["address1"];
        $var_to_send["shipAddress2"] = "";
        $var_to_send["shipPostalCode"] = $_SESSION["shipping_detail"]["zip"];
        $var_to_send["shipCity"] = $_SESSION["shipping_detail"]["city"];
        $var_to_send["shipState"] = $_SESSION["shipping_detail"]["state"];
        $var_to_send["shipCountry"] = "US";

        $var_to_send["campaignId"] = "389";
        //$var_to_send['product1_id']    = $offersProd; //$requestData['isProductSelected']
        //$var_to_send['product1_qty']   = '1';
        $idx = 1;
        foreach ($cart as $id => $cartData) {
            $prod = $cartData["item_id"] + 1;
            $prod = $prod . "" . $cartData["item_product"];
            //echo $prod; exit;
            $var_to_send["product" . $idx . "_id"] =
            $campaignProdMapping[$prod];
            $var_to_send["product" . $idx . "_qty"] = 1; //$cartData['item_quantity'];;
            $idx = $idx + 1;
        }
        $var_to_send["paySource"] = "CREDITCARD";
        $var_to_send["cardNumber"] = $requestData["cc_number"];
        $var_to_send["cardMonth"] = $requestData["fields_expmonth"];
        $var_to_send["cardYear"] = "20" . $requestData["fields_expyear"];
        $var_to_send["cardSecurityCode"] = $requestData["cc_cvv"];

        /*ho "<pre>";
		print_r($var_to_send);
		echo "</pre>";
		exit;	*/
        $curl->setPostData($var_to_send);

        $curl_respons = $curl->getResponse();
        /*echo "<pre>";
		print_r($curl_respons);
		echo "</pre>";
		exit;*/
        return json_decode($curl_respons, true);
    }
}

?>
