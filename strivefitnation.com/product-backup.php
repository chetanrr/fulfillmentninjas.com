<?php require 'index_files/information.php'; ?>
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
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
</head>
<body>

<div>
    <?php require 'includes/header.php'; ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 align-self-center">
            </div>
        </div> 
    </div>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
               <h1 class="text-center mb-5 display-3">SUBSCRIBE NOW!</h1>
            </div>
        </div>
        <div class="row prodDetail justify-content-center"></div>
    </div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

    </div>
  </div>
</div>

<?php require 'includes/footer.php'; ?>


<script src="bp_assets/js/products.js"></script>
<?php
	$indx = ( isset($_REQUEST['reqid']) && $_REQUEST['reqid'] != '' && is_numeric($_REQUEST['reqid'])  ? $_REQUEST['reqid']  : 0 );
?>
<script type="text/javascript">
	var index = <?php echo $indx-1;  ?>; 
    
    document.querySelector('.row.prodDetail').innerHTML += `
        <div class="col-md-7 ${products.data[index].offer}">
            <aside class="bg-white text-dark subscribebox">
                <h2 class="text-primary">${products.data[index].name}</h2>
                <p>${products.data[index].intro}</p>
                <h3>Select Your Membership Plan:</h3>
                <select class="form-select my-4" id="qty_dropdown">
					<option selected="" disabled="" value="">Select a plan</option>
				</select>
                <div class="clearfix">
                    
                    <label for="agreement" class="mb-4">
                        <input required="" id="agreement" type="checkbox">
                        I agree to the 
                        <a href="https://strivefitnation.com/termsandconditions.php" target="_blank">Terms of Service</a>, 
                        <a href="https://strivefitnation.com/privacypolicy.php" target="_blank">Privacy Policy</a>, and 
                        <a href="https://strivefitnation.com/refund-policy" target="_blank">Refund Policy</a>. 
                        By placing your monthly recurring order of 
                        <span style="font-weight: bold;" id="chosenPlan">[Plan]</span>, 
                        you will be charged <span style="font-weight: bold;" id="chosenPrice">[Price]</span> now and every 30 days thereafter until you cancel your subscription. 
                        You will receive an electronic notification 5 to 7 days prior to your transaction and a receipt after each successful transaction.
                    </label>
                </div>
                
                <button type="button" id='addtocart' class="btn btn-primary btn-lg px-5">Add to Cart</button>
            </aside>
        </div>`
        
    
    if(products.data[index].ingredients){
        document.querySelector('.modal-content').innerHTML += `
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">${products.data[index].name}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <img src="bp_assets/images/${products.data[index].ingredients}">
        </div>
        `
    }
/* prepare product dropdwon */
for (i = 0; i < products.data.length; i++) {
        if (products.data[i].offer == 'main') {
			document.querySelector('#qty_dropdown').innerHTML += `<option value="${products.data[i].id}">${products.data[i].name}</option>`
		}
}		
/* Prepare Qty Dropdown */ 
/*qty=1;
Object.keys(products.data[index].price).forEach(function (key) {
    document.querySelector('#qty_dropdown').innerHTML += `<option value="${key}">${qty++}</option>`
});*/
/* Prepare Pakage dropdown */
/*for (i = 0; i < products.data[index].type.length; i++) {
    document.querySelector('#package_dropdown').innerHTML += `<option value="${products.data[index].type[i]}">${products.data[index].type[i]}</option>`
}*/
/* show price based on qty change */
$("#qty_dropdown").change(function(e){
	$("#chosenPlan").html('');
    $("#chosenPlan").html($('#qty_dropdown option:selected').text())
    $("#chosenPrice").html(`$${products.data[index].price[$(this).val()].toFixed(2)}`)
});
/* Disable Qty DropDown if Other selecte else as it was */
$("#package_dropdown").change(function(e){
    if(this.value == 'Other'){
        $(".price").html("$0.00");
        $(".shippingprice").html(`$${products.data[index].shippingPrice}`);
        $("#qty_dropdown").val(Object.keys(products.data[index].price)[0]);
        $("#qty_dropdown").prop('disabled', true);
    }else{
        $("#qty_dropdown").val(Object.keys(products.data[index].price)[0]);
        $("#qty_dropdown").prop('disabled', false);
    }
});
$("#addtocart").click(function(e){
	//$('#output').text('The checkbox is not checked.');
	if ( $('#qty_dropdown').val() == '' ||  $('#qty_dropdown').val() == null){
		alert('Please select plan')
	}else if (!$('#agreement').is(':checked')) {
		alert('Please check terms')
	} else {
		location.href='addtocart.php?reqid='+$('#qty_dropdown').val()+'&reqpid='+$('#qty_dropdown').val()+'&reqqty=1&package='+$("#package_dropdown").val();;
	}
});/*
$("#package_dropdown").change();

for (i = 0; i < products.data[index].description.length; i++) {
    document.querySelector(".prodDiscLoop").innerHTML += `
        <li class="mb-1">${products.data[index].description[i]}</li>
    `
}
for (i = 0; i < products.data[index].highlight.length; i++) {
    document.querySelector(".prodHighLoop").innerHTML += `
        <li class="mb-1">${products.data[index].highlight[i]}</li>
    `
}*/
</script>
<script src="bp_assets/js/main.js"></script>

</body>
</html>