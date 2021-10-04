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
    $dia = 9;
    $mes = 8;
    $año = 1569;
    $añoActual = date("Y");
    $a = 2021;
    $res = $añoActual - $año;

    if ($res <18){
        echo "Eres menor de edad, no puedes pasar";
    }else if ($res >65){
        echo"Eres demasiado mayor para entrar";
    }
    else{
        echo "Puedes entrar";
    }

    ?>
</body>
</html>