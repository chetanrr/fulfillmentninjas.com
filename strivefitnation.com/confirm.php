<!DOCTYPE html>
<?php require 'index_files/information.php'; ?>
<?php $_SESSION['shopping_cart'] = array(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="googlebot" content="noindex">
	<meta name="robots" content="noindex">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title><?php productName()?></title>
</head>

<body style="height:100vh" class="bg-light text-center d-flex align-items-center">
	<div class="container">
		<div id="upsellwrapper" class="confirm">
			<div id="upsellText">
				<h1 class="display-1 my-4">
					<div style="display:inline-block; height:120px; width:120px; border:2px solid green; border-radius:50%;">
						<img src="bp_assets/images/check-solid.svg" style="height:120px; width:70px;" alt="">	
					</div>
				</h1>
				<h1 class="my-4">Thank You for Your Order</h1>
				<p><strong>Your Order ID is: <?php echo($_GET['order_id']) ?></strong></p>
				<p>
				You will receive an order confirmation email for each product that you purchased in the next few minutes. Your package will be mailed within the next 24 hours.
				</p>
				<p>You can expect to receive your package in the next 4-8 business days.</p>
				<p>
					<strong>If you have any questions or concerns about your order you can contact customer support:<br>
					Phone: <?php phoneNumber()?><br>
					Email: <a href="mailto:<?php email()?>" class="text-success"><?php email()?></a></strong>
				</p>
				<a class="btn btn-success" href="index.php">Go Back</a>
			</div>
		</div>
	</div>
</body>
</html>