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
    $dia = 5;
    $mes = 7;
    $año = 2021;

    $suma = $dia + $mes + $año;
    $sum = 0;

    do{
	
        if($suma == 0){
            $suma = $sum;
            $sum = 0;
        }
    
        +$sum+=$suma % 10;
        $suma = ($suma/10);
    
    
    
    }while($suma>=1 || $sum>9);

    echo "$sum";

    ?>
</body>
</html>