<?php
session_start();
function dba(){
	return "StriveFit Nation";
}

function url(){
	return strtolower(str_replace(' ', '', dba())) . '.com';
}

function productName(){
    echo dba();
}

function descriptor(){
    echo substr(str_replace(' ', '', dba()),0,22);
}

function website(){
   echo url();
}

function email(){
    echo "support@" . url();
}

function corpName(){
    $corporation= "Kinderbees Goods Inc";
    echo $corporation;
}

function phoneNumber(){
    $number = "844-200-0271";
    echo $number;
}

function address(){
    $address = "211 S State College Blvd #1064";
    echo $address;
}

function city(){
    $city = "Anaheim";
    echo $city;
}

function state(){
    $state = "CA";
    echo $state;
}

function zipCode(){
    $zip = "92806";
    echo $zip;
}

function shippingTerms(){
    $time = "10 day evaluation + 4 day shipping";
    echo $time;
}

function totalOther(){
    $total = "14 day";
    echo $total;
}

function returnAddress(){
    $returnAddress = "<strong>Return Address:<br></strong>10441 Stanford Ave #189, Garden Grove, CA 92842";
    echo $returnAddress;
}
function addStyleSheets(){
    $styleSheets = '';    
    echo $styleSheets;
}

function AddUpdateCart($reqid, $reqpid, $reqqty, $package, $upd=false){
	$_GET["id"] 		= intval($reqid); 	
	$_GET["reqpid"] 	= intval($reqpid); 	
	$_GET["quantity"]   = intval($reqqty);
	$_GET["package"]    = ($package);
	$_SESSION["shopping_cart"] = '';
	if(isset($_SESSION["shopping_cart"]) && is_array($_SESSION["shopping_cart"]) )
	{	
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		
		if( !in_array($_GET["id"], $item_array_id) )
		{
			$item_array = array(
					'item_id'       => $_GET["id"],
					'item_product'  => $_GET["reqpid"],
					'item_quantity' => $_GET["quantity"],
					'item_package'  => $_GET["package"]
			);
			$_SESSION["shopping_cart"][$_GET["id"]] = $item_array;
		}
		else if( $upd == true )
		{ 
			$_SESSION["shopping_cart"][$_GET["id"]]['item_product']  = $_GET["reqpid"];  
			$_SESSION["shopping_cart"][$_GET["id"]]['item_quantity'] = $_GET["quantity"];  
			$_SESSION["shopping_cart"][$_GET["id"]]['item_package']  = $_GET["package"];  
		}
		else
		{ 	
			$_SESSION["shopping_cart"][$_GET["id"]]['item_product']  = $_GET["reqpid"]; 
			$_SESSION["shopping_cart"][$_GET["id"]]['item_quantity'] = $_GET["quantity"];
			$_SESSION["shopping_cart"][$_GET["id"]]['item_package']  = $_GET["package"];			
		}
	 }
	 else
	 {
		 $_SESSION['shopping_cart'] = array();	
		 $item_array = array(
			 'item_id'       => $_GET["id"],
			 'item_product'  => $_GET["reqpid"],
			 'item_quantity' => $_GET["quantity"],
			 'item_package'  => $_GET["package"]
		 );
		 $_SESSION["shopping_cart"][$_GET["id"]] = $item_array;		 
	 }
	 //echo json_encode($_SESSION["shopping_cart"][$_GET["id"]]); exit;
}
function getCart(){
	return $_SESSION["shopping_cart"];
}
function updateCart($id, $qty){
	addtocart($id, $qty);
}

?>