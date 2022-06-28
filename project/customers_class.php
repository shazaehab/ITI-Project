<?php
class Customers extends Database{
    private $email,$password,$username;

    //getters
    public function get_email(){
        return $this->email;
    }
    public function get_password(){
        return $this->password;
    }

    //setters
    public function set_email($email){
        $this->email=$email;
    }
    public function set_password($password){
        $this->password=$password;
    }
    public function set_username($username){
        $this->username=$username;
    }
    public function set_phone($phone){
        $this->phone=$phone;
    }

    //select all
    public function select_all(){
        $sql="SELECT * FROM customers";
        $result=Parent::runDml($sql);
        $data=array();
        while($row=mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        return $data;
    }

    //select one
    public function select_one(){
        $sql="SELECT * FROM customers WHERE email='$this->email' AND password='$this->password'";
        $result=Parent::runDml($sql);
        $row=mysqli_fetch_assoc($result);
        $count=mysqli_num_rows($result);
        $data=array();
        $data['row']=$row;
        $data['count']=$count;
        return $data;
    }

    //select one
    public function select_by_id($id){
        $sql="SELECT * FROM customers WHERE cust_id=$id";
        $result=Parent::runDml($sql);
        $row=mysqli_fetch_assoc($result);
        return $row;
    }

}


?>