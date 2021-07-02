<?php
if (!isset($_COOKIE["PHPLGADP"])) {
    header("location:signin");
} else {
    require_once("config.php");

    if (isset($_REQUEST["book_id"])) {
        $book_id = $_REQUEST["book_id"];
        $total_taka = $_REQUEST["book_price"];
        $book_name = $_REQUEST["book_name"];

        $cartSelect = "SELECT * FROM cart WHERE book_id='$book_id'";
        $cartSelectQ = mysqli_query($conn, $cartSelect);
        $cartSelectcount = mysqli_num_rows($cartSelectQ);

        while ($cartData = mysqli_fetch_array($cartSelectQ)) {
            $quantity = $cartData["quantity"];
            $total_taka = $cartData["total_taka"];
            $price = $cartData["price"];

        }
        if ($cartSelectcount == "1") {
            $quantity += 1;
            $total_price=$price * $quantity;

            $update = "UPDATE cart SET quantity='$quantity', total_taka='$total_price' WHERE book_id='$book_id'";
            $updateQ = mysqli_query($conn, $update);

            if($updateQ==true){
                header("location:/adp");
            }
        } else {
            $authToken = $_COOKIE["PHPLGADP"];
            $selectUsr = "SELECT * FROM users WHERE usrauthToken='$authToken'";
            $runselectUsr = mysqli_query($conn, $selectUsr);
            while ($usrdata = mysqli_fetch_array($runselectUsr)) {
                $user_id = $usrdata["user_id"];
                global $book_id;

                $insertCart = "INSERT INTO cart(book_id,book_name,user_id,price,total_taka) VALUES('$book_id','$book_name','$user_id','$total_taka','$total_taka')";
                $cartInsertQuery = mysqli_query($conn, $insertCart);
                if ($cartInsertQuery == true) {
                    header("location:/adp");
                } else {
                    header("location:/adp");
                }
            }
        }
    } else {
        echo "no request";
    }
}
