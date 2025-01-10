<footer class="bg-light">
    <div class="py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-4 pe-5"> 
                    <span class="footer-logo"><?php productName()?></span>
                    <p class="fw-bold"><?php corpName()?></p>
                    <p class="pt-2">Empowering Your Journey to Optimal Health</p>
                </div>
                <div class="col-md-4">
                    <h4>Navigation</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="index.php">Home</a></li>
                        <li class="mb-2"><a href="ingredients.php">Ingredients</a></li>
                        <li class="mb-2"><a href="termsandconditions.php">Terms &amp; Conditions</a></li>
                        <li class="mb-2"><a href="privacypolicy.php">Privacy Policy</a></li>
                        <li class="mb-2"><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Get in touch</h4>
                    <p>
                        <i class="fa-solid fa-location-dot"></i>
                        <?php address()?>,<br>
                        <?php city()?>, <?php state()?>,<br>
                        <?php zipCode()?>, USA
                    </p>   
                    <p>
                        <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:<?php email()?>"><?php email()?></a>
                    </p>
                    <p>
                        <i class="fa-solid fa-phone"></i>
                        <?php phoneNumber()?>
                    </p>               
                </div>
                <div class="col-md-12 pt-5">
                    <strong>FDA Disclaimer:</strong>
                    <small>* The statements made on this website have not been evaluated by the Food &amp; Drug Administration (FDA). The FDA evaluates only foods and drugs, not supplements like those found in <?php productName()?>. <?php productName()?> is not intended to diagnose, prevent, treat, or cure any disease(s). The information provided on <?php productName()?> or this company is not a substitute for a face-to-face consultation with your physician or health care professional and should not be construed as medical advice for you. If there is a change in your medical condition, please stop using <?php productName()?> immediately and consult your physician or health care professional. The testimonials on this website are unique cases and we do not guarantee that you will get similar results. Your results may vary. Individuals are remunerated. <?php productName()?> is not affiliated with any media outlets mentioned on this website. All trademarks on <?php productName()?>, whether registered or not, are the property of their respective owners.</small>
                </div>
            </div>
        </div>
    </div>
    <div class="border-top">
        <div class="container py-4">
            <div class="row justify-content-between">
                <div class="col-auto">© <span class="year"></span> | <?php productName() ?>. All rights reserved.</div>    
                <div class="col-auto"><b>We Accept </b><img src="bp_assets/images/payment/cards.png"></div>                
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    let productName = "<?php productName() ?>";
</script>