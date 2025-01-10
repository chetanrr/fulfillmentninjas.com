<?php require 'index_files/information.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="googlebot" content="noindex">
    <meta name="robots" content="noindex">
    <title>
        <?php productName()?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                        <h1 class="display-1 bannertitle mb-4">Ingredients</h1>
                        <div class='text-white'>
                        <i class="fa-solid fa-house"></i> <a href="index.php">Home</a> / <a class="text-white">Ingredients</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container mb-5">
            <div class="row">
            <div class="col-md-12">            
                <h1>Ingredients</h1>                
            </div>
            <div class="col-md-6 mb-5">
                <div class="card">
                    <div class="card-header"><?php productName()?> <span class="badge bg-success">ACV Gummies</span></div>
                    <div class="card-body">
                        <img src="bp_assets/images/ingredients-acv-gummies.jpg" alt="">
                    </div>
                    <div class="card-footer">
                        60 Gummies
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="card h-100">
                    <div class="card-header"><?php productName()?> <span class="badge bg-success">Cleanse Capsules</span></div>
                    <div class="card-body">
                        <img src="bp_assets/images/ingredients-cleanse.jpg" alt="">
                    </div>
                    <div class="card-footer">
                        60 Capsules
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="card h-100">
                    <div class="card-header"><?php productName()?> <span class="badge bg-success">Super Greens Powder</span></div>
                    <div class="card-body">
                        <img src="bp_assets/images/ingredients-super-greens.jpg" alt="">
                    </div>
                    <div class="card-footer">
                        60 Servings
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="card h-100">
                    <div class="card-header"><?php productName()?> <span class="badge bg-success">Keto Capsules</span></div>
                    <div class="card-body">
                        <img src="bp_assets/images/ingredients-keto.jpg" alt="">
                    </div>
                    <div class="card-footer">
                        60 Capsules
                    </div>
                </div>
            </div>
                </div>
            </div>
            </div>            
        </div>

    </section>

    <?php require 'includes/footer.php'; ?>
    <script src="bp_assets/js/products.js?v=<?= time(); ?>"></script>
    <script src="bp_assets/js/main.js"></script>

</body>

</html>