<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

<?php
    //$usuario = strip_tags($_POST["usuario"]);
    //$contrasenya= strip_tags($_POST["contrasenya"]);

    //$usuario = htmlspecialchars($_POST["usuario"]);
    //$contrasenya= htmlspecialchars($_POST["contrasenya"]);


    $desUsuario;
    $desContrasenya;    

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $usuario= $_POST["usuario"];
        $contrasenya= $_POST["contrasenya"];

        if (empty($usuario)){
            echo "el usuario debe estar relleno<br>";
        }
        if(empty($contrasenya)){
                echo "la contraseña debe estar rellena<br>";
        }
    
        if(!preg_match('/\w{8,}/', $usuario)){
    
            $desUsuario = "El usuario debe contener mas de 8 caracteres";
    
        }
        if(!preg_match('/[A-Z][a-z]{15}[0-9]/', $contrasenya)){
    
            $desContrasenya = "La contraseña no es correcta";
    
        }
    }


?>
    <h1>Formulario Actividad Aula</h1>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <p>
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario"/>
            <span style="color:red">*</span>    
        </p>
        <p>
            <label for="contrasenya">Contraseña</label> <!--para cambiar contraseña-->
            <input type="password" name="contrasenya"/>
            <span style="color:red">*</span>
        </p>
        <p>
<input type="submit" name="enviar" value="Aceptar"/>
<input type="reset" name="cancelar" value="Cancelar"/>
  </p>
    </form>



</body>
</html>
