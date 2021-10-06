<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $Meses = array();
    $Meses[] = "enero";
    $Meses[] = "febrero";
    $Meses[] = "marzo";
   
    
    echo("<br>");
    print_r($Meses);
    echo("<br>");
    print_r(count($Meses));
    echo"<br>";

    $Meses[] = 7;
    $Meses[] = "Abril";
    $Meses[] = true;
    $Meses[] = "Junio";

    echo("<br>");
    print_r($Meses);
    echo("<br>");
    print_r(count($Meses));
    echo"<br>";

    unset($Meses[3]);

    echo("<br>");
    print_r($Meses);
    echo("<br>");
    print_r(count($Meses));
    echo"<br>";

    $Meses[5] = "MAYO";
    $Meses[] = "julio";
    $Meses[] = "agosto";
    $Meses[] = "septiembre";
    $Meses[] = "octubre";
    $Meses[] = "noviembre";
    $Meses[] = "diciembre";

    echo("<br>");
    print_r($Meses);
    echo("<br>");
    print_r(count($Meses));
    echo"<br>";    

    ?>
</body>
</html>