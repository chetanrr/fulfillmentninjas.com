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
                        <li class="list-group-item"><a href="#about">About SHIPHYPE</a></li>
                        <li class="list-group-item"><a href="#affiliate">Affiliate Program</a></li>
                        <li class="list-group-item"><a href="#billing">Billing</a></li>
                        <li class="list-group-item"><a href="#">Carriers</a></li>
                        <li class="list-group-item"><a href="#">General</a></li>
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
                    <h3 id="about"><i class="fa-solid fa-circle-info text-secondary"></i> About SHIPHYPE</h3>
                    <div class="accordion mb-5" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Can FULFILLMENT NINJAS create pallets to be shipped to customers?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Absolutely. You can submit palletization/pallet building requests directly through the
                                    dashboard.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Can orders be shipped in individual boxes?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, we can ship individual boxes/cartons.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Do you have your own trucks for LTL transportation?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Unfortunately, we do not arrange the LTL shipping. However, you can arrange for your own
                                    trucking companies to pick-up from our warehouse. We can also provide a list of
                                    recommended trucking companies
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Do you have EDI capabilities?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes. We can connect to almost any retailer via SPSCommerce. We can also connect to ERP
                                    systems.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    How quickly can orders be prepared?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Most B2B orders are completed within 24 hours. However, this will vary based on the size
                                    of order.
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
                                    Can FULFILLMENT NINJAS create pallets to be shipped to customers?
                                </button>
                            </h2>
                            <div id="collapseAffiliate1" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Absolutely. You can submit palletization/pallet building requests directly through the
                                    dashboard.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseAffiliate2" aria-expanded="false" aria-controls="collapseAffiliate2">
                                    Can orders be shipped in individual boxes?
                                </button>
                            </h2>
                            <div id="collapseAffiliate2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, we can ship individual boxes/cartons.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseAffiliate3" aria-expanded="false" aria-controls="collapseAffiliate3">
                                    Do you have your own trucks for LTL transportation?
                                </button>
                            </h2>
                            <div id="collapseAffiliate3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Unfortunately, we do not arrange the LTL shipping. However, you can arrange for your own
                                    trucking companies to pick-up from our warehouse. We can also provide a list of
                                    recommended trucking companies
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseAffiliate4" aria-expanded="false" aria-controls="collapseAffiliate4">
                                    Do you have EDI capabilities?
                                </button>
                            </h2>
                            <div id="collapseAffiliate4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes. We can connect to almost any retailer via SPSCommerce. We can also connect to ERP
                                    systems.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseAffiliate5" aria-expanded="false" aria-controls="collapseAffiliate5">
                                    How quickly can orders be prepared?
                                </button>
                            </h2>
                            <div id="collapseAffiliate5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Most B2B orders are completed within 24 hours. However, this will vary based on the size
                                    of order.
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
                                    Can FULFILLMENT NINJAS create pallets to be shipped to customers?
                                </button>
                            </h2>
                            <div id="collapseBilling1" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Absolutely. You can submit palletization/pallet building requests directly through the
                                    dashboard.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBilling2" aria-expanded="false" aria-controls="collapseBilling2">
                                    Can orders be shipped in individual boxes?
                                </button>
                            </h2>
                            <div id="collapseBilling2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, we can ship individual boxes/cartons.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBilling3" aria-expanded="false" aria-controls="collapseBilling3">
                                    Do you have your own trucks for LTL transportation?
                                </button>
                            </h2>
                            <div id="collapseBilling3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Unfortunately, we do not arrange the LTL shipping. However, you can arrange for your own
                                    trucking companies to pick-up from our warehouse. We can also provide a list of
                                    recommended trucking companies 
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBilling4" aria-expanded="false" aria-controls="collapseBilling4">
                                    Do you have EDI capabilities?
                                </button>
                            </h2>
                            <div id="collapseBilling4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes. We can connect to almost any retailer via SPSCommerce. We can also connect to ERP
                                    systems.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBilling5" aria-expanded="false" aria-controls="collapseBilling5">
                                    How quickly can orders be prepared?
                                </button>
                            </h2>
                            <div id="collapseBilling5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Most B2B orders are completed within 24 hours. However, this will vary based on the size
                                    of order.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tab jump section ends -->
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