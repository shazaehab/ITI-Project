<?php
    include_once 'header.php';
$c_id=(isset($_GET['c_id']))?(int)$_GET['c_id']:0;
$sub_data=$sub_categories->select_by_c($c_id);
$sub_id=(isset($_GET['sub_id']))?(int)$_GET['sub_id']:0;
$s_data=$sub_categories->select_by_c($c_id);

?>
<!DOCTYPE html>
<html lang="zxx">

    <!-- back Section Begin -->
    <section class="back-section set-bg" data-setbg="img/back.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="back__text">
                        <h2 style="color:#7fad39">GARAGE Shop</h2>
                        <div class="back__option">
                            <a href="./index.html">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- back Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>All categories</h4>
                            <ul>
                            <?php foreach($Categorie_data as $Categorie){    
                            $c_id=$Categorie['c_id'];
                                ?> 
                            <li><a href="shop-grid.php?c_id=<?php echo $c_id; ?>"><?php echo $Categorie['c_name'] ?></a></li>
                        <?php } ?>
                            </ul>
                        </div>
                        
                        <div class="sidebar__item sidebar__item__color--option">
                            <h4>Colors</h4>
                            <div class="sidebar__item__color sidebar__item__color--white">
                                <label for="white">
                                    White
                                    <input type="radio" id="white">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--gray">
                                <label for="gray">
                                    Gray
                                    <input type="radio" id="gray">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--red">
                                <label for="red">
                                    Red
                                    <input type="radio" id="red">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--black">
                                <label for="black">
                                    Black
                                    <input type="radio" id="black">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--blue">
                                <label for="blue">
                                    Blue
                                    <input type="radio" id="blue">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--green">
                                <label for="green">
                                    Green
                                    <input type="radio" id="green">
                                </label>
                            </div>
                        </div>
                        
                        <div class="sidebar__item">
                        </div>
                            
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select>
                                        <option value="0">Default</option>
                                        <option value="0">Default</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>16</span> Products found</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row featured__filter">
                <?php
                    foreach($sub_data as $sub_categories){
                        
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                        <div class="featured__item">
                      
                            <div class="featured__item__pic set-bg" src="img/<?php echo $sub_categories['sub_img']; ?>">
                            <img src="img/<?php echo $sub_categories['sub_img']; ?>" >
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <?php ?>
                                    <li><a href="shoping-cart.php?sub_id=<?php echo $sub_id; ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#"><?php echo $sub_categories['sub_name'];  ?></a></h6>
                                <h5><?php echo $sub_categories['price']; ?></h5>       
                            </div>                   
                        </div>
                </div>
                <?php } ?>
             </div>   
                    <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

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