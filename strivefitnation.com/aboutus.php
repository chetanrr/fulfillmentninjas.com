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
                        <h1 class="display-1 bannertitle mb-4">About us</h1>
                        <div class='text-white'>
                        <i class="fa-solid fa-house"></i> <a href="index.php">Home</a> / <a class="text-white">About us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container mb-5">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8">
                    <h3>Our Story</h3>
                    <h1 class="display-5">
                        Unique story of <?php productName()?></h1>
                    <p class="lead pb-4">Welcome to <?php productName()?>!, your top-tier source for premium supplements and essential wellness products.</p>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <h3>What Sets Us Apart</h3>
                            <p>At VitalAuraWellness, we recognize that your health is paramount. That's why we are committed to exceeding expectations by guaranteeing that each product in our store upholds the utmost standards of quality, purity, and effectiveness.</p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <h3>Our Mission</h3>
                            <p>Our goal is to empower individuals in their pursuit of optimal health and well-being. We firmly believe that genuine wellness encompasses physical, mental, and emotional vitality, and our mission is to equip you with the necessary tools and resources to flourish in all areas of your life.</p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h3>Our Promise</h3>
                            <p>Ensuring your satisfaction and well-being remains our utmost priority. We are dedicated to delivering an outstanding shopping experience, characterized by our user-friendly website and attentive customer service team. </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <img class="rounded-4" src="bp_assets/images/about-bg.jpg" alt="">
                </div>
                <div class="col-12 py-3">
                We extend our gratitude for selecting VitalAuraWellness as your reliable provider of supplements and wellness essentials. Here's to your health, happiness, and vitality – for when you're thriving, navigating life's currents becomes a joyous endeavor!
                </div>
            </div>
        </div>
    </section>

    <?php require 'includes/footer.php'; ?>
    <script src="bp_assets/js/products.js?v=<?= time(); ?>"></script>
    <script src="bp_assets/js/main.js"></script>

</body>

</html>