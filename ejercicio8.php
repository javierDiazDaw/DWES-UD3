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
            <th>
                Elevado a 
            </th>
   
            <th>
                Resultado
            </th>
    </tr>

    <?php

    $num = 2;
    $lim = 7;
    $res;

          for ($i=0; $i < $lim ; $i++) { 
       $res = pow($num,$i);


        if ($i == 4){
        continue;
       }

        if ($i == 6){
        break;
       }
            echo "<tr>
                 <td>
                    $i
                 </td>
                 <td>
                    $res
                </td>
            </tr>";
    }
    /*if ($i == 5){
        break;*/
    ?>
    </table>
</body>
</html>