<?php

/**
 * Created by PhpStorm.
 * User: Dipak
 * Date: 4/7/2016
 * Time: 2:33 PM
 */
class Fibo{

    public $i;
    public $n;
    public function Fi($n){
        $a=0;

        $b=1;

        $c=0;

        echo "Fibonacci Series is:<br>";
        echo $a."<br>";
        echo $b."<br>";
        for($i=0; $i<=$n; $i++)
        {
            $c = $a + $b;
            echo $c."<br>";
            $a = $b;
            $b = $c;
        }

    }
}

$x=new fibo();

echo $x->Fi(10);