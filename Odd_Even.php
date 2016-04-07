<?php

/**
 * Created by PhpStorm.
 * User: Dipak
 * Date: 4/7/2016
 * Time: 10:35 AM
 */
class Odd_Even{

    public $n;
    public $i;

    public function Odd($n){

        echo "Odd Number Is:<br>";
        for($i=1;$i<=$n;$i++)
        {
              if($i%2)
                echo $i."<br>";
        }
    }

    public function Even($n){

        echo "Even Number Is:<br>";
        for($i=1;$i<=$n;$i++)
        {
            if(!($i%2))
                echo $i."<br>";
        }
    }
}

$x= new Odd_Even();
$y= new Odd_Even();

echo $x->Odd(10);
echo $y->Even(10);