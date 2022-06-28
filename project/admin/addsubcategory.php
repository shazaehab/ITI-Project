<?php
include_once 'Header.php';
$sub_categories=new sub_categories();
$allowd_extensions=array("jpg","JPG","png","PNG","jpeg","JPEG");
if(isset($_POST['add'])){
    $sub_categories->set_c_id($_POST['c_id']);
    $sub_categories->set_name($_POST['name']);
    $sub_categories->set_price($_POST['price']);
     $sub_categories->set_model($_POST['model']);
     $sub_categories->set_best_seller($_POST['best_seller']);
    $img=$_FILES['img'];
    $image_name=$img['name'];
    $image_tmp=$img['tmp_name'];
    $extension=explode(".",$image_name);
    $extension=end($extension);
    if(in_array($extension,$allowd_extensions)){
        $sub_categories->set_img($image_name);
        move_uploaded_file($image_tmp,"..\img\\$image_name");
        
        $sub_categories->insert();
    }
   
}
    
?>

<div class="basic-form-area mg-b-15">
    <div class="container-fluid">

 <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline12-list shadow-reset mg-t-30">
                                <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1>Addsubcategory</h1>
                                        <div class="sparkline12-outline-icon">
                                            <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline12-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="all-form-element-inner">
                                                    <form method="post" enctype="multipart/form-data">
                                                    <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">C_id</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="int" class="form-control" name="c_id"/>
                                                                </div>
                                                            </div>

                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">CAR</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" name="name"/>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">image</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="file" class="form-control" name="img"/>
                                                                </div>
                                                            </div>
                                                        </div>         

                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">price</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="int" class="form-control" name="price"/>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">model</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="int" class="form-control" name="model"/>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Best_seller</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="int" class="form-control" name="best_seller"/>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group-inner">
                                                            <div class="login-btn-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-3"></div>
                                                                    <div class="col-lg-9">
                                                                        <div class="login-horizental cancel-wp pull-left">
                                                                            <button class="btn btn-sm btn-primary login-submit-cs" type="submit" name="add">Save Change</button>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
<?php
include_once 'Footer.php';
?>