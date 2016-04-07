<?php

/**
 * Created by PhpStorm.
 * User: Dipak
 * Date: 4/7/2016
 * Time: 11:02 AM
 */
class User{
    protected $name="Dipak";
    public $id=1;
    public $city="Rajkot";

    public function userData(){
        echo "Staff Detail:-<br>";
        echo "User Id:".$this->id."<br>User Name: ".$this->name."<br>City: ".$this->city;
    }
}
class Office extends User{

    public $O_name="XZY";
    public $O_add="ABC";
    public $O_no="13";
    public $O_phn="3652145";

    function __construct()
    {
        echo "Office Detail:-<br>";
        echo "Office Name: ".$this->O_name."<br>";
        echo "Office No: ".$this->O_no."<br>";
        echo "Office Phone No: ".$this->O_phn."<br>";
        echo "Office Address: ".$this->O_add."<br>";
        echo "Office User Id: ".$this->id."<br>";
        echo "Office User Name: ".$this->name."<br>";
        echo "<br><br><br>";
    }
}

$x=new User();
$O=new Office();
echo $x->userData();