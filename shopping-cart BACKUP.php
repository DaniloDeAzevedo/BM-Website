<?php

session_start();

if(isset($_POST['add_to_cart'])){

    //user adding additional items to cart
    if(isset($_SESSION['cart'])){
        
        //returns an array with all prod ids
        $products_array_ids = array_column($_SESSION['cart'],"product_id");

        //checks if the prod has been added to cart or not by comparing the prod id to the ids in products_array_ids
        if(!in_array($_POST['product_id'], $products_array_ids)){

            $product_id = $_POST['product_id'];

            $product_array = array(
                'product_id' => $_POST['product_id'],
                'product_name' => $_POST['product_name'],
                'product_price' => $_POST['product_price'],
                'product_image' => $_POST['product_image'],
                'product_quantity' => $_POST['product_quantity']
            );

            $_SESSION['cart'][$product_id] = $product_array;



        }
        //prod already added
        else
        {
            echo '<script>alert("Product has already been added to shopping cart")</script>';
        }

    }
    //First product that user is adding to cart
    else
    {
        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_POST['product_image'];
        $product_quantity = $_POST['product_quantity'];

        $product_array = array(
            'product_id' => $product_id,
            'product_name' => $product_name,
            'product_price' => $product_price,
            'product_image' => $product_image,
            'product_quantity' => $product_quantity
        );

        //Adding the array to the session
        $_SESSION['cart'][$product_id] = $product_array;

    }


//remove product from shopping cart
}else if(isset($_POST['remove_product'])){

    $product_id = $_POST['product_id'];

    //remove only a single item from the array
    unset($_SESSION['cart'][$product_id]);


}else if(isset($_POST['edit_quantity'])){

    //Capture id + quantity from form
    $product_id = $_POST['product_id'];
    $product_quantity = $_POST['product_quantity'];

    //retrieve prod array from session
    $product_array = $_SESSION['cart'][$product_id];

    //updates prod quantity
    $product_array['product_quantity'] = $product_quantity;

    //return array back to its original place in the session
    $_SESSION['cart'][$product_id] = $product_array;

}else{
    header('location: index.php');
}




?> 
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!--BROKEN SESSION CODE-->




<!DOCTYPE html>
<html>

<head>
    <!--Linking the HTML code to the CSS file for styles-->
    <link rel="stylesheet" type="text/css" href="shopping-cart.css">

    <!--Informs web browers how characters on the webpage should be interpreted-->
    <meta charset="utf-8">

    <!--Automatically adjusts the websites size to the device's screen size-->
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    
    <title> Shopping Cart - Build it Matsulu </title>

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
                <li><a href="index.php#promotions">Promotions</a></li>
                <li><a href="index.php#best-sellers">Best Sellers</a></li>
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

<!------------------------------------------------------------------------->
<!--CART-->

        <section class="cart">
            <div class="custom-container">
                <h2>Shopping Cart</h2>
                <hr>
            </div>
<!----------------------------------------->
<!--Table 1-->
            <table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>


                <!--Product in shoppping cart-->
                                                        <!--$value is the array-->
                <?php foreach($_SESSION['cart'] as $key => $value){ ?>

                <tr>
                    <td>
                        <div class="product-info">

                            <!--Product Image-->
                            <img src="Images/<?php echo $value['product_image']; ?>">

                            <div>
                                <!--Product Name-->
                                <p>     <?php echo $value['product_name']; ?>      </p>

                                <!--Product Price-->
                                <small><span>R</span>    <?php echo $value['product_price']; ?>    </small>
                                <br>

                                <!--Remove Button-->
                                <form method="POST" action="shopping-cart.php">
                                    <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>"/>
                                    <button type="submit" name="remove_product" class="remove-btn" value="remove">Remove</button>
                                </form>

                            </div>

                        </div>
                    </td>

                    <td>
                        <!--Edit form-->
                        <form method="POST" action="shopping-cart.php">
                            <!--Edit button input-->
                            <input type="hidden" name="product-id" value="<?php echo $value['product_id']; ?>"/>
                            <!--Product Quantity-->
                            <input type="number" name="product_quantity" value="<?php echo $value['product_quantity']; ?>"/>
                            <!--Edit button-->
                            <button type="submit" name="edit_quantity" class="edit-btn" value="edit">Edit</button>
                        </form>
                    </td>

                    <td>
                        <span>R</span>
                        <span class="product-price">155</span>
                    </td>

                </tr>
                
                <?php } ?> 

            </table>
<!----------------------------------------->
<!--Table 2 ()-->

            <div class="cart-total">
                <table> 
                    <tr>
                        <td>Subotal</td>
                        <td>R155</td>
                    </tr>

                    <tr>
                        <td>Total</td>
                        <td>R155</td>
                    </tr>
                </table>
            </div>
<!----------------------------------------->
<!--Checkout Button-->
            <div class="checkout-btn-container">
                <button class="checkout-btn">Checkout</button>
            </div>


        </section>




<!------------------------------------------------------------------------->

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
