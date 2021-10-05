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
        $sueldo = 40000;
        $años = 5;
        $des10 = 10;
        $des7 = 7;
        $des5 = 5;
        $des3 = 3;

    if ($años > 10) {
        $t = $sueldo * (1- $des10/100);

        echo" Se le aplica un $des10 % de descuento, son: $t ";

    }else if ($años <= 10 && $años > 5){
        $t = $sueldo * (1- $des7/100);

        echo" Se le aplica un $des7 % de descuento, son: $t ";

    }else if ($años <= 5 && $años >3){
        $t = $sueldo * (1- $des5/100);

        echo" Se le aplica un $des5 % de descuento, son: $t ";

    }else if ($años <= 3){
        $t = $sueldo * (1- $des3/100);

        echo" Se le aplica un $des3 % de descuento, son: $t ";

    }

    ?>
</body>
</html>