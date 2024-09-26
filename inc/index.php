<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CDN  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- STYLES -->
     <link rel="stylesheet" href="../styles/style.css"/>

     <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- GOOGLE FONT POPPINS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- GOOGLE FONT LATO -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    
  
    <section class="home" id="home">
        <div class="container">
            <div class="home-details">
            <h5>NEW ARRIVALS</h5>
            <h1><span>Best Prices </span>This Season</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing  Lorem Lorem, ipsum.</p>
            <button>Shop Now</button>
            </div>
        </div>
    </section>


    <!-- Brands -->
     <section id="brands" class="brands">
         <h1 class="row-title">Popular Products</h1>
         <div class="brand-row">
            <div class="brand-container">
                <img class="img-fluid col-lg-3 col-md-6 col-sm-12" loading="lazy" src="../images/product1.webp"/>
                <div class="details-row-1">
                    <strong><p>TITLE</p></strong>
                    <div class="ratings">
                        <i class="fas fa-star fa-sm"></i>
                        <i class="fas fa-star fa-sm"></i>
                        <i class="fas fa-star fa-sm"></i>
                        <i class="fas fa-star fa-sm"></i>
                        <i class="fas fa-star fa-sm"></i>
                    </div>
                    <p>$499.2</p>
                    <button>BUY NOW</button>     
                </div>
            </div>

            <div class="brand-container">
                <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="../images/product2.webp"/>
                <div class="details-row-1">
                    <strong><p>TITLE</p></strong>
                    <div class="ratings">
                        <i class="fas fa-star fa-sm"></i>
                        <i class="fas fa-star fa-sm"></i>
                        <i class="fas fa-star fa-sm"></i>
                        <i class="fas fa-star fa-sm"></i>
                        <i class="fas fa-star fa-sm"></i>
                    </div>
                    <p>$499.2</p>
                    <button>BUY NOW</button>     
                </div>
            </div>

            <div class="brand-container">
                <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="../images/product3.webp"/>
                <div class="details-row-1">
                    <strong><p>TITLE</p></strong>
                    <div class="ratings">
                        <i class="fas fa-star fa-sm"></i>
                        <i class="fas fa-star fa-sm"></i>
                        <i class="fas fa-star fa-sm"></i>
                        <i class="fas fa-star fa-sm"></i>
                        <i class="fas fa-star fa-sm"></i>
                    </div>
                    <p>$499.2</p>
                    <button>BUY NOW</button>     
                </div>
            </div>

            <div class="brand-container">
                <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="../images/product4.webp"/>
                <div class="details-row-1">
                    <strong><p>TITLE</p></strong>
                    <div class="ratings">
                        <i class="fas fa-star fa-sm"></i>
                        <i class="fas fa-star fa-sm"></i>
                        <i class="fas fa-star fa-sm"></i>
                        <i class="fas fa-star fa-sm"></i>
                        <i class="fas fa-star fa-sm"></i>
                    </div>
                    <p>$499.2</p>
                    <button>BUY NOW</button>     
                </div>
            </div>
        </div>


     <section class="w-100" id="new-products">
    <h1>Fashion Picks</h1>
    <div class="row p-0 m-0 justify-content-center"> <!-- Added justify-content-center to center-align the items -->
        <div class="new-items col-lg-4 col-md-6 col-sm-12 p-2"> <!-- Adjusted to col-md-6 for better grid control -->
            <img class="img-fluid" src="../images/product1.webp">
            <div class="details-row-2">
                <h2 class="product-name">Cascade</h2>
                <button class="shop-now">SHOP NOW</button>
            </div>
        </div>

        <div class="new-items col-lg-4 col-md-6 col-sm-12 p-2">
            <img class="img-fluid" src="../images/product2.webp">
            <div class="details-row-2">
                <h2 class="product-name">Mono Bouquet</h2>
                <button class="shop-now">SHOP NOW</button>
            </div>
        </div>

        <div class="new-items col-lg-4 col-md-6 col-sm-12 p-2">
            <img class="img-fluid" src="../images/product3.webp">
            <div class="details-row-2">
                <h2 class="product-name">Posy</h2>
                <button class="shop-now">SHOP NOW</button>
            </div>
        </div>

        <div class="new-items col-lg-4 col-md-6 col-sm-12 p-2">
            <img class="img-fluid" src="../images/product4.webp">
            <div class="details-row-2">
                <h2 class="product-name">Another Item</h2>
                <button class="shop-now">SHOP NOW</button>
            </div>
        </div>
    </div>
</section>

  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
