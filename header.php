<?php session_start(); require_once("config.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/logo.png">
    <title>Alor Dishari Publications</title>

    <!--Template based on URL below-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">


    <!-- offline -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/fontawesome.css" rel="stylesheet" type="text/css">
    <link href="css/aos.css" rel="stylesheet" type="text/css">
    <link href="css/banglafont.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://use.fontawesome.com/c1f2a839e6.js"></script>
    <script src="js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>

    <!-- Place your stylesheet here-->
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <link href="css/other.css" rel="stylesheet" type="text/css">
    <link href="css/products-details.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
<style>
.goog-te-gadget-icon{
    display: none !important;
}
.goog-te-menu2-item div, .goog-te-menu2-item:link div, .goog-te-menu2-item:visited div, .goog-te-menu2-item:active div {
    color: #37a543 !important;
}
</style>
</head>

<body>
    <!-- start top address-->
    <div class="top-header">
        <div class="safeArea">
            <div class="top-bar">
                <div class="wrap">
                    <ul class="topaddress">
                        <li><a title="Baladil Amin Abason,Uttar Auchpara,Tamirul Millat Road,Tongi, Gazipur City."
                                href="#"><i class="fa fa-map-marker"></i> Baladil Amin Abason,Uttar Auchpara,Tamirul
                                Millat Road,Tongi, Gazipur City.
                            </a></li>
                        <li><a title="Call Us" href="tel:+8801915-711172"><i class="fa fa-phone-square"></i>
                                01915-711172
                            </a></li>
                        <li><a title="Mail Us" href="mailto:info.alordishari2001@gmail.com"><i
                                    class="fa fa-envelope-o"></i> info.alordishari2001@gmail.com</a></li>
                    </ul>
                </div>
                <div class="right-top-bar">
                    <nav class="navigationDrop">
                        <ul>
                            <!-- <li class="active">
                                <a href="javascript:void(0)">Track My Order</a>
                                <ul class="children sub-menu">
                                    <form action=""><input type="text" placeholder="Search"><button type="submit"
                                            value="Search"><i class="fa fa-search"></i></button></form>
                                    <li>
                                        <a href="#">Track</a>
                                    </li>
                                </ul>
                            </li> -->
                            <li>
                            <div id="google_translate_element"></div>
                            
                            </li>

                            <li class="last">
                            <?php 
                                if(isset($_COOKIE["PHPLGADP"])){
                                    $authToken= $_COOKIE["PHPLGADP"];
                                    $selectUsr="SELECT * FROM users WHERE usrauthToken='$authToken'";
                                    $runselectUsr=mysqli_query($conn,$selectUsr);
                    
                                    while ($fname=mysqli_fetch_array($runselectUsr)) {
                                        echo "<li class='last'>";
                                        echo "<a href='javascript:void(0)'>".$fname["full_name"]." ACCOUNT</a>";
                                        echo "<ul class='children sub-menu'>
                                        <li>
                                            <a href='myaccount'><i class='fa fa-user'></i>  My Account</a>
                                        </li>
                                        <li>
                                            <a href='myorders'><i class='fa fa-shopping-bag'></i> Orders</a>
                                        </li>
                                        <li>
                                            <a href='logout.php'><i class='fa fa-sign-out'></i> logout</a>
                                        </li>
                                    </ul>";
                                        echo "</li>";

                                        }
                                    }else {
                                        echo "<a href='signin'>Sign Up/Login</a>";
                                    }
                                ?>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end top address-->
    <!-- start top header-->
    <div class="sitebranding">
        <div class="safeArea">
            <div class="logo-area">
                <h1 class="text-hide">Alor Dishari Publications</h1>
                <p style="display:none;">ALP</p>
                <a href="/adp"><img src="images/disharilogo.png" alt="" title="Alor Dishari Publications"></a>
            </div>


            <div class="header-right">
                <div class="search-product">
                    <form action="searchbook.php" method="POST"><input type="text" name="book_name" placeholder="Search"><button type="submit" value="Search"><i
                                class="fa fa-search"></i></button></form>
                </div>


                <!-- <div class="wishList"><i class="fa fa-heart-o"> </i><span>1</span></div> -->
                <div class="cart"><img src="images/carticon.png" width="40px" id="cartslideshow" onclick="openNav()"><?php
                if(isset($_COOKIE["PHPLGADP"])){
                $authToken= $_COOKIE["PHPLGADP"];
                $selectUsr="SELECT * FROM users WHERE usrauthToken='$authToken'";
                $runselectUsr=mysqli_query($conn,$selectUsr);

                while ($usriddata=mysqli_fetch_array($runselectUsr)) {
                    $user_id=$usriddata["user_id"];
                    }
                    global $user_id;
                    $cartQuery = mysqli_query($conn, "SELECT * FROM cart WHERE user_id='$user_id'");
                    while ($cartinfo = mysqli_fetch_array($cartQuery)) {
                        $cartcount = mysqli_num_rows($cartQuery);
                        if ($cartcount == "0") {
                            echo "0";
                        } else {
                            echo "<span>" . $cartcount . "</span>";
                        }
                    } 
                
            }
                                                                                                            ?></div>
                <div id="mySidenav" class="sidenav cartContainer">

                    <span id="closecartslide" onclick="closeNav()">&times;</span>
                    <h4 class="shopii">Shopping Cart :</h4>


                    <?php
                    $totalpriceslide = 0;
                    global $user_id;
                    $cartQuery = mysqli_query($conn, "SELECT * FROM cart WHERE user_id='$user_id'");
                    while ($cartinfo = mysqli_fetch_array($cartQuery)) {
                        $user_id = $cartinfo["user_id"];
                        $book_id = $cartinfo["book_id"];
                        $quantity = $cartinfo["quantity"];
                        $totalTaka=$cartinfo["total_taka"];
                        $selectcartBook = "SELECT * FROM books WHERE book_id='$book_id'";
                        $bookcartQuery = mysqli_query($conn, $selectcartBook);
                        while ($cartbook = mysqli_fetch_array($bookcartQuery)) {
                            if ($bookcartQuery == true) {
                                $totalpriceslide += $totalTaka;
                            } else {
                                $totalpriceslide = 0;
                            }
                    ?>

                    <div class="cartslideitems">
                        <div class="cartSlideThumb">
                            <img src="images/<?php echo $cartbook["book_img"]; ?>" alt="">
                        </div>
                        <div class="cartslidedetails">
                            <h3 class="cartSlide-book-title"><?php echo $cartbook["book_name"]; ?></h3>
                            <h4 class="cartSlide-book-writer"><?php echo $cartbook["book_writer"]; ?></h4>
                            <span class="cartSlide-book-present-price">TK. <span
                                    id="cartSlidePrice"><?php echo $totalTaka; ?></span></span>
                            <a onclick="return confirm('Are you Sure?');" href="deletecart.php?cartdeleteid=<?php echo $cartinfo['cart_id']; ?>"
                                class="closecartitem btn btn-danger">&times;</a>
                        </div>
                    </div>
                    <?php    }
                    }  ?>

                    <div class="cartslisetoo">
                        <p class="cart-Slide-toatal">Total</p>
                        <p class="cart-Slide-toatalf"><span
                                id="cartSlideTotalPrice"><?php echo  $totalpriceslide; ?></span> Taka</p>
                    </div>
                    <div class="clearboth"></div>
                    <!-- <a href="shipping.html" class="shippingcartbtn btn btn-dark">Proces to checkOut</a> -->
                    <a href="cart" class="viewcartbtn btn bg-adp"><i class="fa fa-shopping-cart"></i> View Cart</a>

                </div>

                <div class="totalamount"><span class="totalamounttext">Total</span><span class="totalamountvalue">৳
                <?php echo  $totalpriceslide; ?></span></div>
            </div>
        </div>
    </div>
    <div class="clearboth"></div>
    <div class="mainNav">
        <div class="safeArea">
            <ul>
                <li><a href="/adp"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="books">Books</a></li>
                <li><a href="news">News</a></li>
                <li><a href="cart">Cart</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="recipt">Receipt</a></li>
            </ul>
        </div>
    </div>
    <!-- end top header -->