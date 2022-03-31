<?php

include ("../Persistencia/UsuarioDao.php");

$alias = $_POST['alias'];
$contraseña = $_POST['contraseña'];

$usuarioDao = new UsuarioDao();

$errores = [];

$csql = "select * from usuario where alias = '$alias'";
$resultado = $usuarioDao->consulta($csql);

if($resultado->num_rows){
    $login = mysqli_fetch_assoc($resultado);
        
    if($login['contrasena'] == $contraseña){
        session_start();

        if($login['rol'] == 'administrador'){
            require_once("../Vista/admin.html");
        } else {
            require_once("../Vista/usuario.html");
        }

    } else {
        $errores[] = "La contraseña es incorrecta";
    }
} else {
    $errores[] = "El usuario no existe";
}    

foreach ($errores as $error) :
    echo $error;
endforeach;
