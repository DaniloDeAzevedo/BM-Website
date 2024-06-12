<!DOCTYPE html>
<html>

<head>
    <!--Linking the HTML code to the CSS file for styles-->
    <link rel="stylesheet" type="text/css" href="main.css">

    <!--Informs web browers how characters on the webpage should be interpreted-->
    <meta charset="utf-8">

    <!--Automatically adjusts the websites size to the device's screen size-->
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    
    <title> Build it Matsulu </title>

    <!--Box icons link // Open source web icons website-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!--Remix icons link // Open source web icons website-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css">

    <!--Google fonts link // Font family catalogue created by google, used to access the custom font in CSS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

    <!--Link to Animate on Scroll CSS file that provides the AOS library, enabling animations when ele are scrolled into view-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<!------------------------------------------------------------------------->
<!-- HEADER -->
    
    <body>
        <!--Header-->
        <header>
            <!--Creates a hyperlink on the specified text that takes the user to the same page (href attribute = # (null link))-->
            <!--Assigns class name "logo" to <a> tag. Allows for styles to be applied specifically to this ele using .logo selector in CSS-->
            <a href="index.php" class="logo"><img src="Images\BM Logo.png"></a>
            
            <!--Navigation menu in the form of an unordered list-->
            <ul class="navMenu">
                <!--Navigation links within the menu that take the user to the same page (null links)-->
                <li><a href="product-list.html">Shop</a></li>
                <li><a href="#promotions">Promotions</a></li>
                <li><a href="#best-sellers">Best Sellers</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            
            <!--Symbols from Remix icons website-->
            <div class="navMenu-right">

                <!--Shopping cart symbol-->
                <a href="shopping-cart.html"><i class="ri-shopping-cart-line"></i></a>
                <!--User symbol-->
                <a href="#"><i class="ri-user-line"></i></a>
                
                <!--Three line menu symbol-->
                <!--Assigns 2 classes to the <div> ele-->
                <!--Assigns an ID (to uniquely identifies ele) to the <div> ele-->
                <div class="bx bx-menu" id="menu-icon"></div>
                
            </div>
        </header>

<!------------------------------------------------------------------------->        
<!-- LANDING HOMPAGE -->

        <!--Home-->
        <!--Section tag helps structure the content of a web page by grouping related content-->
        <section class="home">      <!--Custom data attribute for Animate on Scroll-->
            <div class="home-text" data-aos="fade-up">
                <!-- <h6>New Arrivals</h6> DELETE-->
                <h1>BUILD IT BETTER</h1>
                <p>Can we do it? <b>YES WE CAN!</b></p>
                <a href="#all-products" class="btn">
                    Shop Now
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>
        </section>

        <!--Homepage Divider-->
        <div class="homepage-divider"></div>

<!------------------------------------------------------------------------->
<!-- PROMOTIONS -->

<!--Promotions-->
<section id="promotions" class="promotionsCatalogue">

    <!--Animation for Promotions-->
    <div class="center-text" data-aos="fade-up">
        <h2>Promotions</h2>
    </div>

    <!--Promotions Section-->
    <div class="promotions" data-aos="zoom-in-up">

        <!--Promo 1-->
        <div class="colPromo">
            <div class="colPromo-img"> <!--Promo flyer 1-->
                <img src="Images\promo1.jpg">
            </div>
        </div>

        <!--Promo 2-->
        <div class="colPromo">
            <div class="colPromo-img"> <!--Promo flyer 2-->
                <img src="Images\promo2.jpg">
            </div>
        </div>

        <!--Promo 3-->
        <div class="colPromo">
            <div class="colPromo-img"> <!--Promo flyer 3-->
                <img src="Images\promo3.jpg">
            </div>
        </div>

        <!--Promo 4-->
        <div class="colPromo">
            <div class="colPromo-img"> <!--Promo flyer 4-->
                <img src="Images\promo4.jpg">
            </div>     
        </div>

    </div>

</section>



<!--When this "<div>" is clicked the "onclick" event handler activates. (Shown + hidden upon click)-->
<div id="fullpage" onclick="this.style.display='none';"></div>


<!------------------------------------------------------------------------->
<!-- BEST SELLERS -->

        <!--Best Sellers-->
        <section id="best-sellers" class="selling">

            <!--Animation for Best Sellers-->
            <div class="center-text" data-aos="fade-up">
                <h2>Best Sellers</h2>
            </div>

            <!--Best Sellers Section-->
            <div class="best-sellers" data-aos="zoom-in-up">

                <!--Best Sellers card 1-->
                <div class="col">
                    <div class="col-img"> <!--Hammer-->
                        <img src="Images\Build it Hammer.png">
                    </div>

                    <div class="col-icon">
                        <!--Shopping Cart icon-->
                        <a href="#"><i class="ri-shopping-cart-line"></i></a>
                    </div>
                </div>

                <!--Best Sellers card 2-->
                <div class="col">
                    <div class="col-img"> <!--Compressor-->
                        <img src="Images\Build it Compressor.png">
                    </div>

                    <div class="col-icon">
                        <!--Shopping Cart icon-->
                        <a href="#"><i class="ri-shopping-cart-line"></i></a>
                    </div>
                </div>

                <!--Best Sellers card 3-->
                <div class="col">
                    <div class="col-img"> <!--Saw-->
                        <img src="Images\Build it Saw.png">
                    </div>

                    <div class="col-icon">
                        <!--Shopping Cart icon-->
                        <a href="#"><i class="ri-shopping-cart-line"></i></a>
                    </div>
                </div>

                <!--Best Sellers card 4-->
                <div class="col">
                    <div class="col-img">
                        <img src="Images\Build it valves.png">
                    </div>

                    <div class="col-icon">
                        <!--Shopping Cart icon-->
                        <a href="#"><i class="ri-shopping-cart-line"></i></a>
                    </div>
                </div>

            </div>

        </section>

<!------------------------------------------------------------------------->
<!-- ALL PRODUCTS -->

        <!--All products (Contains entire product section)-->
        <section id="all-products" class="allProd">

            <!--Heading (centered w/ CSS)-->
            <div class="center-text" data-aos="fade-down">
                <h2>All Products</h2>
            </div>

            <!--PRODUCT CARDS CONTAINER-->
            <div class="prodCardList" data-aos="zoom-in">


            <!--Imports specified file which has featured_products variable (array)-->
            <?php include('get_featured_products.php'); ?>


            <?php while($row= $featured_products->fetch_assoc()){ ?>

                <!--Container for content in Product Card-->
                <div class="prodCard">

                    <!--Contains product image-->
                    <div class="prodCard-img">  
                            <!--php code gets image from db-->
                        <img src="Images\<?php echo $row['product_image']; ?>">
                    </div>

                    <!--Product Name (php code takes name from db)-->
                    <h3>    <?php echo $row['product_name']; ?>     </h3>

            <!-------------------------------------------------------------------------------------------------------------------------------->
            <!--HIDDEN INPUT FORM START-->
            <form method="POST" action="shopping-cart.php">     <!--Same as prod image-->
                <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>"/>        <!--Required to pass product id to cart-->
                <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>"/>  <!--Required to pass image to cart-->
                <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>"/>    <!--Required to pass name to cart-->
                <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>"/>  <!--Required to pass price to cart-->
            <!-------------------------------------------------------------------------------------------------------------------------------->


                    <!--Contains "inner" content of Product Card (Add to Cart btn + Prod Price)-->
                    <div class="prodCard-details">

                        <!--Contains the price (php code takes name from db)-->
                        <div class="prodCard-price">
                            <h6>    R <?php echo $row['product_price']; ?>   </h6>
                        </div>

                        <!--Quantity Selector-->
                        <div class="prodCard-quantity">
                            <label>Qty:</label>
                            <input type="number" name="product_quantity" value="1">             <!--Required to pass qty to cart-->
                        </div>

                        <!--Add to cart text + Shopping cart Icon-->
                        <div class="prodCard-cart">
                            <button type="submit" name="add_to_cart"> Add to cart <i class="ri-shopping-cart-fill"></i> </button>
                        </div>

                    </div>
                </div>

            <!-------------------------------------------------------------------------------------------------------------------------------->
            <!--HIDDEN INPUT FORM END-->
            </form>
            <!-------------------------------------------------------------------------------------------------------------------------------->

            <?php } ?>
                

            <!--END OF PRODUCT CARDS CONTAINER-->
            </div>

            <!--View All btn-->
            <div class="viewAll" data-aos="zoom-in">
                <a href="product-list.html" class="viewAllBtn">View All</a>
            </div>

        </section>

<!------------------------------------------------------------------------->      
<!-- EMAIL NEWSLETTER -->
        
        <!--Newsletter Section-->
        <section class="newsletter">
            <div class="newsletter-content" data-aos="zoom-in">
                <div class="newsletter-text">
                    <h2>Be the First to get Promotions!</h2>
                    <p>Subscribe to our newsletter.</p>
                </div>

                <form action="">
                    <input type="email" placeholder="Enter email" required>
                    <input type="submit" value="Subscribe" class="btnnn">
                </form>

            </div>
        </section>

<!------------------------------------------------------------------------->
<!-- FOOTER -->

        <!--footer-->
        <section class="footer">

            <div class="footer-box">
                <h3>Contact Us</h3>
                <a href="#">Store Manager:<br>(013) 778 9625</a>
                <a href="#">Store Cell Number:<br>(072) 151 1392</a>
                <a href="#">Email:<br>manager.matsulu@builditmpu.co.za</a>
            </div>

            <div class="footer-box">
                <h3>Location</h3>
                <a href="#">Shop 20,<br>Matsulu Shopping Centre,<br>Madiba Drive Matsulu</a>
            </div>

            <div class="footer-box">
                <h3>Services</h3>
                <a href="#">Deliveries</a>
                <a href="#">Gas</a>
                <a href="#">Credit</a>
                <a href="#">Paint Mixing</a>
                <a href="#">Glass Cutting</a>
                <a href="#">Building Plan Reading</a>
            </div>

            <div class="footer-box">
                <h3>Social</h3>
                <div class="social">
                    <!--Facebook icon-->
                    <a href="#"><i class="ri-facebook-fill"></i></a>
                    <span class="facebookText">Facebook</span>
                </div>
            </div>

        </section>

        <!--Copyright-->
        <div class="copyright">
            <div class="end-text">
                <p>Copyright 2024 by Build It MPU Group. All rights reserved</p>
            </div>
        </div>

<!------------------------------------------------------------------------->
<!-- JAVASCRIPT SECTION -->

        <!--Executes the code from the specified js file-->
        <script src="main.js"></script>

        <!--AOS-->
        <!--Specifies where the URL where the AOS JavaScript file is hosted-->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            //function provided by the AOS library to initialize its functionality
            AOS.init({
                //Specifies the distance (px) from og trigger point to start new animation. (300px before ele in view)
                offset: 300,
                //specifies the duration of the animation(ms).
                duration: 1450,
            });
        </script>

    </body>

</html>  