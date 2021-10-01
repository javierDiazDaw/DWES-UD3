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
    $num = 3;
    $con = 1;
    $res;


    do{

        $res = $num * $con;
        

        echo $num, "X", $con, "=", $res; 
        echo("<br>");
        $con++;

    }while($con < 11);
       
   
    ?>
</body>
</html>