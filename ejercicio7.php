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

    $arr_server = array ($_SERVER['SERVER_NAME'],
    $_SERVER['PHP_SELF'],
    $_SERVER['SERVER_ADDR'],
    $_SERVER['DOCUMENT_ROOT'],
    $_SERVER['REMOTE_ADDR'],
    $_SERVER['REQUEST_METHOD']
 );

 foreach($_SERVER as $i){;
    echo $i , "<br>";
 }

 echo "<br>";

 foreach($_SERVER as $clave => $valor){
     echo $clave, ": ", $valor, "<br>";
     
 }

    ?>
</body>
</html>