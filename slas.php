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
            <div class="banner py-0">
                <h1>Service-Level Agreement (SLAs)</h1>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="bg-dark text-white p-3">
                        <h3 class="m-0">Daily Order Processing/Cutoff Time</h3>
                    </div>
                    <div class="customtable">
                    <table class="sla-table mt-3">
                        <tbody>
                            <tr>
                                <td><b>Type</b></td>
                                <td><b>Ship Out Time </b></td>
                                <td><b>Notes</b></td>
                            </tr>
                            <tr>
                                <td><b>DTC Orders</b></td>
                                <td>Same Day</td>
                                <td>Orders received <em>before</em> 2PM will ship out the same business day.<br>
                                    Orders received <em>after</em> 2PM will ship the following business day.</td>
                            </tr>
                            <tr>
                                <td><b>DTC Orders (Manual)</b></td>
                                <td>2 Days</td>
                                <td>We will try our best to ship same day but manual orders can take up to 48 hours to ship.</td>
                            </tr>
                            <tr>
                                <td><b>DTC Orders (via CSV)</b></td>
                                <td>2 Days</td>
                                <td>If you are submitting orders via CSV file, we are not able to guarantee the turnaround time.</td>
                            </tr>
                        </tbody>
                    </table>

                    <strong class="d-block mt-3">Please Note</strong>
                    <ul>
                        <li>We guarantee an accuracy rate of 100% for all direct-to-consumer orders.</li>
                        <li>If you are shipping 200+ orders per day, you must let us know ahead of time or we will not be able to guarantee same-day shipping.</li>
                    </ul>



                    <div class="bg-dark text-white p-3 mt-5">
                        <h3 class="m-0">Receiving & Put-Away</h3>
                    </div>

                    <table class="sla-table float-left mt-3">
                        <tbody>
                            <tr>
                                <td><strong>Type</strong></td>
                                <td style="min-width: 200px;"><strong>Put-away time </strong></td>
                            </tr>
                            <tr>
                                <td>Less than 10 Pallets</td>
                                <td>Within 48 Hours</td>
                            </tr>
                            <tr>
                                <td>10+ Pallets</td>
                                <td>3 Days</td>
                            </tr>
                            <tr>
                                <td>50+ Pallets</td>
                                <td>5 Days</td>
                            </tr>
                            <tr>
                                <td>100+ Pallets</td>
                                <td>10 Days</td>
                            </tr>
                            <tr>
                                <td>Floor-loaded Containers</td>
                                <td>5 Days</td>
                            </tr>
                            <tr>
                                <td>10+ SKUs</td>
                                <td>Add 1 Days</td>
                            </tr>
                            <tr>
                                <td>30+ SKUs</td>
                                <td>Add 3 Days</td>
                            </tr>
                            <tr>
                                <td>50+ SKUs</td>
                                <td>Add 5 Days</td>
                            </tr>
                            <tr>
                                <td>100+ SKUs</td>
                                <td>Add 8 Days</td>
                            </tr>
                            <tr>
                                <td>200+ SKUs</td>
                                <td>Add 18 Days</td>
                            </tr>
                            <tr>
                                <td>Sending Inventory for 1st time</td>
                                <td>Add 1 Days</td>
                            </tr>
                            <tr>
                                <td>During Q4</td>
                                <td>Add 2 Days</td>
                            </tr>
                            <tr>
                                <td>Additional Quality Control</td>
                                <td>Add 2 Days</td>
                            </tr>
                            <tr>
                                <td>Multiple SKUs per Carton</td>
                                <td>Add 2 Days</td>
                            </tr>
                            <tr>
                                <td>Multiple SKUs per Pallet</td>
                                <td>Add 2 Days</td>
                            </tr>
                            <tr>
                                <td>Open Cartons &amp; Count Units inside</td>
                                <td>Add 7 Days</td>
                            </tr>
                        </tbody>
                    </table>

                    <strong class="d-block mt-3">Please Note</strong>
                    <ul>
                        <li>Times mentioned are in business days.</li>
                        <li>Receiving times above are estimates, not guarantees.</li>
                        <li>Depending on how busy the warehouse is, it may be faster or take longer.</li>
                        <li>We are unable to provide estimates for shipments without WRO labels.</li>
                        <li>If there is any discrepancy in the data provided to us, there will be additional delays.</li>
                        <li>If multiple variables apply to your shipment, the longer expectation applies.</li>
                    </ul>




                    <div class="bg-dark text-white p-3 mt-5">
                        <h3 class="m-0">Work Requests</h3>
                    </div>
                    <table class="sla-table mt-3">
                        <tbody>
                            <tr>
                                <td><b>Task</b></td>
                                <td><b>2-Day Turnaround</b></td>
                                <td><b>7-Day Turnaround</b></td>
                                <td><b>7+ Days Turnaround</b></td>
                            </tr>
                            <tr>
                                <td><strong>Bundling</strong></td>
                                <td>Less than 200 Units</td>
                                <td>200-500</td>
                                <td>500+</td>
                            </tr>
                            <tr>
                                <td><strong>Carton Forwarding to Amazon</strong></td>
                                <td>Less than 100 Cartons</td>
                                <td>100-200</td>
                                <td>200+</td>
                            </tr>
                            <tr>
                                <td><strong>Count Only</strong></td>
                                <td>Less than 300 Units</td>
                                <td>300-600</td>
                                <td>600+</td>
                            </tr>
                            <tr>
                                <td><strong>Count &amp; Inspect</strong></td>
                                <td>Less than 100 Units</td>
                                <td>100-200</td>
                                <td>200+</td>
                            </tr>
                            <tr>
                                <td><strong>Create Master Carton</strong></td>
                                <td>Less than 20 Cartons</td>
                                <td>20-40</td>
                                <td>40+</td>
                            </tr>
                            <tr>
                                <td><strong>Discard Items</strong></td>
                                <td>Less than 50 Cartons</td>
                                <td>50-100</td>
                                <td>100+</td>
                            </tr>
                            <tr>
                                <td><strong>FNSKU Labeling</strong></td>
                                <td>Less than 300 Units</td>
                                <td>300-600</td>
                                <td>600+</td>
                            </tr>
                            <tr>
                                <td><strong>Fragile Wrapping</strong></td>
                                <td>Less than 300 Units</td>
                                <td>300-600</td>
                                <td>600+</td>
                            </tr>
                            <tr>
                                <td><strong>Kitting</strong></td>
                                <td>Less than 300 Units</td>
                                <td>300-600</td>
                                <td>600+</td>
                            </tr>
                            <tr>
                                <td><strong>Palletization</strong></td>
                                <td>Less than 5 Pallets</td>
                                <td>5-10</td>
                                <td>10+</td>
                            </tr>
                            <tr>
                                <td><strong>Pallet Forwarding</strong></td>
                                <td>Less than 20 Pallets</td>
                                <td>20-40</td>
                                <td>40+</td>
                            </tr>
                            <tr>
                                <td><strong>Photo Requests</strong></td>
                                <td>Less than 20 Photos</td>
                                <td>20-40</td>
                                <td>40+</td>
                            </tr>
                            <tr>
                                <td><strong>Polybagging</strong></td>
                                <td>Less than 300 Units</td>
                                <td>300-600</td>
                                <td>600+</td>
                            </tr>
                        </tbody>
                    </table>



                    <div class="bg-dark text-white p-3 mt-5">
                        <h3 class="m-0">Storage Guidelines</h3>
                    </div>
                    <table class="sla-table mt-3">
                        <tbody>
                            <tr>
                                <td><b>Type</b></td>
                                <td><b>Size</b></td>
                            </tr>
                            <tr>
                                <td><strong>Small Bin</strong></td>
                                <td>10x12x8”</td>
                            </tr>
                            <tr>
                                <td><strong>Large Bin</strong></td>
                                <td>12x24x12”</td>
                            </tr>
                            <tr>
                                <td><strong>Shelf</strong></td>
                                <td>60x24x18”</td>
                            </tr>
                            <tr>
                                <td><strong>Pallet</strong></td>
                                <td>40x48x55”</td>
                            </tr>
                        </tbody>
                    </table>


                    <strong class="d-block mt-3">Location Assignment</strong>
                    <ul>
                        <li>Depending on the size of your products, and the number of units you send in, we will automatically assign a storage location for each SKU.</li>
                        <li>Each SKU will require it's own storage location for accurate picking.</li>
                    </ul>
                    
                    <strong class="d-block mt-3">Oversize Pallets</strong>
                    <ul>
                        <li>Pallets over 55 inches in height will count as 2 pallet spots.</li>
                    </ul>

                    <strong class="d-block mt-3">Billing for Storage</strong>
                    <ul>
                        <li>Storage charges begin from the date your items arrive at our warehouse.</li>
                        <li>Storage is pro-rated weekly, when inventory is removed from warehouse.</li>                        
                    </ul>

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