<?php
include "Header.php";
 ?>
<!-- Breadcome start-->
<div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
												<input type="text" placeholder="Search..." class="form-control">
												<a href=""><i class="fa fa-search"></i></a>
											</form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="sub_categories.php">subCategorie</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><a href="addsubcategory.php">Addsubcategorie</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- Breadcome End-->
<form method="post">
    <div class="col-lg-12">
         <div class="tab-content">
         <div id="inbox" class="tab-pane fade in animated zoomInDown custom-inbox-message shadow-reset active">
         <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true">
            <thead>
                <tr>
                <th data-field="d">CAR</th>
                <th data-field="x">Image</th>
                <th data-field="y">Price</th>
                <th data-field="z">Model</th>
                <th data-field="a">Best_seller</th>
                <th data-field="s">operations</th>
                </tr>
            </thead>
            <tbody>

                <?php
                   $sub_categories=new sub_categories();
                   $sub_data=$sub_categories->select_all();
                   foreach($sub_data as $sub_categories){?>
                <tr class="new-email">
                    <td> <label   name ="txtevent"><?php echo $sub_categories['sub_name'] ?></label> </td>
                    <td> <img width="100px" height="100px" src="../img/<?php echo $sub_categories['sub_img'] ?>"> </td>
                    <td> <label   price ="txtevent"><?php echo $sub_categories['price'] ?></label> </td>
                    <td> <label   model ="txtevent"><?php echo $sub_categories['model'] ?></label> </td>
                    <td> <label   best_seller ="txtevent"><?php echo $sub_categories['best_seller'] ?></label> </td>
                    <td> 
                        <a href="Deletecategorie.php?id=<?php echo $categorie['c_id'] ?>"  class="btn btn-custon-rounded-four btn-danger" >Delete</a> 
                        <a href="updatesub.php?id=<?php echo $sub_categories['sub_id'] ?>"  class="btn btn-custon-rounded-four btn-success" >Update</a> 
                    </td>
                </tr>
                <?php } ?>
          </tbody>
        </table>
    </div>
</div>
</div> 
 </form>
<?php
include "Footer.php";
?>  
</body>
</html>
