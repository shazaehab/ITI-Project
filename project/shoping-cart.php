<?php
session_start();
include_once 'header.php';
include_once 'Database.php';
if(!isset($_SESSION['cart'])){
	$_SESSION['cart']=array();
}
if(isset($_POST['product'])){
	$product_id=$_POST['sub_id'];
    $price=$_POST['price'];
    $model=$_POST['model'];
	$item=array();
	$item["sub_id"]=$product_id;
    $item["price"]=$price;
    $item["model"]=$model;
    $_SESSION['cart'][]=$item;
    
}
?>


<!DOCTYPE html>
<html lang="zxx">
    <!-- back Section Begin -->
    <section class="back-section set-bg" data-setbg="img/back.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="back__text">
                        <h2>Shopping Cart</h2>
                        <div class="back__option">
                            <a href="index.php">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- back Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <form method="post">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Model</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($_SESSION['cart'] as $product){
                                    $pro_id=$product['sub_id'];
                                    $product_data=$products->select_by_sub($pro_id);
                                ?>
                                
                                
                                    <tr>
                                        <td class="shoping__cart__item" style="width:50%">
                                            <img src="img/<?php echo $product_data['sub_img'] ?>" alt="">
                                            <h5><?php echo $product_data['sub_name'] ?><</h5>
                                        </td>
                                        <td class="shoping__cart__price">
                                            <?php echo $product_data['price'] ?>
                                        </td>
                                        <td class="Modek of Car">
                                            <?php echo $product_data['model'] ?>
                                        </td>
                                        
                                        <td class="shoping__cart__total">
                                            <?php echo $product_data['price'] ?>
                                        </td>
                                        <td class="shoping__cart__item__close">
                                            <span class="icon_close"></span>
                                        </td>
                                    </tr>
                                    <?php } ?>
                            
                            
                              
                              
                            </tbody>
                        </table>
                    </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="index.php" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Update Cart</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Subtotal <span> 2250 </span></li>
                            <li>Total <span> 2550 </span></li>
                        </ul>
                        <a href="checkout.php" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->
    <?php
include_once 'footer.php';
?>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>