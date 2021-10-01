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
    $num1 = 3;
    $num2 = 8;
    $num3 = 5;

    if($num1 > $num2 && $num1 >$num3){
        echo "El numero mas grande es ", $num1;
    }elseif($num2 > $num3 && $num2 >$num1){
        echo "El numero mas grande es ", $num2;
    }else{
        echo "El numero mas grande es ", $num3;
    }

    ?>
</body>
</html>