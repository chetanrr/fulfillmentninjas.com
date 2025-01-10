<?php
	setcookie('firstName',$_POST["fields_fname"]);
	setcookie('lastName',$_POST["fields_lname"]);
	setcookie('address1',$_POST["fields_address1"]);
	setcookie('city',$_POST["fields_city"]);
	setcookie('state',$_POST["fields_state"]);
	setcookie('zip',$_POST["fields_zip"]);
	setcookie('phone',$_POST["fields_phone"]);
	setcookie('email',$_POST["fields_email"]);
	header("Location: orderProcess.php");
?>