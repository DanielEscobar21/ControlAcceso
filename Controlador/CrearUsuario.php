<?php

try{
    include ("../Modelo/Usuario.php");
    include ("../Persistencia/UsuarioDao.php");

    $alias = $_POST['alias'];
    $contraseña = $_POST['contraseña'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $activo = $_POST['activo'];
    $rol = $_POST['rol'];

    $usuario = new Usuario($alias, $contraseña, $nombre, $apellidos, $activo, $rol);

    $usuarioDao = new UsuarioDao();

    $usuarioDao->agrega($usuario);

    require_once("../Vista/login.html");
} catch (Exception $e) {
    echo '<pre>';
    echo $e;
    echo '</pre>';
}
