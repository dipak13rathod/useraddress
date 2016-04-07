<?php
/**
 * Created by PhpStorm.
 * User: Dipak
 * Date: 4/6/2016
 * Time: 3:34 PM
 */

    class N1{
        public $a;
        public $b;
        public $c;

        public function swap1($a,$b){
            echo "The Original Values of A & B:<br>";
            echo "Value of A= ".$a."<br>";
            echo "Value of B= ".$b."<br>";
            //SWAPING
             $c=$a;

             $a=$b;

             $b=$c;
            echo "After Swaping the Values of A & B:<br>";
            echo "Value of A= ".$a."<br>";
            echo "Value of B= ".$b;
        }
    }
        $x= new N1();

        echo $x= N1::swap1(10,20);