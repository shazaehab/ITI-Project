<?php
include_once 'Header.php';
$id=(isset($_GET['id']))?(int)$_GET['id']:0;
$categorie=new categorie();
$categorie_data=$categorie->select_one($id);
$allowd_extensions=array("jpg","JPG","png","PNG","jpeg","JPEG");
if(isset($_POST['add'])){
    $categorie->set_name($_POST['name']);
    if(!empty($_FILES['image']['name'])){
        $image=$_FILES['image'];
    $image_name=$image['name'];
    $image_tmp=$image['tmp_name'];
    $extension=explode(".",$image_name);
    $extension=end($extension);
    if(in_array($extension,$allowd_extensions)){
        $categorie->set_image($image_name);
        move_uploaded_file($image_tmp,"..\img\\$image_name");
        $categorie->insert();
    }
    }else{
        $image_name=$categorie_data['c_image'];
    }
    $categorie->update($id);
}
?>

<div class="basic-form-area mg-b-15">
    <div class="container-fluid">

 <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline12-list shadow-reset mg-t-30">
                                <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1>Update categorie</h1>
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
                                                                    <label class="login2 pull-right pull-right-pro">categorie</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" name="name" value="<?php echo $categorie_data['c_name']?>"/>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">image</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="file" class="form-control" name="image"/>
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