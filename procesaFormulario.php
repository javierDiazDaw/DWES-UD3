<?php
    //$usuario = strip_tags($_POST["usuario"]);
    //$contrasenya= strip_tags($_POST["contrasenya"]);

    //$usuario = htmlspecialchars($_POST["usuario"]);
    //$contrasenya= htmlspecialchars($_POST["contrasenya"]);


    $usuario= $_POST["usuario"];
    $contrasenya= $_POST["contrasenya"];

    if (empty($usuario)){
        echo "el usuario debe estar releno<br>";
    }
    if(empty($contrasenya)){
            echo "la contraseña debe estar rellena<br>";
    }

    if(!preg_match('/\w{8,}/', $usuario)){

        echo "El usuario debe contener mas de 8 caracteres";

    }
    if(!preg_match('/[A-Z][a-z]{15}[0-9]/', $contrasenya)){

        echo "La contraseña no es correcta";

    }
?>