<?php
/**
 * Created by PhpStorm.
 * User: Dipak
 * Date: 4/5/2016
 * Time: 3:05 PM
 */
class customer
{
    var $cust_id;
    var $cust_name;

    public function setCustId(){
        $this->cust_id=10;
        return $this->cust_id;
    }


    public function getCustId()
    {
        return $this->cust_id;
    }
}