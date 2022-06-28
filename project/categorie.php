<?php
class Categorie extends Database{
    private $name,$image,$c_id;

    //getters
    
    public function get_c_id(){
        return $this->c_id;
    }
    public function get_name(){
        return $this->name;
    }
    public function get_image(){
        return $this->image;
    }

    //setters
    public function set_c_id($c_id){
        $this->name=$c_id;
    }
    public function set_name($name){
        $this->name=$name;
    }
    public function set_image($image){
        $this->image=$image;
    }
        //select all
        public function select_all(){
            $sql="SELECT * FROM Categorie";
            $result=Parent::runDml($sql);
            $data=array();
            while($row=mysqli_fetch_assoc($result)){
                $data[]=$row;
            }
            return $data;
        }
    
        //select one
        public function select_one($id){
            $sql="SELECT * FROM Categorie WHERE c_id=$id";
            $result=Parent::runDml($sql);
            $data=array();
            while($row=mysqli_fetch_assoc($result)){
                $data[]=$row;
            }
            return $data;
        }
    
        //insert
        public function insert(){
            $sql="INSERT INTO `Categorie`(`c_name`, `c_image`) VALUES ('$this->name','$this->image')";
            $result=Parent::runDml($sql);
            return $result;
        }
    
        //update
        public function update($id){
            $sql="UPDATE `Categorie` SET `c_name`='$this->name',`c_image`='$this->image' WHERE c_id=$id";
            $result=Parent::runDml($sql);
            return $result;
        }
    }
    
    
    ?>