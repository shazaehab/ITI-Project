<?php
class Database{
    private $connect;
    public function __construct(){
        $this->connect=mysqli_connect("localhost","root","","garage");
    }
    public function runDml($statement){
        return mysqli_query($this->connect,$statement);
    }
}