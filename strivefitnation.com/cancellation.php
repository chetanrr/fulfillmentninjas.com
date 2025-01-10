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

<?php require 'includes/header.php'; ?>


<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Cancellation of order</h1>
                <?php require 'includes/cancellation-form.php'; ?>
            </div>
        </div>        
    </div>
</section>

<?php require 'includes/footer.php'; ?>

<script src="bp_assets/js/main.js"></script>

</body>
</html>