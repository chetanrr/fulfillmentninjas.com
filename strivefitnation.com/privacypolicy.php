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
                <div class="col-12 align-self-center">
                    <div>
                        <h1 class="display-1 bannertitle mb-4">Privacy Policy</h1>
                        <div class='text-white'>
                            <i class="fa-solid fa-house"></i> <a href="index.php">Home</a> / <a class="text-white">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div> 
        </div>       
    </div>


<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
        
                <p>The website’s privacy policy is subjected to further change by <?php productName(); ?>’s team at any given time. Updates to the website and to the policy will be implemented according to our schedule and announced in due time. Anyone using the website is presumed to have gone thoroughly through the privacy policy. We presume that you agree to the terms and conditions, as well as to the revisions that will occasionally be introduced.</p>
                <p>The team is fully committed to protecting your privacy and your sensitive data. All of the information collected through your input will be used to give you a high quality service. To understand our policies better, please go through all of the information presented on this page.</p>
                <p>Customer Detail Processing<br>
                The database of customer information that we’ve created through your input is protected and will never be shared with third parties. We’re also committed to maintaining and protecting the privacy of anonymous users without revealing information about their identity (unless we’re compelled to do so through the respective legal channels).</p>
                <p>We preserve our client database such that it will not be sold to third parties. If you are an anonymous user, we will respect your right to privacy and will therefore not divulge your true identity unless compelled through legal channels.</p>
                <p>There are certain circumstances under which we’ll be obliged to disclose personal information. These circumstances include the following:</p>
                <ul>
                    <li>Having to comply with laws and regulations in good faith</li>
                    <li>Having to enforce the terms of this user agreement and its implementation</li>
                    <li>Having to protect and safeguard the safety of all users and other parties that are using the product</li>
                </ul>
                <p><strong>How Information is Gathered and Used</strong><br>
                To provide a quality service, we’ll require information like your full name, your mail address, phone number and credit card information. This information is required strictly for processing your order in a timely manner. We require this information to maintain your account and offer a reliable service.</p>
                <p>To protect private information, we use Secure Server Software (SSL). All of your information will be properly encrypted before it reaches our server. Multiple layers of encryption are used, which means that solely authorised individuals will have access to the private information stored in our database.</p>
                <p><strong>Payment Information</strong><br>
                The credit card number and payment details you provide will not be stored anywhere on the website, after the transaction is completed. Payments are processed using secure 128-bit SSL encryption.</p>
                <p><strong>Cookie Policy</strong><br>
                This website uses cookies. Cookies are details stored by the browser through your visit to a respective website. The information is stored in the hard drive section. We don’t collect any personal information and we can’t identify you. You’ll simply use information to log into your account. If you use a browser that accepts cookies, you can change the setting. To access the website, however, you’ll have to use a browser that accepts cookies.</p>
                <p><strong>Client Consent Terms</strong><br>
                To conclude these terms of use, the <?php productName(); ?> team presumes that you agree with the collection of personal information for the purposes stated in this document. Changes to the privacy policy will be uploaded in due time, giving you access to the updated document. You’ll be fully notified of modifications that affect the collection and disclosure of your personal or financial details.</p>

            </div>
        </div>        
    </div>
</section>

<?php require 'includes/footer.php'; ?>

<script src="bp_assets/js/products.js?v=<?= time(); ?>"></script>
<script src="bp_assets/js/main.js"></script>

</body>
</html>