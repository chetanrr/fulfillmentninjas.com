<?php require 'index_files/information.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php productName()?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="bp_assets/css/style.css">
    <style>
        .prodData img {width: 90% !important; height: 300px !important; object-fit: contain;}
    </style>
</head>

<body>

    <div>
        <?php require 'includes/header.php'; ?>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-md-6 align-self-center">
                    <div>
                        <h1 class="display-1 bannertitle mb-4">Products</h1>
                        <div class='text-white'>
                        <i class="fa-solid fa-house"></i> <a href="index.php">Home</a> / <a class="text-white">Products</a>
                        </div>                        
                    </div>
                </div>
            </div> 
        </div>       
    </div>

    <div class="bg-custom pt-5">
        <div class="container" id="prodData">
            <div class="row prodData"></div>
        </div>
    </div>

    <?php require 'includes/footer.php'; ?>
    <script src="bp_assets/js/products.js?v=<?= time(); ?>"></script>
    <script>
        function discFun(discdata, id) {
            let disc = document.querySelector(`.ulWrap-${id}`);
            let ul = document.createElement("ul")
            let newLi = '';
            ul.classList.add('list-unstyled', 'mb-0');
            for (j = 0; j < discdata.length; j++) {
                let li = document.createElement("li")
                let descriptions = discdata[j];
                li.innerHTML += `${descriptions}`;
                ul.appendChild(li)
            }
            disc.appendChild(ul)
        };
        let badgeLabel = '';
        for (i = 0; i < products.data.length; i++) {
            let last = Object.keys(products.data[i].price).pop();
            badgeLabel = products.data[i].category;
            catOptmz = products.data[i].category.replaceAll(' ','').toLowerCase();
            document.querySelector('.row.prodData').innerHTML += `
            <div class="col-md-4 mb-5 ${products.data[i].offer} ${catOptmz}" id="${products.data[i].id}">
                <div class="prodWrap">
                    <div class="p-4">
                        <img class="img-fluid" style="border-radius:0; width:300px; height:300px;" src="bp_assets/images/${products.data[i].name.replace(/ |\//g, "-")}.png" alt="">
                        <div class="py-4 px-4">
                            <h5 class="mt-2 mb-3">${products.data[i].name}</h5>
                            <small class="flex-grow-1 mt-2 d-block">
                                <div class="ulWrap-${i}"></div>
                            </small>
                            <h4 class="product-price py-3 mb-0" fw-normal>$${Object.values(products.data[i].price)[0].toFixed(2)}</h4>
                            <a class="btn btn-primary btn-add-cart px-3" href="product.php?reqid=${products.data[i].id}"
                                title="Order Now"><i class="fa-solid fa-cart-shopping"></i> Order Now</a>
                        </div>
                    </div>
                </div>
            </div>`
            discFun(products.data[i].description, i);
            if (products.data[i].price[last] == 0) {
                $(`#${i + 1} h4`).html('$' + products.data[i].shippingPrice)
            }
        }
    </script>

    <script src="bp_assets/js/main.js"></script>

</body>

</html>