<?php
/**
 * Created by PhpStorm.
 * User: Dipak
 * Date: 4/7/2016
 * Time: 4:32 PM
 */

function __autoload($Class){
    include "Classes/$Class.php";
}

$j=new ABC();
$k=new XYZ();


echo $j->a();
echo $k->x();
echo "<br>";
echo "Value for ABC:<br>";
echo $j->Name."<br>";
echo $j->Surname."<br>";
echo "<br>";
echo "Value for XYZ:<br>";
echo $k->Name."<br>";
echo $k->Surname."<br>";