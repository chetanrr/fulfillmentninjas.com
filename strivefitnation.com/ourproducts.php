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
                        <h1 class="display-1 bannertitle mb-4">Our Products</h1>
                        <div class='text-white'>
                        <i class="fa-solid fa-house"></i> <a href="index.php">Home</a> / <a class="text-white">Our Products</a>
                        </div>
                    </div>
                </div>
            </div> 
        </div>       
    </div>

    <div class="bg-custom pt-5">
        <div class="container" id="prodData">
            <div class="row">
                <div class="col-md-12 mb-5 text-center">                    
                    <h1>Our Products</h1>
                </div>
            </div>
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
                li.innerHTML += `${discdata[j]}`;
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
            <div class="col-md-6 mb-5 ${products.data[i].offer} ${catOptmz}" id="${products.data[i].id}">
                    <div class="prodWrap">
                        <div class="row align-items-center">
                            <div class="col-4 text-center px-0">
                                <img class="img-fluid" src="bp_assets/images/${products.data[i].name.replace(/ |\//g, "-")}.jpg">
                            </div>
                            <div class="col-8 py-4 px-4">
                                <aside>
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </aside>
                                <h5 class="mt-2">${products.data[i].name}</h5>
                                <span class="badge bg-secondary">Category: ${badgeLabel}</span>
                                <small class="flex-grow-1 mt-2 d-block">
                                    <div class="ulWrap-${i}"></div>
                                </small>
                                <p class="product-price mb-0" style="font-size:20px;">$${Object.values(products.data[i].price)[0]}</p>
                                <div class="text-success my-2">Availability: In stock</div>
                                <a class="btn btn-secondary btn-add-cart px-3" href="product.php?reqid=${products.data[i].id}" title="Order Now"><i class="fa-solid fa-cart-shopping"></i> Order Now</a>
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