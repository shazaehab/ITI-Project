<?php
class sub_categories extends Database{
    private $name,$img,$price,$model,$best_seller,$sub_id,$c_id;

    //getters
    public function get_name(){
        return $this->name;
    }
    public function get_img(){
        return $this->img;
    }
    public function get_price(){
        return $this->price;
    }
    public function get_model(){
        return $this->model;
    }
    public function get_best_seller(){
        return $this->best_seller;
    }
    public function get_sub_id(){
        return $this->sub_id;
    }
    public function get_c_id(){
        return $this->c_id;
    }
    //setters
    public function set_name($name){
        $this->name=$name;
    }
    public function set_img($img){
        $this->name=$img;
    }
    public function set_price($price){
        $this->name=$price;
    }
    public function set_model($model){
        $this->name=$model;
    }
    public function set_best_seller($best_seller){
        $this->name=$best_seller;
    }
    public function set_sub_id($sub_id){
        $this->name=$sub_id;
    }
    public function set_c_id($c_id){
        $this->name=$c_id;
    }
    //select all
    public function select_all(){
        $sql="SELECT * FROM sub_categories";
        $result=Parent::runDml($sql);
        $data=array();
        while($row=mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        return $data;
    }
    //select one
    public function select_one($best_seller){
        $sql="SELECT * FROM sub_categories WHERE best_seller=$best_seller";
        $result=Parent::runDml($sql);
        $row=mysqli_fetch_assoc($result);
        return $row;
    }
    //select by category
    public function select_by_c($id){
        $sql="SELECT * FROM sub_categories WHERE c_id=$id";
        $result=Parent::runDml($sql);
        $data=array();
        while($row=mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        return $data;
    }
     //insert
     public function insert(){
        $sql="INSERT INTO `sub_categories`(`c_id`,`sub_name`,`sub_img`,`price`, `model`,`best_seller`) VALUES ('$this->c_id,'$this->name','$this->img','$this->price','$this->model','$this->best_seller')";
        $result=Parent::runDml($sql);
        return $result;
    }

    //update
    public function update($id){
        $sql="UPDATE `sub_categories` SET `c_name`='$this->name',`c_image`='$this->image' WHERE c_id=$id";
        $result=Parent::runDml($sql);
        return $result;
    }
    //select by sub_id
    public function select_by_sub($id){
    $sql="SELECT * FROM sub_categories WHERE sub_id=$id";
    $result=Parent::runDml($sql);
    $data=array();
    while($row=mysqli_fetch_assoc($result)){
        $data[]=$row;
    }
    return $data;
    // $products->insert();
}

}



?>

