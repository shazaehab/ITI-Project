<?php
class Orders extends Database{
    private $email,$firstname,$lastname,$phone,$order_date,$customer_id;


    //setters
    public function set_email($email){
        $this->email=$email;
    }
    public function set_firstname($firstname){
        $this->firstname=$firstname;
    }
    public function set_lastname($lastname){
        $this->lastname=$lastname;
    }
    public function set_phone($phone){
        $this->phone=$phone;
    }
    public function set_customer_id($customer_id){
        $this->customer_id=$customer_id;
    }
    public function set_order_date($order_date){
        $this->order_date=$order_date;
    }

    //insert
    public function insert(){
        $sql="INSERT INTO `orders`(`order_date`, `customer_id`, `firstname`, `lastname`, `email`, `phone`) VALUES ('$this->order_date','$this->customer_id','$this->firstname','$this->lastname','$this->email','$this->phone')";
        $result=Parent::runDml($sql);
        // if($result){
        //     $select_order="SELECT order_id FROM orders WHERE customer_id='$this->customer_id' ORDER BY order_id DESC LIMIT 1";
        //     $order_id
        // }
        return $result;
    }

    ?>