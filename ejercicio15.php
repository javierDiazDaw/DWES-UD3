<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table border = "1">
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>ID</th>
        </tr>
    <?php

     $producto = array();
     $producto[] = array("Nombre" =>"Altavoz", "Precio" => "15 €", "Stock" => "Si", "ID" => "1234");
     $producto[] = array("Nombre" =>"Mesa", "Precio" => "100 €", "Stock" => "Si", "ID" => "4444");
     $producto[] = array("Nombre" =>"Lavadora", "Precio" => "400 €", "Stock" => "No", "ID" => "8888");

     foreach ($producto as $valor){
       echo "<tr>";
            echo "<td>";
            echo $valor["Nombre"];
            echo "</td>";
            echo "<td>";
            echo $valor["Precio"];
            echo "</td>";
            echo "<td>";
            echo $valor["Stock"];
            echo "</td>";
            echo "<td>";
            echo $valor["ID"];
            echo "</td>";
        echo"</tr>";
     }
     
        ?>
        
    </table>
        

</body>
</html>