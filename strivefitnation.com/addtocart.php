<?php require 'index_files/information.php';
if( $_GET){
	
	$_GET['reqid']   = $_GET['reqid']-1; 
	$_GET['reqpid']  = $_GET['reqpid']; 
	$_GET['reqqty']  = $_GET['reqqty']; 
	$_GET['package'] = $_GET['package']; 
	
	AddUpdateCart( $_GET['reqid'], $_GET['reqpid'] ,$_GET['reqqty'], $_GET['package'] );
	
	header('location: cart.php');
	exit;
}else{
	header('location: index.php');
	exit;
}
?>