<?php

class UsuarioDao {
    private $server = 'localhost';
    private $usr = "root";
    private $pass = "";
    private $db = "sistema";

    public function conectar(){
        $mysqli = new mysqli($this->server,
                                $this->usr,
                                $this->pass,
                                $this->db);
        return $mysqli;
    }

    public function consulta($csql){
        $conexion = $this->conectar();
        $resultado = $conexion->query($csql);
        return $resultado;
    }

    public function agrega($usuario) {
        $alias = $usuario->getAlias();
        $contraseña = $usuario->getContraseña();
        $nombre = $usuario->getNombre();
        $apellidos = $usuario->getApellidos();
        $activo = $usuario->getActivo();
        $rol = $usuario->getRol();

        $csql = "INSERT INTO usuario (alias, contrasena, nombre, apellidos, activo, rol) 
                            VALUES ('$alias', '$contraseña','$nombre', '$apellidos', $activo, '$rol')";
        
        $conexion = $this->conectar();
        $resultado = $conexion->query($csql);
        return $resultado;
    }
}