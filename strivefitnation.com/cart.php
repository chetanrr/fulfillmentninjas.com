<?php 
	require 'index_files/information.php';
	if( $_POST ){
		if ( isset( $_POST['cart_array'] ) ){ 
			$_SESSION["shopping_cart"] = array(); 
			foreach($_POST['cart_array'] as $id=>$data){
				AddUpdateCart($id, $data['item_product'], $data['item_quantity'],$data['item_package'], true);
				 
			}
		}
		if ( isset( $_POST['removeall'] ) && $_POST['removeall'] == 1 ){
			$_SESSION["shopping_cart"] = array();
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
                    <h1 class="display-1 bannertitle mb-4">Cart</h1>
                    <div class='text-white'>
                    <i class="fa-solid fa-house"></i> <a href="index.php">Home</a> / <a class="text-white">Cart</a>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>

<section>
	<div class="container">
    <form action="checkout.php" method="post" id='frm_cart'>
	<div class="row cart mb-5">
        <div class="col-lg-8">
            
			<table class="table table-cart mb-5 text-white" style="width:100%;">
                <thead>
                    <tr>
                        <td>&nbsp;</td>
                        <td></td>
                        <td colspan="3">Product</td>
                        <td>Price</td>
                        <!-- <td>Quantity</td> -->
                        <td>Subtotal</td>
                    </tr>
                </thead>
                <tbody class="productlist">
                   
                </tbody>
            </table>

            <div class="col-12 cart-button">
                <a href="products.php" id='acontinue_shopping' class="btn btn-outline-success">Continue Shopping</a>
               
				<input type='hidden' name='removeall' id='removeall' value='0' />
				<input type='hidden' name='continue_shopping' id='continue_shopping' value='0' />
            </div>
			
        </div>

        <div class="cart-right-col col-lg-4 col-12">
          <div class="row">
             <div class="col-12">
                <h2>Cart Details</h2>
             </div>
             <div class="col-12">
                <p class="d-flex border-bottom py-2 mb-0 justify-content-between">
                   <span>Subtotal</span>
                   <span>$<span id="subtotal">0.00</span></span>
                </p>
                <p class="d-flex border-bottom py-2 mb-0 justify-content-between">
                   <span>Shipping</span>
                   <span>$<span id="shipping">0.00</span></span>
                </p>
                <p class="d-flex border-bottom py-2 mb-0 fw-bold justify-content-between total-col">
                   <span>Total</span>
                   <span>$<span id="total">0.00</span></span>
                </p>
             </div>
             <div class="col-12 mt-4 sidebar-button-column">
                <button  type="submit" class="btn btn-primary w-100">Proceed to checkout</button>
             </div>
          </div>
        </div>
		</form>
    </div>
</div>
</section>

<?php require 'includes/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="bp_assets/js/products.js?v=<?= time(); ?>"></script>

<script>
<?php
	$js_array = json_encode(getCart());
	echo "var cart_array = ". $js_array . ";\n";
?>
    for (i = 0; i < products.data.length; i++) {
    
	if ( cart_array[i] != undefined ){
		price = Object.values(products.data[i].price)[0];
		
		price = products.data[i].price[cart_array[i].item_product];
		if( cart_array[i].item_package == 'Other'){
			price = '0.00';
		}
	document.querySelector('.productlist').innerHTML += `
        <tr id="${products.data[i].id}">
          <td><i class="fa-solid fa-circle-xmark text-danger" data-id="${i}" ></i></td>
          <td>
			<input type="hidden" name="cart_array[${i}][item_package]" data-id="${i}" data-price="${i}" value='${cart_array[i].item_package}'>
			<input type="hidden" name="cart_array[${i}][item_product]" data-id="${i}" data-price="${i}" value='${cart_array[i].item_product}'>
		  </td>
          <td colspan="3"><small>${products.data[i].name}</small></td>
          <td id='row_price_${i}'>
			$${price}
		  </td>
          <td class="totalCol" id='row_total_${i}' data-shipping="${products.data[i].shippingPrice}" >$${parseFloat(price).toFixed(2)}</td>
       </tr>
        `
	}
}
if( cart_array.length == 0 ){
	location.href='index.php';
}
</script>

<script>
	$(document).on('keypress', 'input[name^="qty"]', function(event) {
		return (((event.which > 47) && (event.which < 58)) || (event.which == 13));
	});
	$(document).on('paste', 'input[name^="qty"]', function(event) {
		if (event.originalEvent.clipboardData.getData('Text').match(/[^\d]/)) {
			event.preventDefault();
		}
	});
	function LoadCart(){
		$('input[name^="cart_array"]').each( function( key, inpObj ) {
				if( inpObj.type == 'text' ){ 
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
	
	$('#acontinue_shopping').click(function(){
		$('#continue_shopping').val(1);
		$('#frm_cart').submit();
		
	});
	
	$('.fa-circle-xmark').click(function() { 
		$(this).closest("tr").remove();
		$('<input>').attr({
			type: 'hidden',
			id: 'remove',
			name: 'remove',
			value:'yes'
		}).appendTo('form');
		if( $('td[id^="row_total"]').length == 0 ){
			$('#removeall').val(1); 	
		}
		$('#frm_cart').submit();
		
	});
	$('.add').click(function() {
		if($(this).prev().data('pack') == 'Other' ){
			alert('Can not change quantity in Other package');
			return;
		}	
		if ($(this).prev().val() < $(this).prev().data('max')) {
			$(this).prev().val(+$(this).prev().val() + 1);
			var id = $(this).prev().data('id');
			var prod_id = $(this).prev().data('prodid');
			
			newQty = $(this).prev().val();
			price = products.data[id].price[ Object.keys(products.data[id].price)[newQty - 1 ]  ]; 
			if(newQty >= 0 ){
				$("#row_price_" + $(this).prev().data('id')).text('$'+price);
			}else{
				price = 0;
			}
			if(newQty == 0 ) { newQty = 1; }
			$("#row_total_" + $(this).prev().data('id')).text('$' + parseFloat( price ).toFixed(2));
			$("input[name='cart_array["+id+"][item_product]']").val(Object.keys(products.data[id].price)[newQty - 1 ]);
		}
		UpdateTotal();
		
	});
	$('.sub').click(function() {
		if($(this).next().data('pack') == 'Other' ){
			alert('Can not change quantity in Other package');
			return;
		}
		newQty = $(this).next().val() - 1;
		if ($(this).next().val() <= $(this).next().data('max') && newQty > 0 ) 
		{
			if ($(this).next().val() > 0) 
			{
				$(this).next().val(+$(this).next().val() - 1);
				var id = $(this).next().data('id');
				var prod_id = $(this).next().data('prodid');
				
				newQty = $(this).next().val();
				
				price = products.data[id].price[ Object.keys(products.data[id].price)[newQty - 1 ]  ]; 
				if(newQty >= 0 ){
					$("#row_price_" + $(this).next().data('id')).text('$'+price);
				}else{
					price = 0;
				}
				if(newQty == 0 ) { newQty = 1; } 
				$("#row_total_" + $(this).next().data('id')).text('$' + parseFloat( price ).toFixed(2));
				$("input[name='cart_array["+id+"][item_product]']").val(Object.keys(products.data[id].price)[newQty - 1 ]);
			}
		}
		UpdateTotal();
		
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
		$('#shipping').text(totalShipping);
		$('#total').text(totalPrice);			
	}
</script>
<script src="bp_assets/js/main.js"></script>
</body>
</html>