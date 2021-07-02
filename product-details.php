<?php require_once("header.php"); 
require_once("config.php");
$book_name=$_REQUEST["book_name"];
?>

<div class="product-details-container">
        <div class="safeArea ">
<?php 
if (isset($_REQUEST["book_name"])) {
    
    $selectQuery="SELECT * FROM books WHERE book_name='$book_name'";
    $Query=mysqli_query($conn,$selectQuery);

    if ($selectQuery==true) {
        while ($Sbooks = mysqli_fetch_array($Query)) { ?>

           <div class="products-details clearfix bg-glass">
               <div class="product-details-thumbnail-img-container col-sm-3">
                <div class="product-details-thumbnail-img"><img src="images/<?php echo $Sbooks["book_img"]; ?>" alt=""></div>
                <?php $salePrice=$Sbooks["book_sale_price"];
                          if($salePrice>0){
                              echo "<div class='sale'><img src='images/sale.png' alt='sale'></div>";
                          }
                    ?>
            </div>
                <div class="products-details-book-details bangla-font col-sm-8">
                
                <h3 class="products-details-book-title"><?php echo $Sbooks["book_name"]; ?></h3>
                <h4 class="products-details-book-writer"><?php echo $Sbooks["book_writer"]; ?></h4>

                <?php $salePrice=$Sbooks["book_sale_price"];
                          if($salePrice>0){ ?>
                            
                            <span class="products-details-book-previous-price"><del>TK. <?php echo $Sbooks["book_price"]; ?></del></span>
                              
                        <?php  }else{ ?>
                            <span class="products-details-book-present-price">TK. <?php echo $Sbooks["book_price"]; ?></span>
                         <?php } ?>
                        <?php $salePrice=$Sbooks["book_sale_price"];
                          if($salePrice>0){ ?>
                             <span class="products-details-book-present-price">TK. <?php echo $Sbooks["book_sale_price"]; ?></span>
                              
                        <?php  } ?>
                
                <!-- <a href="#" class="products-details-open-book">একটু পড়ে দেখুন</a> -->
                <a id="add-to-cart" href="add-to-cart.php?book_id=<?php echo $Sbooks['book_id'];?>&book_name=<?php echo $Sbooks['book_name'];?>&book_price=<?php $salePrice=$Sbooks["book_sale_price"];if($salePrice>0){echo $Sbooks["book_sale_price"];}else{echo $Sbooks["book_price"];}?>" class="products-details-add-to-cart bg-adp"><i class="fa fa-cart-plus"></i> Add To Cart</a>
                <!-- <a href="#" class="products-details-add-to-wishlist"><i class="fa fa-heart"></i> Add To WishList</a> -->
                </div>
            
        <?php } } else {
        header("location:index.php");
    }
    


} else {
    header("location:index.php");
}
?> 
 
            </div>
            
        </div>
    </div>
<div class="clearboth"></div>   
<?php require_once("footer.php"); ?>