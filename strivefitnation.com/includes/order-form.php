<div class="d-flex justify-content-center">
<div id="form-order" class="p-3 text-center card mt-5" style="flex:0 0 400px;">
	<div id="form-order-header">
		<p class="display-4">Total: <span class="order_total">$0.00</span></p>
		<p>PAYMENT INFORMATION</p>
	</div>

	<?php
		if( isset( $_GET['error_message'] ) ){
			$msg = explode("hints",$_GET['error_message']);
			echo '<div class="err_msg"><em>'.$msg[0].'</em></div>';
		}
	?> 

	<div id="form-content">
	<form accept-charset='ISO-8859-1' enctype='application/x-www-form-urlencoded;charset=ISO-8859-1' name='opt_in_form' id='opt_in_form' action='orderProcess.php<?php if( !empty( $_SERVER['QUERY_STRING'] ) ){ echo '?'. $_SERVER['QUERY_STRING']; }?>' method='post' class="mt160 text-left" onsubmit="confirm.php">
	<div class="form-group">
	<label class="cc-type">Card Type:</label>
	<select class="form-control" onchange="payment_change(this)" onkeydown="this.onchange();" onkeyup="this.onchange();" id="cc_type" name="cc_type">
		<option value="">Select Payment Method</option>
		<option value="visa">Visa</option>
		<option value="mastercard">MasterCard</option>
		<option value="discover">Discover</option>
	</select>
	</div>

	<div class="form-group">
	<label class="cc-num">Credit Card #:</label>
	<input type="text" maxlength="16" onkeydown="return onlyNumbers(event, 'cc')" id="cc_number" name="cc_number" autocomplete="off" class="card form-control"/>
	</div>

	<div class="form-group">
	<label class="cc-expiry">Exp. Date:</label>
	<select name="fields_expmonth" onchange="javascript:update_expire()" id="fields_expmonth" class="exp form-control mb-2">
		<option selected value="">Month</option>
		<option value="01">(01) January</option>
		<option value="02">(02) February</option>
		<option value="03">(03) March</option>
		<option value="04">(04) April</option>
		<option value="05">(05) May</option>
		<option value="06">(06) June</option>
		<option value="07">(07) July</option>
		<option value="08">(08) August</option>
		<option value="09">(09) September</option>
		<option value="10">(10) October</option>
		<option value="11">(11) November</option>
		<option value="12">(12) December</option>
	</select>
	<select name="fields_expyear" onchange="javascript:update_expire()" id="fields_expyear" class="exp form-control">
		<option value='22'>2022</option>
		<option value='23'>2023</option>
		<option value='24'>2024</option>
		<option value='25'>2025</option>
		<option value='26'>2026</option>
		<option value='27'>2027</option>
		<option value='28'>2028</option>
		<option value='29'>2029</option>
		<option value='30'>2030</option>
		<option value='31'>2031</option>
		<option value='32'>2032</option>
	</select>
	<input type="hidden" id="cc_expires" name="cc_expires" /> 
	</div>

	
	<div class="form-group">
	<label class="cvv2">CVV2:</label>
	<input  autocomplete="off"  type="text" id="cc_cvv" name="cc_cvv"  size="4" class = "cvv2 form-control" maxlength="4" onkeydown="return onlyNumbers(event, 'cc')" onkeydown="return onlyNumbers(event, 'cc')"/>
	<a href="./cvv.html" onclick="window.open('./cvv.html', 'cvv', 'scrollbars=yes,width=600,height=400,left=200,top=100');
	return(false);" class ="f11">What's this?</a>
	</div>


	<input type="checkbox" name="terms" id="terms_checkbox" class="checkbox"/>
	<span class="checkbox-text agree_terms"> I agree to the <a href="termsandconditions.php">Terms and Conditions</a> and the <a href="privacypolicy.php">Privacy Policy</a>.</span><br>

	<input type="checkbox" name="terms" id="terms_checkbox2" class="checkbox"/> 
	<span class="checkbox-text">Terms will be visible after selecting a product.</span>	<br>

	<div id="form-order-footer" class="py-3">
		<button class="btn btn-success" type="button" alt="Submit" onclick="form_validator('checkout');">SEND MY ORDER</button>
	</div>
	<input type='hidden' id='hasFormSubmitted' name='hasFormSubmitted' value='' />
	<input type='hidden' id='ProductSelect' name='ProductSelect' value='' />
	</form>

	</div> <!-- end of form content -->

	<div id="cc-images" class="text-left">
		<img src="https://sokaappadsp.com/default/paysafe/bp_assets/images/payment/security.png">
		<img src="https://sokaappadsp.com/default/paysafe/bp_assets/images/payment/security2.png">
		<img src="https://sokaappadsp.com/default/paysafe/bp_assets/images/payment/usps.png">
		<img src="https://sokaappadsp.com/default/paysafe/bp_assets/images/payment/security3.png">
	</div>
</div>
</div>