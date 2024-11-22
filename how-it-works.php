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
</head>

<body>

  <?php require 'includes/header.php'; ?>

  <section class="vid-banner text-center">
    <video src="images/HowItWorks.mp4" autoplay muted></video>
    <div class="container py-5 my-5">
      <h1 class="display-4 fw-bold">How it Works</h1>
      <h4>Ready to simplify fulfillment?</h4>
      <h4>Join Fulfillment Ninjas Today!</h4>
      <ul class="nav nav-pills mb-3 justify-content-center mt-4" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
            type="button" role="tab" aria-controls="pills-home" aria-selected="true">DTC</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
            type="button" role="tab" aria-controls="pills-profile" aria-selected="false">B2B</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
            type="button" role="tab" aria-controls="pills-contact" aria-selected="false">FBA</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled"
            type="button" role="tab" aria-controls="pills-disabled" aria-selected="false">Returns</button>
        </li>
      </ul>
    </div>
  </section>

  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
      tabindex="0">
      <section>
        <div class="container listed-box">
          <div class="row">
            <div class="col-12 col-lg-6 numbered">
              <aside class="pe-0 pe-lg-5">
                <h1 class="fw-bold">Send Inventory to our Warehouse</h1>
                <h4 class="text-secondary">You submit the inventory you will be sending to us through our dashboard. This way, our team is expecting your inventory.
                </h4>
              </aside>
            </div>
            <div class="col-12 col-lg-6 text-center">
              <img src="images/warehouse.png" alt="">
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-6 numbered">
              <aside class="pe-0 pe-lg-5">
                <h1 class="fw-bold">Your Inventory Arrives at our Warehouse</h1>
                <h4 class="text-secondary">Your inventory arrives at our warehouse in Cartons, Pallets or floor-loaded Containers.</p>
              </aside>
            </div>
            <div class="col-12 col-lg-6 text-center">
              <img src="images/warehouse1.png" alt="">
            </div>
          </div>
          <div class="row mb-0">
            <div class="col-12 col-lg-6 numbered">
              <aside class="pe-0 pe-lg-5">
                <h1 class="fw-bold">We Sort and Put-Away Inventory</h1>
                <h4 class="text-secondary">At this point, our Inbound Manager will reach out to you with the final count.</p>
              </aside>
            </div>
            <div class="col-12 col-lg-6 text-center">
              <img src="images/order1.png" alt="">
            </div>
          </div>
          <div class="row mb-0">
                <div class="col-12 col-lg-6 numbered">
                  <aside class="pe-0 pe-lg-5">
                    <h1 class="fw-bold">Integration with Sales Channel</h1>
                    <h4 class="text-secondary">We Integrate Your Sales Channel with our WMS (warehouse management system).</p>
                  </aside>
                </div>
                <div class="col-12 col-lg-6 text-center">
                  <img src="images/order1.png" alt="">
                </div>
              </div>
              <div class="row mb-0">
                <div class="col-12 col-lg-6 numbered">
                  <aside class="pe-0 pe-lg-5">
                    <h1 class="fw-bold">Orders Start Flowing</h1>
                    <h4 class="text-secondary">As you get new orders, they start showing up in the fulfillment dashboard.</p>
                  </aside>
                </div>
                <div class="col-12 col-lg-6 text-center">
                  <img src="images/order1.png" alt="">
                </div>
              </div>
              <div class="row mb-0">
                <div class="col-12 col-lg-6 numbered">
                  <aside class="pe-0 pe-lg-5">
                    <h1 class="fw-bold">Orders are Picked & Packed</h1>
                    <h4 class="text-secondary">Our warehouse team goes to the storage location where your inventory is placed. We pack your orders in the packaging of your choice.</p>
                  </aside>
                </div>
                <div class="col-12 col-lg-6 text-center">
                  <img src="images/order1.png" alt="">
                </div>
              </div>
              <div class="row mb-0">
                <div class="col-12 col-lg-6 numbered">
                  <aside class="pe-0 pe-lg-5">
                    <h1 class="fw-bold">Carrier is Selected via Rate-Shopping</h1>
                    <h4 class="text-secondary">Our software compares rates in real-time to select the best rate for your packages.</p>
                  </aside>
                </div>
                <div class="col-12 col-lg-6 text-center">
                  <img src="images/order1.png" alt="">
                </div>
              </div>
              <div class="row mb-0">
                <div class="col-12 col-lg-6 numbered">
                  <aside class="pe-0 pe-lg-5">
                    <h1 class="fw-bold">Order is Marked as Fulfilled on FULFILLMENT NINJAS</h1>
                    <h4 class="text-secondary">As orders are shipped, the status changes to fulfilled on our dashboard.</p>
                  </aside>
                </div>
                <div class="col-12 col-lg-6 text-center">
                  <img src="images/order1.png" alt="">
                </div>
              </div>
              <div class="row mb-0">
                <div class="col-12 col-lg-6 numbered">
                  <aside class="pe-0 pe-lg-5">
                    <h1 class="fw-bold">Order is Marked as Fulfilled on Your Store</h1>
                    <h4 class="text-secondary">Once the order gets shipped, the status changes to fulfilled on both our side, and your side.</p>
                  </aside>
                </div>
                <div class="col-12 col-lg-6 text-center">
                  <img src="images/order1.png" alt="">
                </div>
              </div>
              <div class="row mb-0">
                <div class="col-12 col-lg-6 numbered">
                  <aside class="pe-0 pe-lg-5">
                    <h1 class="fw-bold">Your Customers Get Tracking Number
                    Emailed to Them</h1>
                    <h4 class="text-secondary">As soon as an order is shipped, the customer gets the tracking number emailed to them.</p>
                  </aside>
                </div>
                <div class="col-12 col-lg-6 text-center">
                  <img src="images/order1.png" alt="">
                </div>
              </div>
              <div class="row mb-0">
                <div class="col-12 col-lg-6 numbered">
                  <aside class="pe-0 pe-lg-5">
                    <h1 class="fw-bold">Packages are Picked
                    Up by Carriers</h1>
                    <h4 class="text-secondary">At the end of the day, carriers like UPS and FedEx pick up packages from our warehouse and make the final delivery to your customers.</p>
                  </aside>
                </div>
                <div class="col-12 col-lg-6 text-center">
                  <img src="images/order1.png" alt="">
                </div>
              </div>
        </div>
      </section>
    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
      <section>
        <div class="container listed-box">
          <div class="row">
            <div class="col-12 col-lg-6 numbered">
              <aside class="pe-0 pe-lg-5">
                <h1 class="fw-bold">Send Inventory to our Warehouse</h1>
                <h4 class="text-secondary">You submit the inventory you will be sending to us through our dashboard. This way, our team is expecting your inventory.
                </h4>
              </aside>
            </div>
            <div class="col-12 col-lg-6 text-center">
              <img src="images/warehouse.png" alt="">
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-6 numbered">
              <aside class="pe-0 pe-lg-5">
                <h1 class="fw-bold">Your Inventory Arrives at our Warehouse</h1>
                <h4 class="text-secondary">Your inventory arrives at our warehouse in Cartons, Pallets or floor-loaded Containers.</p>
              </aside>
            </div>
            <div class="col-12 col-lg-6 text-center">
              <img src="images/warehouse1.png" alt="">
            </div>
          </div>
          <div class="row mb-0">
            <div class="col-12 col-lg-6 numbered">
              <aside class="pe-0 pe-lg-5">
                <h1 class="fw-bold">We Sort and Put-Away Inventory</h1>
                <h4 class="text-secondary">At this point, our Inbound Manager will reach out to you with the final count.</p>
              </aside>
            </div>
            <div class="col-12 col-lg-6 text-center">
              <img src="images/order1.png" alt="">
            </div>
          </div>
          <div class="row mb-0">
                <div class="col-12 col-lg-6 numbered">
                  <aside class="pe-0 pe-lg-5">
                    <h1 class="fw-bold">You Provide Us with Purchase Orders from Clients</h1>
                    <h4 class="text-secondary">You submit your orders through the dashboard, or send them to us via EDI.</p>
                  </aside>
                </div>
                <div class="col-12 col-lg-6 text-center">
                  <img src="images/order1.png" alt="">
                </div>
              </div>
              <div class="row mb-0">
                <div class="col-12 col-lg-6 numbered">
                  <aside class="pe-0 pe-lg-5">
                    <h1 class="fw-bold">Order is Prepared</h1>
                    <h4 class="text-secondary">Our warehouse team starts working on packing and preparing your order.</p>
                  </aside>
                </div>
                <div class="col-12 col-lg-6 text-center">
                  <img src="images/order1.png" alt="">
                </div>
              </div>
              <div class="row mb-0">
                <div class="col-12 col-lg-6 numbered">
                  <aside class="pe-0 pe-lg-5">
                    <h1 class="fw-bold">Carrier Picks Up Order from our Warehouse</h1>
                    <h4 class="text-secondary">Once the carrier arrives, our warehouse team hands over your order to the carrier so it can be delivered.</p>
                  </aside>
                </div>
                <div class="col-12 col-lg-6 text-center">
                  <img src="images/order1.png" alt="">
                </div>
              </div>
              <div class="row mb-0">
                <div class="col-12 col-lg-6 numbered">
                  <aside class="pe-0 pe-lg-5">
                    <h1 class="fw-bold">Order Delivered</h1>
                    <h4 class="text-secondary">The order arrives at your Client/Retailer.</p>
                  </aside>
                </div>
                <div class="col-12 col-lg-6 text-center">
                  <img src="images/order1.png" alt="">
                </div>
              </div>
        </div>
      </section>
    </div>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
      <section>
        <div class="container listed-box">
          <div class="row">
            <div class="col-12 col-lg-6 numbered">
              <aside class="pe-0 pe-lg-5">
                <h1 class="fw-bold">Send Inventory to our Warehouse</h1>
                <h4 class="text-secondary">You submit the inventory you will be sending to us through our dashboard. This way, our team is expecting your inventory.
                </h4>
              </aside>
            </div>
            <div class="col-12 col-lg-6 text-center">
              <img src="images/warehouse.png" alt="">
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-6 numbered">
              <aside class="pe-0 pe-lg-5">
                <h1 class="fw-bold">Your Inventory Arrives at our Warehouse & You Are Notified</h1>
                <h4 class="text-secondary">Your inventory arrives at our warehouse in Cartons, Pallets or floor-loaded Containers.</p>
              </aside>
            </div>
            <div class="col-12 col-lg-6 text-center">
              <img src="images/warehouse1.png" alt="">
            </div>
          </div>
          <div class="row mb-0">
            <div class="col-12 col-lg-6 numbered">
              <aside class="pe-0 pe-lg-5">
                <h1 class="fw-bold">We Sort and Put-Away Inventory</h1>
                <h4 class="text-secondary">At this point, our Inbound Manager will reach out to you with the final count.</p>
              </aside>
            </div>
            <div class="col-12 col-lg-6 text-center">
              <img src="images/order1.png" alt="">
            </div>
          </div>
          <div class="row mb-0">
            <div class="col-12 col-lg-6 numbered">
              <aside class="pe-0 pe-lg-5">
                <h1 class="fw-bold">We Do Prep Work (if required)</h1>
                <h4 class="text-secondary">If you need us to do any prep work, such as FNSKU labelling, polybagging, or anything else, we can do it.</p>
              </aside>
            </div>
            <div class="col-12 col-lg-6 text-center">
              <img src="images/order1.png" alt="">
            </div>
          </div>
          <div class="row mb-0">
            <div class="col-12 col-lg-6 numbered">
              <aside class="pe-0 pe-lg-5">
                <h1 class="fw-bold">Submit Inventory Forwarding Request</h1>
                <h4 class="text-secondary">You can upload your carton or pallet labels directly to our dashboard, and we will get your order shipped out.</p>
              </aside>
            </div>
            <div class="col-12 col-lg-6 text-center">
              <img src="images/order1.png" alt="">
            </div>
          </div>
          <div class="row mb-0">
            <div class="col-12 col-lg-6 numbered">
              <aside class="pe-0 pe-lg-5">
                <h1 class="fw-bold">We Prepare Your Inventory for Pickup by Carrier</h1>
                <h4 class="text-secondary">Once your items are ready to be picked up, we move them to the staging area near the dock, so they can be picked up by the carrier.</p>
              </aside>
            </div>
            <div class="col-12 col-lg-6 text-center">
              <img src="images/order1.png" alt="">
            </div>
          </div>
          <div class="row mb-0">
            <div class="col-12 col-lg-6 numbered">
              <aside class="pe-0 pe-lg-5">
                <h1 class="fw-bold">Inventory Picked Up by Carrier</h1>
                <h4 class="text-secondary">Your inventory is picked up by UPS or LTL carrier, to be delivered to Amazon.</p>
              </aside>
            </div>
            <div class="col-12 col-lg-6 text-center">
              <img src="images/order1.png" alt="">
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
      <section>
        <div class="container listed-box">
          <div class="row">
            <div class="col-12 col-lg-6 numbered">
              <aside class="pe-0 pe-lg-5">
                <h1 class="fw-bold">Customer ships package to our warehouse</h1>
                <h4 class="text-secondary">Your customer drops off the package to the carrier, to be shipped to FULFILLMENT NINJAS warehouse.
                </h4>
              </aside>
            </div>
            <div class="col-12 col-lg-6 text-center">
              <img src="images/warehouse.png" alt="">
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-6 numbered">
              <aside class="pe-0 pe-lg-5">
                <h1 class="fw-bold">Package arrives at FULFILLMENT NINJAS</h1>
                <h4 class="text-secondary">Once the package arrives at our warehouse, our Inbound Manager will notify you.</p>
              </aside>
            </div>
            <div class="col-12 col-lg-6 text-center">
              <img src="images/warehouse1.png" alt="">
            </div>
          </div>
          <div class="row mb-0">
            <div class="col-12 col-lg-6 numbered">
              <aside class="pe-0 pe-lg-5">
                <h1 class="fw-bold">We will provide you Photo of Shipping Label + Contents Inside</h1>
                <h4 class="text-secondary">This way, you know who the package is coming from, and what is inside so you can make a decision on what to do next.</p>
              </aside>
            </div>
            <div class="col-12 col-lg-6 text-center">
              <img src="images/order1.png" alt="">
            </div>
          </div>
          <div class="row mb-0">
            <div class="col-12 col-lg-6 numbered">
              <aside class="pe-0 pe-lg-5">
                <h1 class="fw-bold">Decision for Returns Processing</h1>
                <h4 class="text-secondary">You let us know how you want us to process each return package.</p>
              </aside>
            </div>
            <div class="col-12 col-lg-6 text-center">
              <img src="images/order1.png" alt="">
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

  <section>
    <div class="container service-badges text-center">
      <span class="badge"><i class="fa-solid fa-circle-check text-primary"></i> eCommerce & Retail</span>
      <span class="badge"><i class="fa-solid fa-circle-check text-secondary"></i> Health & Beauty</span>
      <span class="badge"><i class="fa-solid fa-circle-check text-primary"></i> Apparel & Accessories</span>
      <span class="badge"><i class="fa-solid fa-circle-check text-secondary"></i> Subscription Boxes</span>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-lg-6 pe-5">
          <h2 class="fw-bold">Your Partner in Fast, Reliable Shipping</h2>
          <p class="lead mt-4">Efficient, accurate order fulfillment tailored to your business needs.</p>
        </div>
        <div class="col-12 col-lg-6">
          <img class="w-100 rounded" src="images/warehouse.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="bg-secondary text-white">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-lg-7">
          <img class="w-100" src="images/Real-Time-Fulfillment-Software.png" alt="">
        </div>
        <div class="col-12 col-lg-5">
          <h2>Real-Time <br> Fulfillment Software</h2>
          <p class="lead">Easily manage your orders and inventory in real-time with our SHIPHERO-powered fulfillment
            software.</p>
        </div>
      </div>
    </div>
  </section>

  <section>
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
                  Do you integrate with Shopify and Amazon?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Yes, we integrate with both.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Do you offer Amazon FBA Prep Services?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Yes.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Where are your Fulfillment Centers Located?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  We have locations in Canada and the United States. To see the exact addresses, click the 'Locations'
                  button in the header.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <aside class="p-4 bg-secondary value-added text-white p-5 text-center">
            <h4>Ready to streamline your fulfillment process?</h4>
            <h6>Connect with Fulfillment Ninjas today</h6>
            <div>
              email: <a href="mailto:info@fulfillmentninjas.com">info@fulfillmentninjas.com</a>
            </div>            
          </aside>
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