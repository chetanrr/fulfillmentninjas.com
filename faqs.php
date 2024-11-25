<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fulfillment Ninjas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
    <?php require 'includes/header.php'; ?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Frequently Asked Questions</h2>
                    <p>See answers to some of the most common questions we get asked.</p>
                </div>
                <div class="col-12 col-lg-2">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="#about">About FULFILLMENT NINJAS</a></li>
                        <li class="list-group-item"><a href="#affiliate">Affiliate Program</a></li>
                        <li class="list-group-item"><a href="#billing">Billing</a></li>
                        <li class="list-group-item"><a href="#carriers">Carriers</a></li>
                        <li class="list-group-item"><a href="#general">General</a></li>
                        <li class="list-group-item"><a href="#">Importing</a></li>
                        <li class="list-group-item"><a href="#">Insurance</a></li>
                        <li class="list-group-item"><a href="#">Integrations</a></li>
                        <li class="list-group-item"><a href="#">International Shipping</a></li>
                        <li class="list-group-item"><a href="#">Pick & Pack</a></li>
                        <li class="list-group-item"><a href="#">Pricing</a></li>
                        <li class="list-group-item"><a href="#">Receiving</a></li>
                        <li class="list-group-item"><a href="#">Returns</a></li>
                        <li class="list-group-item"><a href="#">Shipping</a></li>
                        <li class="list-group-item"><a href="#">SLAs</a></li>
                        <li class="list-group-item"><a href="#">Software</a></li>
                        <li class="list-group-item"><a href="#">Special Requirements</a></li>
                        <li class="list-group-item"><a href="#">Storage</a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-10">
                    <!-- tab jump section starts -->
                    <h3 id="about"><i class="fa-solid fa-circle-info text-secondary"></i> About FULFILLMENT NINJAS</h3>
                    <div class="accordion mb-5" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What does FULFILLMENT NINJAS do?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                FULFILLMENT NINJAS is a 3PL (Third Party Logistics) Company.
                                We store and ship products from our warehouses. Our clients are DTC brands who sell products online.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Where are your fulfillment centers located?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                We have locations in Canada and the United States.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What is your exact warehouse address?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                You can see our addresses by clicking the 'Warehouse Locations' button the Footer. Note: You MUST NOT send inventory until you have been assigned a warehouse.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How many warehouses does FULFILLMENT NINJAS have?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                We have 2 locations in Canada, and 2 in the United States. You can visit our locations page for more information.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    How big are your warehouses?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Our warehouses are ~65,000 sqft across all locations.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tab jump section ends -->

                    <!-- tab jump section starts -->
                    <h3 id="affiliate"><i class="fa-solid fa-circle-info text-secondary"></i> Affiliate Program</h3>
                    <div class="accordion mb-5" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseAffiliate1" aria-expanded="true" aria-controls="collapseAffiliate1">
                                    How do I make money as an Affiliate?
                                </button>
                            </h2>
                            <div id="collapseAffiliate1" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                It's simple. We provide you with your own affiliate link which you can share with other businesses. As clients spend money, you earn recurring, lifetime commission.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseAffiliate2" aria-expanded="false" aria-controls="collapseAffiliate2">
                                    What is meant by Lifetime Commission?
                                </button>
                            </h2>
                            <div id="collapseAffiliate2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                What is meant by Lifetime Commission?
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseAffiliate3" aria-expanded="false" aria-controls="collapseAffiliate3">
                                    What is the Commission Rate?
                                </button>
                            </h2>
                            <div id="collapseAffiliate3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                We offer a 5% commission rate on the monthly spend.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseAffiliate4" aria-expanded="false" aria-controls="collapseAffiliate4">
                                    Is there a limit to Earnings?
                                </button>
                            </h2>
                            <div id="collapseAffiliate4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                No. There is no cap on earnings.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseAffiliate5" aria-expanded="false" aria-controls="collapseAffiliate5">
                                    How often are Payouts made?
                                </button>
                            </h2>
                            <div id="collapseAffiliate5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Payouts can be requested at any time, as long as the payout is at least $100 USD.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tab jump section ends -->

                    <!-- tab jump section starts -->
                    <h3 id="billing"><i class="fa-solid fa-circle-info text-secondary"></i> Billing</h3>
                    <div class="accordion mb-5" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBilling1" aria-expanded="true" aria-controls="collapseBilling1">
                                    When will I be billed for services?
                                </button>
                            </h2>
                            <div id="collapseBilling1" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                On the first week of each month, we bill you for the previous month's services. A pre-authorized credit card is also required to be kept on file.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBilling2" aria-expanded="false" aria-controls="collapseBilling2">
                                    What payment methods are accepted?
                                </button>
                            </h2>
                            <div id="collapseBilling2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Credit Card and Bank Payments.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBilling3" aria-expanded="false" aria-controls="collapseBilling3">
                                    What are your payment terms? Is it Net 30 days?
                                </button>
                            </h2>
                            <div id="collapseBilling3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                            <ul>
                                <li>We bill at the start of each month for the previous month’s services.</li>
                                <li>Invoices are due within 7 days.</li>
                            </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBilling4" aria-expanded="false" aria-controls="collapseBilling4">
                                    Are your storage fees pro-rated?
                                </button>
                            </h2>
                            <div id="collapseBilling4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Yes, our storage fees are pro-rated by the week.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBilling5" aria-expanded="false" aria-controls="collapseBilling5">
                                    Can I set up pre-authorized payments?
                                </button>
                            </h2>
                            <div id="collapseBilling5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Yes, absolutely.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tab jump section ends -->

                    <h3 id="carriers"><i class="fa-solid fa-circle-info text-secondary"></i> Carriers</h3>
                    <div class="accordion mb-5" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseCarriers1" aria-expanded="true" aria-controls="collapseCarriers1">
                                    What carriers do you use for International shipping?
                                </button>
                            </h2>
                            <div id="collapseCarriers1" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                We use UPS, FedEx, DHL and APC for international shipments.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseCarriers2" aria-expanded="false" aria-controls="collapseCarriers2">
                                    What carriers do you use in Canada?
                                </button>
                            </h2>
                            <div id="collapseCarriers2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                In Canada, we use UPS, FedEx and Canada Post.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseCarriers3" aria-expanded="false" aria-controls="collapseCarriers3">
                                    What carriers do you use in USA?
                                </button>
                            </h2>
                            <div id="collapseCarriers3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                In the US, we use UPS, USPS and Fedex.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseCarriers4" aria-expanded="false" aria-controls="collapseCarriers4">
                                    If I only want to use a certain carrier, is that possible?
                                </button>
                            </h2>
                            <div id="collapseCarriers4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Yes, it is, but we don't recommend it. When multiple carriers are enabled, we are able to rate-shop and compare the rates across carriers for each shipment. With single carriers, you lose the ability to save where possible.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseCarriers5" aria-expanded="false" aria-controls="collapseCarriers5">
                                    Can I use my own carrier account to ship?
                                </button>
                            </h2>
                            <div id="collapseCarriers5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Yes
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 id="general"><i class="fa-solid fa-circle-info text-secondary"></i>General</h3>
                    <div class="accordion mb-5" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseGeneral1" aria-expanded="true" aria-controls="collapseGeneral1">
                                    Will I have someone I can reach out to as needed?
                                </button>
                            </h2>
                            <div id="collapseGeneral1" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                            <ol>
                                <li>We will assign a dedicated Account Manager who will be your primary point of contact for everything you need.</li>
                                <li>They will help you with onboarding as well as any other work requests.</li>
                            </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseGeneral2" aria-expanded="false" aria-controls="collapseGeneral2">
                                    Where will my account manager be based?
                                </button>
                            </h2>
                            <div id="collapseGeneral2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                            <ol>
                                <li>Account managers are based in Canada.</li>
                                <li>Their work hours are aligned with the operating hours of the warehouse you are assigned.</li>
                            </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseGeneral3" aria-expanded="false" aria-controls="collapseGeneral3">
                                    What are your payment terms? Is it Net 30 days?
                                </button>
                            </h2>
                            <div id="collapseBilling3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                            <ul>
                                <li>We bill at the start of each month for the previous month’s services.</li>
                                <li>Invoices are due within 7 days.</li>
                            </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBilling4" aria-expanded="false" aria-controls="collapseBilling4">
                                    Are your storage fees pro-rated?
                                </button>
                            </h2>
                            <div id="collapseBilling4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Yes, our storage fees are pro-rated by the week.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBilling5" aria-expanded="false" aria-controls="collapseBilling5">
                                    Can I set up pre-authorized payments?
                                </button>
                            </h2>
                            <div id="collapseBilling5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Yes, absolutely.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require 'includes/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    
    <script src="js/main.js"></script>
  </body>
</html>