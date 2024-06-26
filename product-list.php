<!DOCTYPE html>
<html>

<head>
    <!--Linking the HTML code to the CSS file for styles-->
    <link rel="stylesheet" type="text/css" href="product-list.css">

    <!--Informs web browers how characters on the webpage should be interpreted-->
    <meta charset="utf-8">

    <!--Automatically adjusts the websites size to the device's screen size-->
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    
    <title> Product List - Build it Matsulu </title>

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
            <a href="index.php" class="logo"><img src="images\BM-Logo.png"></a>

            <!--Navigation menu in the form of an unordered list-->
            <ul class="navMenu">
                <!--Navigation links within the menu that take the user to the same page (null links)-->
                <li><a href="product-list.php">Shop</a></li>
                <li><a href="index.php#promotions">Promotions</a></li>
                <li><a href="index.php#best-sellers">Best Sellers</a></li>
                <li><a href="index.php#ContactUs">Contact Us</a></li>
            </ul>

            <!--Symbols from Remix icons website-->
            <div class="navMenu-right">

                <!--Shopping cart symbol-->
                <a href="shopping-cart.php"><i class="ri-shopping-cart-line"></i></a>
                <!--User symbol-->
                <a href="login.php"><i class="ri-user-line"></i></a>
                
                <!--Three line menu symbol-->
                <div class="bx bx-menu" id="menu-icon"></div>
 
            </div>
        </header>

<!------------------------------------------------------------------------->
<!-- ALL PRODUCTS -->

        <section id="all-products" class="allProd">

            <!--All Products Heading-->
            <div class="center-text" data-aos="fade-down">
                <h2>All Products</h2>
            </div>

            <!--PRODUCT CARDS CONTAINER-->
            <div class="prodCardList" data-aos="zoom-in">

                <?php include('get_products_for_list.php'); ?>

                <?php
                    $counter = 0;
                ?>
    
                <?php while($row= $featured_products->fetch_assoc()){ ?>
    
                <!--Container for content in Product Card-->
                    <div class="prodCard">

                        <div class="prodCard-img">  
                            <img src="images\<?php echo $row['product_image']; ?>">
                        </div>
                        
                        <h3><?php echo $row['product_name']; ?></h3>
    
                        <!--HIDDEN INPUT FORM START-->
                        <form method="POST" id="add-form-<?php echo $counter; ?>">    
                            <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>"/>
                            <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>"/>
                            <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>"/>
                            <input type="hidden" name="counter" value="<?php echo $counter ?>"/>
                            
                            <div class="prodCard-details">
                                <div class="prodCard-price">
                                    <h6>R <?php echo $row['product_price']; ?></h6>
                                </div>
    
                                <div class="prodCard-cart">
                                    <button type="submit"> Add to cart <i class="ri-shopping-cart-fill"></i> </button>
                                </div>
                            </div>
                        </form>
                        <!--HIDDEN INPUT FORM END-->
                    </div>
                <?php $counter++; ?>
                <?php } ?>
            </div>
            <!--END OF PRODUCT CARDS CONTAINER-->
        </section>

<!------------------------------------------------------------------------->
<!-- FOOTER -->

        <!--footer-->
        <section class="footer">

            <div class="footer-box">
                <h3 id="ContactUs">Contact Us</h3>
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
                    <a href="https://www.facebook.com/BuilditMatsulu/"><i class="ri-facebook-fill"></i></a>
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
                offset: 300,
                duration: 1450,
            });
        </script>
    </body>
</html>  