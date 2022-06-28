<?php
include_once 'header.php';
session_start();
if(!isset($_SESSION['username'])){
	header("location: login.php");
}else{
	$mydate=date('Y-m-d');
	$user_id=$_SESSION['user_id'];
	$user_data=$customers->select_by_id($user_id);
	if(isset($_POST['add'])){
		$orders->set_firstname($_POST['firstname']);
		$orders->set_lastname($_POST['lastname']);
        $orders->set_email($_POST['email']);
        $orders->set_address($_POST['address']);
		$orders->set_phone($_POST['phone']);
		$orders->set_customer_id($user_id);
		$orders->set_order_date($mydate);
		$orders->insert();
	}
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
                        <h2>Checkout</h2>
                        <div class="back__option">
                            <a href="./index.php">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- back Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                    </h6>
                </div>
            </div>
            <div class="checkout__form">
                <h4>Billing Details</h4>
                <form method="post">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>First Name</p>
                                        <input type="text" required="" placeholder="" value="<?php echo $user_data['firstname'] ?>" name="firstname">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last Name</p>
                                        <input type="text" required="" placeholder="" value="<?php echo $user_data['lastname'] ?>" name="lastname">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="checkout__input">
                                <p>Email</p>
                                <input type="email" required="" placeholder="" value="<?php echo $user_data['email'] ?>" name="email">
                            </div>
                            <div class="checkout__input">
                                <p>Account Password</p>
                                <input type="text" required="" placeholder="">
                            </div>
                            <div class="checkout__input">
                                <p>Phone</p>
                                <input type="text" required="" placeholder="" value="<?php echo $user_data['phone'] ?>" name="phone">
                            </div>
                                
        
                            <div class="checkout__input">
                                <p>Address</p>
                                <input type="text" placeholder="Street Address" value="<?php echo $user_data['address'] ?>" name="address" class="checkout__input__add">
                            </div>
                            
                            
                            <div class="checkout__input__checkbox">
                                <label for="acc">
                                    Create an account?
                                    <input type="checkbox" id="acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <p>Create an account by entering the information below. If you are a returning customer
                                please login at the top of the page</p>
                            
                            
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                <ul>
                                    <li><?php echo $sub_data['sub_name'] ?> <span><?php echo $sub_data['price'] ?></span></li>
                                </ul>
                                <div class="checkout__order__total">Total <span>$750.99</span></div>
                                
                                <button type="submit" class="site-btn">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

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