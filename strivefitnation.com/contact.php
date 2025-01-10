<?php require 'index_files/information.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="googlebot" content="noindex">
	<meta name="robots" content="noindex">
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
                <div class="col-12 col-md-6 align-self-center">
                    <div>
                        <h1 class="display-1 bannertitle mb-4">Contact us</h1>
                        <div class='text-white'>
                        <i class="fa-solid fa-house"></i> <a href="index.php">Home</a> / <a class="text-white">Contact us</a>
                        </div>                        
                    </div>
                </div>
            </div> 
        </div>       
    </div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12 pe-5">                
                <p>If you have any questions about the practices of this site or your dealings with this Web site, you can call us Toll Free at <?php phoneNumber();?> or contact us via email.</p>
                <p><i class="fa fa-user"></i> Brand Name : <?php productName()?></p>
                <p><i class="fa fa-building"></i> Corporation : <?php corpName(); ?>   </p>
                <p><i class="fa fa-calendar"></i> Availability: Monday through Sunday 5 A.M. to 5 P.M. PST.</p>
                
                <p><i class="fa fa-envelope"></i>  Email: <a href="mailto:<?php email();?>"><?php email();?></a></p>
                <p><i class="fa fa-map-marker"></i> <?php address();?>, <?php city();?>, <?php state();?>, <?php zipCode();?>, USA</p>        
                <hr style="background:#aeaeae;">
                <p><i class="fa fa-map-marker"></i> <b>Return Information</b></p>
                <p>Call our Customer Service Number at <a href="tel:<?php phoneNumber(); ?>"><?php phoneNumber(); ?></a>  to receive the products order number.</p>
                <p><?php returnAddress();?></p>
            </div>
        </div>        
    </div>
</section>

<?php require 'includes/footer.php'; ?>

<script src="bp_assets/js/products.js?v=<?= time(); ?>"></script>
<script src="bp_assets/js/main.js"></script>

</body>
</html>