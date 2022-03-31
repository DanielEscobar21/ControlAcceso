<?php

class Usuario {
    private $id;
    private $alias;
    private $contraseña;
    private $nombre;
    private $apellidos;
    private $activo;
    private $rol;

    public function __construct($alias, $contraseña, $nombre, $apellidos, $activo, $rol){
        $this -> alias = $alias;
        $this -> contraseña = $contraseña;
        $this -> nombre = $nombre;
        $this -> apellidos = $apellidos;
        $this -> activo = $activo;
        $this -> rol = $rol;
    }

    public function setAlias($alias){
        $this->alias = $alias;
    }

    public function setContraseña($contraseña){
        $this->contraseña = $contraseña;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }

    public function setActivo($activo){
        $this->activo = $activo;
    }

    public function setRol($rol){
        $this->rol = $rol;
    }
    

    //-- Get
    public function getId(){
        return $this->id;
    }

    public function getAlias(){
        return $this->alias;
    }

    public function getContraseña(){
        return $this->contraseña;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function getActivo(){
        return $this->activo;
    }

    public function getRol(){
        return $this->rol;
    }
}