<?php 
	require 'index_files/information.php';
	if( $_POST ){
		/*echo "<pre>";
		print_r($_POST);
		echo "<pre>";
		exit;*/
		if ( isset( $_POST['cart_array'] ) ){ 
			$_SESSION["shopping_cart"] = array(); 
			foreach($_POST['cart_array'] as $id=>$data){
				AddUpdateCart($id, $data['item_product'], $data['item_quantity'],$data['item_package'], true);
			}
		}
		if ( isset( $_POST['removeall'] ) && $_POST['removeall'] == 1 ){
			$_SESSION["shopping_cart"] = array();
			header('location: cart.php'); exit;
		}	
		if ( isset( $_POST['remove'] ) && $_POST['remove'] == 'yes' ){
			header('location: cart.php'); exit;
		}
		if( isset( $_POST['continue_shopping'] ) && $_POST['continue_shopping'] == 1  ){
			header('location: index.php'); exit;
		}
	}	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php productName()?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <link rel="stylesheet" href="bp_assets/css/style.css">
</head>
<body>

<div>
    <?php require 'includes/header.php'; ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 align-self-center">
                <div>
                    <h1 class="display-1 bannertitle mb-4">Checkout</h1>
                    <div class='text-white'>
                    <i class="fa-solid fa-house"></i> <a href="index.php">Home</a> / <a class="text-white">Checkout</a>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>

<section>
   <form  accept-charset='ISO-8859-1' enctype='application/x-www-form-urlencoded;charset=ISO-8859-1'  action='orderProcess.php' method='post'  >
<div class="container">
    <div class="row cart mb-5">
      <?php
         if( isset( $_GET['error_message'] ) ){
            $msg = explode("hints",$_GET['error_message']);
            echo '<div class="err_msg"><em>'.$msg[0].'</em></div>';
         }
      ?>
        <div class="col-lg-12">
            <table class="table table-cart mb-5 text-white" style="width:100%">
                <thead>
                     <tr>
                        <!-- <th>Image</th> -->
                        <th colspan="3">Product</th>
                        <th colspan="3" class="d-none">Package</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                     </tr>
                </thead>
                <tbody class="checkouttable">                   
                </tbody>
            </table>
            
            <div class="row">   
               <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                  <h3 class="form-heading mb-3">Billing Details</h3>
                  <div class="row">
                     <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="mb-3">
                           <label class="form-label">First Name:<sup>*</sup></label>
                           <input type="text" id='fields_fname' name='fields_fname' class="form-control" placeholder="First Name" value="<?php echo isset($_SESSION["biling_detail"]['firstName']) ? $_SESSION["biling_detail"]['firstName'] : '' ?>"  required >
                        </div>
                     </div>
                     <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="mb-3">
                           <label class="form-label">Last Name:<sup>*</sup></label>
                           <input type="text" id='fields_lname' name='fields_lname' class="form-control" placeholder="Last Name" value="<?php echo isset($_SESSION["biling_detail"]['lastName']) ? $_SESSION["biling_detail"]['lastName'] : '' ?>" required>
                        </div>
                     </div>
                  </div>
                  <div class="mb-3">
                     <label class="form-label">Street Address:<sup>*</sup></label>
                     <input type="text" id='fields_address1' name='fields_address1' class="form-control" placeholder="Street Address" value="<?php echo isset($_SESSION["biling_detail"]['address1']) ? $_SESSION["biling_detail"]['address1'] : '' ?>" required>
                  </div>
                  <div class="mb-3">
                     <div class="row">
                        <div class="col-md-6">
                           <label class="form-label">Town/City:<sup>*</sup></label>
                           <input type="text" id='fields_city' name='fields_city' class="form-control" placeholder="Town/City" value="<?php echo isset($_SESSION["biling_detail"]['city']) ? $_SESSION["biling_detail"]['city'] : '' ?>" required>
                        </div>
                        <div class="col-md-6">
                           <label class="form-label">Country:<sup>*</sup></label>
                           <input type="text" id="coudntry" style="" name="coundtry" class="form-control" placeholder="Country" value="US" readonly="" required>
                        </div>
                     </div>
                  </div>
                  <div class="mb-3">
                     <div class="row">
                        <div class="col-md-6">
                           <label class="form-label">State:<sup>*</sup></label>
                     <select class="form-control form-select" id="fields_state" style="" name="fields_state" required>
                        <option value="AL" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'AL'  ? 'selected' : '' ?>>Alabama</option>
                        <option value="AK" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'AK'  ? 'selected' : '' ?>>Alaska</option>
                        <option value="AZ" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'AZ' ? 'selected' : '' ?>>Arizona</option>
                        <option value="AR" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'AR' ? 'selected' : '' ?>>Arkansas</option>
                        <option value="CA" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'CA' ? 'selected' : '' ?>>California</option>
                        <option value="CO" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'CO' ? 'selected' : '' ?>>Colorado</option>
                        <option value="CT" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'CT' ? 'selected' : '' ?>>Connecticut</option>
                        <option value="DE" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'DE' ? 'selected' : '' ?>>Delaware</option>
                        <option value="DC" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'DC' ? 'selected' : '' ?>>District Of Columbia</option>
                        <option value="FL" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'FL' ? 'selected' : '' ?>>Florida</option>
                        <option value="GA" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'GA' ? 'selected' : '' ?>>Georgia</option>
                        <option value="HI" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'HI' ? 'selected' : '' ?>>Hawaii</option>
                        <option value="ID" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'ID' ? 'selected' : '' ?>>Idaho</option>
                        <option value="IL" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'IL' ? 'selected' : '' ?>>Illinois</option>
                        <option value="IN" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'IN' ? 'selected' : '' ?>>Indiana</option>
                        <option value="IA" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'IA' ? 'selected' : '' ?>>Iowa</option>
                        <option value="KS" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'KS' ? 'selected' : '' ?>>Kansas</option>
                        <option value="KY" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'KY' ? 'selected' : '' ?>>Kentucky</option>
                        <option value="LA" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'LA' ? 'selected' : '' ?>>Louisiana</option>
                        <option value="ME" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'ME' ? 'selected' : '' ?>>Maine</option>
                        <option value="MD" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'MD' ? 'selected' : '' ?>>Maryland</option>
                        <option value="MA" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'MA' ? 'selected' : '' ?>>Massachusetts</option>
                        <option value="MI" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'MI' ? 'selected' : '' ?>>Michigan</option>
                        <option value="MN" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'MN' ? 'selected' : '' ?>>Minnesota</option>
                        <option value="MS" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'MS' ? 'selected' : '' ?>>Mississippi</option>
                        <option value="MO" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'MO' ? 'selected' : '' ?>>Missouri</option>
                        <option value="MT" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'MT' ? 'selected' : '' ?>>Montana</option>
                        <option value="NE" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'NE' ? 'selected' : '' ?>>Nebraska</option>
                        <option value="NV" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'NV' ? 'selected' : '' ?>>Nevada</option>
                        <option value="NH" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'NH' ? 'selected' : '' ?>>New Hampshire</option>
                        <option value="NJ" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'NJ' ? 'selected' : '' ?>>New Jersey</option>
                        <option value="NM" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'NM' ? 'selected' : '' ?>>New Mexico</option>
                        <option value="NY" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'NY' ? 'selected' : '' ?>>New York</option>
                        <option value="NC" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'NC' ? 'selected' : '' ?>>North Carolina</option>
                        <option value="ND" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'ND' ? 'selected' : '' ?>>North Dakota</option>
                        <option value="OH" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'OH' ? 'selected' : '' ?>>Ohio</option>
                        <option value="OK" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'OK' ? 'selected' : '' ?>>Oklahoma</option>
                        <option value="OR" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'OR' ? 'selected' : '' ?>>Oregon</option>
                        <option value="PA" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'PA' ? 'selected' : '' ?>>Pennsylvania</option>
                        <option value="RI" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'RI' ? 'selected' : '' ?>>Rhode Island</option>
                        <option value="SC" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'SC' ? 'selected' : '' ?>>South Carolina</option>
                        <option value="SD" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'SD' ? 'selected' : '' ?>>South Dakota</option>
                        <option value="TN" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'TN' ? 'selected' : '' ?>>Tennessee</option>
                        <option value="TX" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'TX' ? 'selected' : '' ?>>Texas</option>
                        <option value="UT" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'UT' ? 'selected' : '' ?>>Utah</option>
                        <option value="VT" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'VT' ? 'selected' : '' ?>>Vermont</option>
                        <option value="VA" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'VA' ? 'selected' : '' ?>>Virginia</option>
                        <option value="WA" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'WA' ? 'selected' : '' ?>>Washington</option>
                        <option value="WV" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'WV' ? 'selected' : '' ?>>West Virginia</option>
                        <option value="WI" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'WI' ? 'selected' : '' ?>>Wisconsin</option>
                        <option value="WY" <?php echo isset($_SESSION["biling_detail"]['state'])  && $_SESSION["biling_detail"]['state'] == 'WY' ? 'selected' : '' ?>>Wyoming</option>
                     </select>
                        </div>

                        <div class="col-md-6">
                        <label class="form-label">ZIP:<sup>*</sup></label>
                     <input type="text" id='fields_zip' name='fields_zip' class="form-control" placeholder="Zip Code" maxlength="5" value="<?php echo isset($_SESSION["biling_detail"]['zip']) ? $_SESSION["biling_detail"]['zip'] : '' ?>" required>
                     </div>

                     </div>
                     
                  </div>

                  <div class="mb-3">
                     <label class="form-label">Phone:<sup>*</sup></label>
                     <input type="tel" id="fields_phone" name="fields_phone" class="form-control" placeholder="Phone Number" maxlength="10" value="<?php echo isset($_SESSION["biling_detail"]['phone']) ? $_SESSION["biling_detail"]['phone'] : '' ?>" required>
                  </div>
                  <div class="mb-3">
                     <label class="form-label">Email Address:<sup>*</sup></label>
                     <input type="email" id="fields_email" name="fields_email" class="form-control" placeholder="Email Address" value="<?php echo isset($_SESSION["biling_detail"]['email']) ? $_SESSION["biling_detail"]['email'] : '' ?>" required >
                  </div>
                  <h3 class="form-heading mt-5 mb-3">Additional Information</h3>
                  <div class="mb-3">
                     <label class="form-label">Order Notes:(optional)</label>
                     <textarea id="fields_note" name="fields_note" placeholder="Order Notes" class="form-control"><?php echo isset($_SESSION["biling_detail"]['fields_note']) ? $_SESSION["biling_detail"]['fields_note'] : '' ?></textarea>
                  </div>
                  <div class="mb-3">                
                        <input type="checkbox" class="radio" value="off" name="same_as_billing" checked>
                        <input type="hidden"  value="true" name="shipping-address-same-as-billing" id="shipping-address-same-as-billing" >
                        <label class="form-label">Shipping address same as billing</label>
                    </div>
                    <div id="shipping_detail" style="display:none">
                        <h3 class="form-heading mb-3 mt-5">Shipping Details</h3>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                <div class="mb-3">
                                    <label class="form-label">First Name:<sup>*</sup></label>
                                    <input type="text" id='shipping_fields_fname' name='shipping_fields_fname' class="form-control" placeholder="First Name" value="<?php echo isset($_SESSION["shipping_detail"]['firstName']) ? $_SESSION["shipping_detail"]['firstName'] : '' ?>"   >
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                <div class="mb-3">
                                    <label class="form-label">Last Name:<sup>*</sup></label>
                                    <input type="text" id='shipping_fields_lname' name='shipping_fields_lname' class="form-control" placeholder="Last Name" value="<?php echo isset($_SESSION["shipping_detail"]['lastName']) ? $_SESSION["shipping_detail"]['lastName'] : '' ?>" >
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Street Address:<sup>*</sup></label>
                            <input type="text" id='shipping_fields_address1' name='shipping_fields_address1' class="form-control" placeholder="Street Address" value="<?php echo isset($_SESSION["shipping_detail"]['address1']) ? $_SESSION["shipping_detail"]['address1'] : '' ?>" >
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Town/City:<sup>*</sup></label>
                                    <input type="text" id='shipping_fields_city' name='shipping_fields_city' class="form-control" placeholder="Town/City" value="<?php echo isset($_SESSION["shipping_detail"]['city']) ? $_SESSION["shipping_detail"]['city'] : '' ?>" >
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Country:<sup>*</sup></label>
                                    <input type="text" id="coudntry" style="" name="coundtry" class="form-control" placeholder="Country" value="US" readonly="" >
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">State:<sup>*</sup></label>
                                    <select class="form-control form-select" id="shipping_fields_state" style="" name="shipping_fields_state" >
                                        <option value="AL" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'AL'  ? 'selected' : '' ?>>Alabama</option>
                                        <option value="AK" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'AK'  ? 'selected' : '' ?>>Alaska</option>
                                        <option value="AZ" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'AZ' ? 'selected' : '' ?>>Arizona</option>
                                        <option value="AR" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'AR' ? 'selected' : '' ?>>Arkansas</option>
                                        <option value="CA" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'CA' ? 'selected' : '' ?>>California</option>
                                        <option value="CO" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'CO' ? 'selected' : '' ?>>Colorado</option>
                                        <option value="CT" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'CT' ? 'selected' : '' ?>>Connecticut</option>
                                        <option value="DE" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'DE' ? 'selected' : '' ?>>Delaware</option>
                                        <option value="DC" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'DC' ? 'selected' : '' ?>>District Of Columbia</option>
                                        <option value="FL" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'FL' ? 'selected' : '' ?>>Florida</option>
                                        <option value="GA" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'GA' ? 'selected' : '' ?>>Georgia</option>
                                        <option value="HI" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'HI' ? 'selected' : '' ?>>Hawaii</option>
                                        <option value="ID" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'ID' ? 'selected' : '' ?>>Idaho</option>
                                        <option value="IL" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'IL' ? 'selected' : '' ?>>Illinois</option>
                                        <option value="IN" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'IN' ? 'selected' : '' ?>>Indiana</option>
                                        <option value="IA" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'IA' ? 'selected' : '' ?>>Iowa</option>
                                        <option value="KS" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'KS' ? 'selected' : '' ?>>Kansas</option>
                                        <option value="KY" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'KY' ? 'selected' : '' ?>>Kentucky</option>
                                        <option value="LA" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'LA' ? 'selected' : '' ?>>Louisiana</option>
                                        <option value="ME" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'ME' ? 'selected' : '' ?>>Maine</option>
                                        <option value="MD" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'MD' ? 'selected' : '' ?>>Maryland</option>
                                        <option value="MA" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'MA' ? 'selected' : '' ?>>Massachusetts</option>
                                        <option value="MI" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'MI' ? 'selected' : '' ?>>Michigan</option>
                                        <option value="MN" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'MN' ? 'selected' : '' ?>>Minnesota</option>
                                        <option value="MS" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'MS' ? 'selected' : '' ?>>Mississippi</option>
                                        <option value="MO" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'MO' ? 'selected' : '' ?>>Missouri</option>
                                        <option value="MT" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'MT' ? 'selected' : '' ?>>Montana</option>
                                        <option value="NE" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'NE' ? 'selected' : '' ?>>Nebraska</option>
                                        <option value="NV" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'NV' ? 'selected' : '' ?>>Nevada</option>
                                        <option value="NH" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'NH' ? 'selected' : '' ?>>New Hampshire</option>
                                        <option value="NJ" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'NJ' ? 'selected' : '' ?>>New Jersey</option>
                                        <option value="NM" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'NM' ? 'selected' : '' ?>>New Mexico</option>
                                        <option value="NY" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'NY' ? 'selected' : '' ?>>New York</option>
                                        <option value="NC" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'NC' ? 'selected' : '' ?>>North Carolina</option>
                                        <option value="ND" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'ND' ? 'selected' : '' ?>>North Dakota</option>
                                        <option value="OH" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'OH' ? 'selected' : '' ?>>Ohio</option>
                                        <option value="OK" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'OK' ? 'selected' : '' ?>>Oklahoma</option>
                                        <option value="OR" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'OR' ? 'selected' : '' ?>>Oregon</option>
                                        <option value="PA" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'PA' ? 'selected' : '' ?>>Pennsylvania</option>
                                        <option value="RI" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'RI' ? 'selected' : '' ?>>Rhode Island</option>
                                        <option value="SC" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'SC' ? 'selected' : '' ?>>South Carolina</option>
                                        <option value="SD" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'SD' ? 'selected' : '' ?>>South Dakota</option>
                                        <option value="TN" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'TN' ? 'selected' : '' ?>>Tennessee</option>
                                        <option value="TX" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'TX' ? 'selected' : '' ?>>Texas</option>
                                        <option value="UT" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'UT' ? 'selected' : '' ?>>Utah</option>
                                        <option value="VT" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'VT' ? 'selected' : '' ?>>Vermont</option>
                                        <option value="VA" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'VA' ? 'selected' : '' ?>>Virginia</option>
                                        <option value="WA" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'WA' ? 'selected' : '' ?>>Washington</option>
                                        <option value="WV" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'WV' ? 'selected' : '' ?>>West Virginia</option>
                                        <option value="WI" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'WI' ? 'selected' : '' ?>>Wisconsin</option>
                                        <option value="WY" <?php echo isset($_SESSION["shipping_detail"]['state'])  && $_SESSION["shipping_detail"]['state'] == 'WY' ? 'selected' : '' ?>>Wyoming</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">ZIP:<sup>*</sup></label>
                                    <input type="text" id='shipping_fields_zip' name='shipping_fields_zip' class="form-control" placeholder="Zip Code" maxlength="5" value="<?php echo isset($_SESSION["shipping_detail"]['zip']) ? $_SESSION["shipping_detail"]['zip'] : '' ?>" >
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone:<sup>*</sup></label>
                            <input type="tel" id="shipping_fields_phone" name="shipping_fields_phone" class="form-control" placeholder="Phone Number" maxlength="10" value="<?php echo isset($_SESSION["shipping_detail"]['phone']) ? $_SESSION["shipping_detail"]['phone'] : '' ?>" >
                        </div>                            
                    </div>
               </div>
                  
               <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                  <h3 class="form-heading mb-3">Your Order</h3>
                  <p></p>
                  <table class="table table-hover mb-5 text-white">
                     <thead>
                        <tr>
                           <th></th>
                           <th></th>
                           <th>Total</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td colspan="2">Subtotal</td>
                           <td>$<span value="0.00" id='subtotal'></span></td>
                        </tr>
                        <tr>
                           <td colspan="2">Shipping</td>
                           <td>$<span value="0.00" id='shipping'>0.00</span></td>
                        </tr>
                        <tr>
                           <td colspan="2">
                              <strong>Total</strong>
                           </td>
                           <td>
                              <strong>$<span value="0.00" id='total'></span></strong>
                           </td>
                           <input type="hidden" value="">
                        </tr>
                     </tbody>
                  </table>
                  <div class="payment mb-4">
                     <label class="mb-0">
                        <span for="radio1"></span>Payment Details
                     </label>            
                     <div class="payment-form py-3 row">
                        
                        <div class="col-12">
                           <div class="form-group mb-3">
                              <input type="number" id="cc_number" name="cc_number" class="form-control" maxlength="16" value="" placeholder="Card No"   autocomplete="off" required>
                        <input type="hidden" id="cc_type" name="cc_type" value='' />
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="form-group mb-3">
                              <select name="fields_expmonth" onchange="javascript:update_expire()" id="fields_expmonth" class="form-control form-select" maxlength="2" placeholder="Month(MM)" required >
                                 <option value="" selected="selected">Month(MM)</option>
                                 <option value="01">01</option>
                                 <option value="02">02</option>
                                 <option value="03">03</option>
                                 <option value="04">04</option>
                                 <option value="05">05</option>
                                 <option value="06">06</option>
                                 <option value="07">07</option>
                                 <option value="08">08</option>
                                 <option value="09">09</option>
                                 <option value="10">10</option>
                                 <option value="11">11</option>
                                 <option value="12">12</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="mb-3">
                              <select name="fields_expyear" onchange="javascript:update_expire()" id="fields_expyear" class="form-control form-select" maxlength="4" placeholder="Year(YYYY)" required>
                                 <option value="" selected="selected">Year(YYYY)</option>
                                 <option value="24"> 2024 </option>
                                 <option value="25"> 2025 </option>
                                 <option value="26"> 2026 </option>
                                 <option value="27"> 2027 </option>
                                 <option value="28"> 2028 </option>
                                 <option value="29"> 2029 </option>
                                 <option value="30"> 2030 </option>
                                 <option value="31"> 2031 </option>
                                 <option value="32"> 2032 </option>
                                 <option value="33"> 2033 </option>
                                 <option value="34"> 2034 </option>
                              </select>
                          <input type="hidden" id="cc_expires" name="cc_expires" />
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="form-group mb-0">
                              <input type="number" id="cc_cvv" name="cc_cvv" size="4" maxlength="4" class="form-control"  placeholder="CVV" value="" required>
                           </div>
                        </div>
                        <div class="col-6">
                           <a class="ml-4 cvv" href="./cvv.html" onclick="window.open('./cvv.html', 'cvv', 'scrollbars=yes,width=600,height=400,left=200,top=100');
                           return(false);">What's this?</a>

                        </div>
                        <div class="col-6"></div>
                        <div class="col-6">
                           <!-- <img src="bp_config/images/payment/cvv.jpg" style="display: none;"> -->
                        </div>
                     
                     </div>
                     <div class="">
                       <img src="bp_assets/images/payment/cards.png">
                       <img src="bp_assets/images/payment/macafee.png">
                       <img src="bp_assets/images/payment/truste.png">
                       <img src="bp_assets/images/payment/us-postal.png">
                       <img src="bp_assets/images/payment/ssl.png">
                    </div>
                  </div>
                  <div class="form-btn">
                     <div id="terms">
                        
                     </div>
                     <button type="submit" class="btn btn-primary">Place Order</button>
                  </div>                 
               </div>
            </div>
        </div>
    </div>
</div>
</form>

</section>

<?php require 'includes/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="bp_assets/js/products.js?v=<?= time(); ?>"></script>
<script type="text/javascript" src="bp_assets/js/main.js"></script>
<script>
<?php
	$js_array = json_encode(getCart());
	echo "var cart_array = ". $js_array . ";\n";
?>


tiralTerm = false;
 for (i = 0; i < products.data.length; i++) {
   if ( cart_array[i] != undefined ){
	   price = products.data[i].price[cart_array[i].item_quantity];
		if( cart_array[i].item_package == 'Test'){
			price = '0.00';
			tiralTerm = true;
		 }
		
	   document.querySelector('.checkouttable').innerHTML += `
		<tr>
		   <td colspan="3">${products.data[i].name}</td>
		   <td colspan="3" class="categoryCol d-none">${cart_array[i].item_package}</td>
		   <td class="priceCol" id='row_price_${i}'>$${price}</td>
		   <td class="qtyCol"><span>${cart_array[i].item_quantity}<input type="hidden" name="cart_array[${i}][item_quantity]" data-prodid="${cart_array[i].item_product}" data-id="${i}" data-price="${i}" value='${cart_array[i].item_quantity}' data-pack="${cart_array[i].item_package}"  ></span></td>
		   <td class="totalCol" id='row_total_${i}' data-product='${products.data[i].name}'  data-pack='${cart_array[i].item_package}' data-shipping="${products.data[i].shippingPrice}">
            <strong>
            $${parseFloat(price).toFixed(2) }
            </strong>
         </td>
		</tr>`
   }	
}
var termsHtml = '';

termsHtml = termsHtml + '<div class="terms_col my-3">';
termsHtml = termsHtml + '<input type="checkbox" class="total_agree" value="agree" required>';
if( tiralTerm == false ){
   descriptor   = '<?php echo descriptor(); ?>'.toLowerCase();
   phoneNumber  = '<?php echo phoneNumber(); ?>';
   email        = '<?php echo email() ?>';
	termsHtml = termsHtml + "&nbsp;You agree with <a href='termsandconditions.php' target='_blank'>Terms and Conditions</a> and <a href='privacypolicy.php' target='_blank'>Privacy Policy</a>. By placing an order you will immediately be billed $<span class='total_price' id='grand_total'>7.95</span> ($<span class='total_price' id='sub_total'>7.95</span> + $<span id='shipping_charge'>0.00</span> for shipping) for your order. Shipment via USPS  typically takes 3-5 business days to deliver \"after product has left our facility\". Your credit card will be billed as “"+descriptor+"” on your statement. Contact customer service with any questions by calling or "+phoneNumber+" or e-mailing "+email+"";
} else {
	for (i = 0; i < products.data.length; i++) {
		if ( cart_array[i] != undefined && cart_array[i].item_package == 'Test' )
		{
			thisPrice = products.data[i].price[cart_array[i].item_product];
			thisProduct =  products.data[i].name;
			thisShipping = '$'+products.data[i].shippingPrice;
			phoneNumber  = '<?php echo phoneNumber(); ?>';
			descriptor   = '<?php echo descriptor(); ?>'.toLowerCase();
			email        = '<?php echo email() ?>';
			
			termsHtml = termsHtml + "<strong>"+thisProduct+"</strong> - Test<br> <p class='lead mb-0 text-primary'>No <p> By placing an order, you agree to the full terms and conditions and privacy policy. "+thisProduct+" now for 15 days for only "+thisShipping+". Your 15-day offer will start upon receipt of "+thisProduct+" if you like our product, you can keep it. After your 15 day period has ended you will be billed the full retail price of "+thisPrice+". This is a one-time charge, and the cardholder will not be billed any future charges. For all MasterCard transactions ONLY: Within 5 days, you will receive an email requiring your response to your onetime charge of "+thisPrice+". If you are happy with "+thisProduct+", you are required to consent to the onetime charge of "+thisPrice+". If our product is not right for you, simply call "+phoneNumber+", contact us via email <a href='mailto:"+email+"'>"+email+"</a>, or click on the <a href='cancellation.php'>Cancellation</a> Link to cancel your order. Shipment via USPS  typically takes 3-5 business days to deliver \"after product has left our facility\". Your credit card will be billed as '"+descriptor+"' on your statement.";
		}
	}
}
termsHtml = termsHtml + '</div>';
$('#terms').html(termsHtml);



function creditCardTypeFromNumber(num) {
   // first, sanitize the number by removing all non-digit characters.
   num = num.replace(/[^\d]/g,'');
   // now test the number against some regexes to figure out the card type.
   if (num.match(/^5[1-5]\d{14}$/)) {
     return 'MasterCard';
   } else if (num.match(/^4\d{15}/) || num.match(/^4\d{12}/)) {
     return 'Visa';
   } else if (num.match(/^3[47]\d{13}/)) {
     return 'AmEx';
   } else if (num.match(/^6011\d{12}/)) {
     return 'Discover';
   }
   return 'UNKNOWN';
 }
 
 $('#cc_number').change(function() {
    $('#cc_type').val(creditCardTypeFromNumber($(this).val()));
});

function UpdateTotal() {
		var totalPrice = subtotal = 0;
		var totalShipping = 0;
		var prodidqty = '';
		if( $('td[id^="row_total"]').length == 0 ){
			$('#removeall').val(1); 	
		}
		$('td[id^="row_total"]').each(function() {
			if( $(this).data('shipping') != undefined ) {
				console.log($(this).data('shipping'));
				totalShipping = parseFloat(totalShipping) + parseFloat( $(this).data('shipping'))
			}
			subtotal = parseFloat(subtotal) + parseFloat( $(this).text().replace(/[\$]/g, ''));
		});
		
		
		totalShipping = parseFloat(totalShipping).toFixed(2);
		totalPrice = (parseFloat(subtotal) + parseFloat(totalShipping)).toFixed(2);
		$('#subtotal').text(subtotal.toFixed(2));
		$('#sub_total').text(subtotal.toFixed(2));
		
		$('#shipping').text(totalShipping);
		$('#shipping_charge').text(totalShipping);
		
		$('#total').text(totalPrice);	
		$('#grand_total').text(totalPrice);		
	}
function LoadCart(){
		$('input[name^="cart_array"]').each( function( key, inpObj ) {
				if( inpObj.type == 'hidden' ){ 
					qty = inpObj.value;
					var id = $(inpObj).data('id');
					var prod_id = $(inpObj).data('prodid');
					price = products.data[id].price[ Object.keys(products.data[id].price)[qty - 1 ]  ];
					console.log(inpObj.value+" "+$(inpObj).data('prodid') +' '+price); 
					$("#row_total_" + id).text('$' + parseFloat( price ).toFixed(2));
					$("#row_price_" + id).text('$' + parseFloat( price ).toFixed(2));
				} 
			});		
		UpdateTotal();	
	}
	LoadCart();	
function update_expire() {
  var month = document.getElementById("fields_expmonth");
  var month_value = month.options[month.selectedIndex].value;
  var year = document.getElementById("fields_expyear");
  var year_value = year.options[year.selectedIndex].value;
  if ((month_value != '') && (year_value != '')) {
    document.getElementById("cc_expires").value = month_value + year_value;
  } else {
    document.getElementById("cc_expires").value = '';
  }
}
$('input:checkbox[name=same_as_billing]').click(function() {
    var ischecked= $(this).is(':checked');
    if(!ischecked){
        $('#shipping_detail').show();
    }else{
        $('#shipping_detail').hide();
    }
    $('#shipping-address-same-as-billing').val(ischecked);
});
</script>
</body>
</html>