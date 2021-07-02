<?php 

if(isset($_REQUEST['cartdeleteid'])){
require_once("config.php");  
$cartdeleteid=$_REQUEST['cartdeleteid'];
$deletecart="DELETE FROM cart WHERE cart_id='".$cartdeleteid."'";
    $deletequery=mysqli_query($conn,$deletecart);
    if($deletecart==true){
        header("location:/adp");
    }
}
?>