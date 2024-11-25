<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fulfillment Ninjas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" type="text/css" href="slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />

  <link rel="stylesheet" href="css/style.css">
  <style>
    table, td {border-collapse: collapse; border:1px solid #4e4e4e !important;}
    td {padding:16px;}
  </style>
</head>

<body>

  <?php require 'includes/header.php'; ?>

  <section class="pricing-banner text-center">
    <div class="container py-5 my-5">
      <h1 class="display-4 fw-bold">Pricing built for businesses of all sizes.</h1>
      <h1 class="display-4 fw-bold text-white">Always know what you’ll pay.</h4>      
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <aside class="bg-white">
                    <article class="py-4 px-5">
                        <div class="price-header">Standard Pricing</div>
                        <p class="fw-bold">Get world-class fulfillment with simple, transparent pricing.</p>
                        <p class="text-muted">starting from</p>
                        <div class="d-inline-flex align-items-center"><h2>$499</h2><h3>/month</h3></div>
                        <div class="text-primary fw-bold lead mb-3">+$2 per order</div>
                        <ul class="list-unstyled">
                            <li class="my-2">No minimum order requirements</li>                        
                            <li class="my-2">Fulfill orders across all channels</li>
                            <li class="my-2">Dedicated account reps</li>
                        </ul>
                    </article>
                    <a href="pricing.php" class="btn btn-primary price-footer">View Pricing</a>
                </aside>
            </div>
            <div class="col-12 col-lg-6">
                <aside class="bg-secondary text-light">
                    <article class="py-4 px-5">
                        <div class="price-header">High-Volume Shippers</div>
                        <p class="fw-bold">For businesses shipping 5,000+ orders per month.</p>
                        <p class="text-white">Get custom fulfillment pricing for your business.</p>
                        <div class="d-inline-block">
                            <table>
                                <tr>
                                    <td>Free Receiving</td>
                                    <td>Discounted Storage</td>
                                </tr>
                                <tr>
                                    <td>No Setup Fees</td>
                                    <td>No Software Fees</td>
                                </tr>
                            </table>
                        </div>                        
                    </article>
                    <a href="pricing.php" class="btn price-footer">Contact Sales</a>
                </aside>
            </div>
        </div>
    </div>
  </section>

  <section>
    <div class="container">
        <div class="text-center mb-4">
            <ul class="nav nav-pills mb-3 d-inline-flex" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Less than 1,000 Orders/Month</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">More than 1,000 Orders/Month</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">More than 10,000 Orders/Month</button>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                <div class="row mb-5 pb-5">
                    <div class="col-12 col-lg-6">
                        <h1 class="fw-bold"><span class="text-primary">Step 1:</span> Receiving</h1>
                        <p class="lead-sm">Once your shipment arrives at our warehouse, we unload and put-away your inventory.</p>
                        <a href="#" class="btn btn-primary">View FAQs</a>
                    </div>
                    <div class="col-12 col-lg-6">
                        <table class="table step-2 fulfillment-table text-center table-spaced">
                            <tbody>
                                <tr class="header">
                                    <td></td>
                                    <td class="active text-center">Cost</td>
                                </tr>
                                <tr>
                                    <td>First 2 Hours<br></td>
                                    <td class="active"><span class="price multi-price">FREE</span></td>
                                </tr>
                                <tr>
                                    <td>Additional Hours</td>
                                    <td class="active"><span class=" multi-price text_bold" data-usd="40">$40</span> per man-hour</td>
                                </tr>
                                <tr>
                                    <td>Returns Handling</td>
                                    <td class="bg-dark no-border no-border-top"><a href="#" class="return-pricing text-white text-decoration-none">CLICK HERE</a></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="my-3">
                            <span class="text-primary">Container Unloading?</span> Contact Us for Custom Pricing.
                        </div>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select</option>
                            <option value="1">USD, $</option>
                            <option value="2">CAD, $</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-5 pb-5">
                    <div class="col-12 col-lg-6">
                        <h1 class="fw-bold"><span class="text-primary">Step 2:</span> Storage</h1>
                        <p class="lead-sm">Each SKU requires it's own bin, shelf or pallet. Based on the size of your products and the number of units you send, we'll assign the best fit.</p>
                        <a href="#" class="btn btn-primary">View FAQs</a>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p class="fw-bold">Which warehouse location are you using?</p>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Toronto, Canada</option>
                            <option value="1">Vancouver, Canada</option>
                            <option value="2">Los Angeles, United States</option>
                            <option value="3">Miami, United States</option>
                        </select>
                        <ul class="pallet-size">
                            <li>
                                <img src="images/Small-Bin.png" alt="">
                                <div>
                                    <p class="lead mb-0">$3/mo</p>
                                    <div>10 x 12 x 8"</div>
                                    <strong>Small Bin</strong>
                                </div>
                            </li>
                            <li>
                                <img src="images/Large-Bin.png" alt="">
                                <div>
                                    <p class="lead mb-0">$5/mo</p>
                                    <div>12 x 24 x 12"</div>
                                    <strong>Large Bin</strong>
                                </div>
                            </li>
                            <li>
                                <img src="images/Shelf.png" alt="">
                                <div>
                                    <p class="lead mb-0">$20/mo</p>
                                    <div>60 x 24 x 18"</div>
                                    <strong>Shelf</strong>
                                </div>
                            </li>
                            <li>
                                <img src="images/pallet.png" alt="">
                                <div>
                                    <p class="lead mb-0">$40/mo</p>
                                    <div>40 x 48 x 55"</div>
                                    <strong>Pallet</strong>
                                </div>
                            </li>
                        </ul>
                        <div class="my-3">
                            <span class="text-primary">Shipping 1,000+ DTC Orders per month?</span> Contact Us for Custom Pricing.
                        </div>
                    </div>
                </div>
                <div class="row mb-5 pb-5">
                    <div class="col-12 col-lg-6">
                        <h1 class="fw-bold"><span class="text-primary">Step 3:</span> Pick & Pack</h1>
                        <p class="lead-sm">Our picking & packing fee depends on the packaging materials used for shipping your orders.</p>
                        <a href="#" class="btn btn-primary">View FAQs</a>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p class="fw-bold">What packaging will be used to ship your order?</p>
                        <select class="form-select my-4" aria-label="Default select example">
                            <option selected>Bubble Mailer</option>
                            <option value="1">Corrugated Box</option>    
                            <option value="2">Poly Mailer</option>        
                            <option value="3">Pre-Packaged (Best Rates)</option>
                            <option value="4">Custom Packaging</option>                    
                        </select>

                        <table class="table step-2 fulfillment-table text-center table-spaced">
                            <tbody>
                                <tr class="header">
                                    <td></td>
                                    <td class="active text-center">Cost</td>
                                </tr>
                                <tr>
                                    <td>Pick & Pack (includes first item)<br></td>
                                    <td class="active"><span class="price multi-price">$ 2.50</span></td>
                                </tr>
                                <tr>
                                    <td>Extra Picks</td>
                                    <td class="active"><span class=" multi-price text_bold" data-usd="40">$0.50</span> per item</td>
                                </tr>
                                <tr>
                                    <td>Shipping Rates</td>
                                    <td class="bg-dark no-border no-border-top"><a href="#" class="return-pricing text-white text-decoration-none">CLICK HERE</a></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="my-3">
                            <span class="text-primary">Shipping 1,000+ DTC Orders per month?</span> Contact Us for Custom Pricing.
                        </div>
                        <i class="fa-solid fa-box text-primary"></i> Boxes, mailers, packaging tape & dunnage cost are <br><strong>included in the pick & pack fee.</strong>
                    </div>
                </div>
                <div class="row mb-5 pb-5">
                    <div class="col-12 col-lg-6">
                        <h1 class="fw-bold"><span class="text-primary">Step 4:</span> Shipping Rates</h1>
                        <p class="lead-sm">Besides the picking cost, this is the postage rate we will charge to ship your orders.</p>
                        <a href="#" class="btn btn-primary">View FAQs</a>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="country-flags">
                            <li>
                                <img src="images/canada_flag.png" alt="">
                                <div>
                                    <h4 class="mb-0">Shipping from CANADA</h4>
                                    <div class="my-2">Shipping Prices in Canadian Dollars</div>
                                    <a href="#" class="btn btn-primary">View Rates</a>
                                </div>
                            </li>
                            <li>
                                <img src="images/usa_flag.png" alt="">
                                <div>
                                    <h4 class="mb-0">Shipping from USA</h4>
                                    <div class="my-2">Shipping Prices in US Dollars</div>
                                    <a href="#" class="btn btn-primary">View Rates</a>
                                </div>
                            </li>                          
                        </ul>
                    </div>
                </div>
                <div class="row mb-5 pb-5 align-items-center">
                    <div class="col-12 col-lg-6">
                        <h1 class="fw-bold"><span class="text-primary">Step 5:</span> Account Management Fee</h1>
                        <p class="lead-sm">This fee is associated with providing dedicated support to each account on our platform.</p>
                        <div class="acc-profile d-flex gap-3 mb-4">
                            <img src="images/acc-01.png" title="Ahmed" alt="">
                            <img src="images/acc-01.png" title="Bento" alt="">
                            <img src="images/acc-01.png" title="Tanisha" alt="">
                            <img src="images/acc-01.png" title="Chetan" alt="">
                        </div>
                        <a href="#" class="btn btn-primary">View FAQs</a>
                    </div>
                    <div class="col-12 col-lg-6 text-center">
                        <div class="d-flex align-items-center justify-content-center">
                            <h1 class="display-4 fw-bold text-secondary">$499</h1><h3 class="display-6 fw-bold">/month</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                <table class="service-summary-table w-100">
                    <tbody>
                        <tr class="header bg-primary">
                            <td colspan="4" rowspan="1">
                                <div class="h2 text-white mb-0">Pricing Structure</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="tt66"><strong>Pick &amp; Pack</strong></td>
                            <td colspan="3" style="background: transparent;">Varies based on packaging and number of picks, starting at
                                <b><span class="price multi-price" data-usd="1">$1</span> per order</b></td>
                        </tr>
                        <tr>
                            <td class="tt66"><strong>Shipping</strong></td>
                            <td colspan="3" style="background: transparent;">Varies based on weight, dimensions and delivery zone, from
                                <b><span class="price multi-price" data-usd="4.01">$4.01</span></b></td>
                        </tr>
                        <tr>
                            <td class="tt66"><strong>Storage</strong></td>
                            <td colspan="3" style="background: transparent;"><b><span class="price multi-price"
                                        data-usd="1">$1</span>/Small Bin, <span class="price multi-price" data-usd="2">$2</span>/Large
                                    Bin, <span class="price multi-price" data-usd="10">$10</span>/Shelf, <span class="price multi-price"
                                        data-usd="20">$20</span>/Pallet</b></td>
                        </tr>
                        <tr>
                            <td class="tt66" width="25%"><strong>Receiving</strong></td>
                            <td width="75%" colspan="3" style="background: transparent;"><b>FREE</b></td>
                        </tr>
                        <tr>
                            <td class="tt66"><strong>Account Management</strong></td>
                            <td colspan="3" style="background: transparent;"><b>FREE</b></td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-center">
                    <p class="my-3">Pricing will vary based on additional factors - including number of SKUs, and storage space required.</p>
                    <a href="#" class="btn btn-secondary">Contact Sales</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                <table class="service-summary-table w-100">
                    <tbody>
                        <tr class="header bg-primary">
                            <td colspan="4" rowspan="1">
                                <div class="h2 text-white mb-0">Pricing Structure</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="tt66"><strong>Pick &amp; Pack</strong></td>
                            <td colspan="3" style="background: transparent;">Varies based on packaging and number of picks, starting at
                                <b><span class="price multi-price" data-usd="1">$1</span> per order</b></td>
                        </tr>
                        <tr>
                            <td class="tt66"><strong>Shipping</strong></td>
                            <td colspan="3" style="background: transparent;">Varies based on weight, dimensions and delivery zone, from
                                <b><span class="price multi-price" data-usd="4.01">$4.01</span></b></td>
                        </tr>
                        <tr>
                            <td class="tt66"><strong>Storage</strong></td>
                            <td width="75%" colspan="3" style="background: transparent;"><b>FREE</b></td>
                        </tr>
                        <tr>
                            <td class="tt66" width="25%"><strong>Receiving</strong></td>
                            <td width="75%" colspan="3" style="background: transparent;"><b>FREE</b></td>
                        </tr>
                        <tr>
                            <td class="tt66"><strong>Account Management</strong></td>
                            <td colspan="3" style="background: transparent;"><b>FREE</b></td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-center">
                    <p class="my-3">Pricing will vary based on additional factors - including number of SKUs, and storage space required.</p>
                    <a href="#" class="btn btn-secondary">Contact Sales</a>
                </div>
            </div>
        </div>
    </div>
  </section>

  <section class="pt-0">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>Frequently Asked Questions</h2>
          <p>See answers to some of the most common questions we get asked.</p>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  Where are your Warehouses Located?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                We have locations across the United States and Canada.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Are your prices in US Dollars or Canadian Dollars?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                By default, our prices are in US dollars. You can change the currency by clicking on the flag in Step 2.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  How long does it take to get setup?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                If you sign-up with us today, you can start sending your inventory as early as tomorrow.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Will I have a dedicated account manger?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Yes, we will assign a dedicated Account Manager who will be your primary point of contact for everything you need. They will help you with onboarding as well as provide ongoing support.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  I have a special project, can you quote me for it?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Yes, simply click the Contact Sales button below and fill out the form. Our sales team will provide you with a custom price plan.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  What do I have to pay upon signing up?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Upon signing up, you will pay a deposit of $500 USD. This will count towards your monthly invoices. Unused balance is 100% refundable.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  I want to signup, what's next?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Click the blue "Contact Sales" button on the top right of the page.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php require 'includes/footer.php'; ?>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>

  <script src="js/main.js"></script>
</body>

</html>