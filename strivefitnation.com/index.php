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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="bp_assets/css/style.css">
</head>

<body>    
    <div class="pb-5">
        <?php require 'includes/header.php'; ?>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="hero py-5" style="border-radius:32px;">
                        <div class="text-white">
                            <h2 class="display-6 mb-4" style="font-weight:500;">Create Ripples in Your Journey to Wellness</h2>
                            <p class="lead my-4">Ready to transform your fitness journey? Join Mentor Fit Hub® today and gain exclusive access to our all-in-one fitness planner designed to help you achieve your goals faster and more effectively!</p>
                            <a href="aboutus.php" class="btn btn-primary btn-lg">About us</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <img src="bp_assets/images/hard-bike-workout.png" alt="">
                </div>
            </div>            
        </div>       
    </div>

    <section>
        <div class="container">
            <div class="row justify-content-center text-center mb-4">
                <div class="col-8">
                    <h2 class="display-6">Empower Your Path to Optimal Health</h2>
                    <p>Unlock your full fitness potential with MentorFitHub, where personalized workouts and nutrition plans are just a tap away. Experience the convenience of expert guidance anytime, anywhere, so you can stay on track and reach your goals faster. With MentorFitHub, fitness is not just a journey, it's a lifestyle—always at your fingertips.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <aside class="bg-light p-4" style="border-radius:32px;">
                        <div class="row">
                            <div class="col-12 allprodshome">
                                <div class="row prodData"></div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container">
            <div class="row justify-content-center text-center mb-4">
                <div class="col-8">
                    <h2 class="display-5">Sign Up Now and Start your Fitness Journey, Anywhere, Everywhere!</h2>
                    <p>Complete wellness encompasses physical, mental, and emotional well-being, and our aim is to equip you with the tools and support necessary to flourish in all facets of your life.</p>                    
                </div>
                <div class="col-12 mt-5">
                    <a href="product.php?reqid=1" class="btn btn-primary btn-lg">SUBSCRIBE NOW!</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="text-center py-4">
                <h2>Why Choose MentorFitHub.com?</h2>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Accordion Item #1
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Accordion Item #2
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Accordion Item #3
                    </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Accordion Item #4
                    </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Accordion Item #5
                    </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Accordion Item #6
                    </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    for (i = 0; i < products.data.length; i++) {
        if (products.data[i].offer == 'main') {
            document.querySelector('.row.prodData').innerHTML += `
            <div class="col-12 col-md-3 my-4">
                <aside>
                    <a href="#">                        
                        <h5 class="py-3">${products.data[i].name}</h5>
                        <h5 class="mb-3 fw-bold">$${Object.values(products.data[i].price)[0]}</h5>
                        <div class="ulWrap-${i}"></div>
                    </a>
                </aside>
            </div>`
            discFun(products.data[i].description, i);
        }
    }
    
    </script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="bp_assets/js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          $('.slider').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
          });
        });
    </script>
</body>

</html>