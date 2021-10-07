<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $var1 = 3;
        $var2 = 7;
      
        include "funciones.inc.php";
        include_once "funciones2.inc.php";
        require "funciones2.inc.php";
        $total = multiplicacion($var1, $var2);
        echo "El resultado es ", $total;



    ?>
</body>
</html>