<!--
/**
 * Created by PhpStorm.
 * User: Dipak
 * Date: 4/5/2016
 * Time: 2:31 PM
 */
-->
<html>
     <head>
            <meta charset="UTF-8">
         <title>OOP in PHP</title>
         <?php include("customer_class_lib.php"); ?>
     </head>
     <body>
            <h2>Hello</h2>

            <?php
                $xyz=new customer();
                $abc=new customer();

                    $xyz->setCustId(1);
                    $abc->setCustId(2);

                    echo "Customer Id:" . $xyz->getCustId();
                    echo "Customer Id:" . $abc->getCustId();
            ?>
     </body>
</html>