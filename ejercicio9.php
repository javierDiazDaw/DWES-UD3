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
        $año = 1998;
        $añoActual = date("Y");
        $edad = $añoActual - $año;

        if ($edad<18){
            echo "no puede pasar";
        } elseif ($edad >= 18 && $edad<=65) {
            echo "puede pasar";
        } else {
            echo "demasiado mayor para pasar";
        }
    ?>
    <br>

    <?php
        $año = new DateTime(date("2003-10-5"));
        $añoActual = new DateTime();
        $añosDiferencia = $añoActual->diff($año);
        echo $añosDiferencia->y;
        echo "<p>";
        
        echo "<p>";

        if ($añosDiferencia->y<18){
            echo "no puede pasar";
        } elseif ($añosDiferencia->y >= 18 && $añosDiferencia->y<=65) {
            echo "puede pasar";
        } else {
            echo "demasiado mayor para pasar";
        }
    ?>
</body>
</html>