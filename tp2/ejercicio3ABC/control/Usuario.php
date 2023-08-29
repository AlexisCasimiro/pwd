<?php

class Usuario{
    private $nombre;
    private $contrasenia;
    public function __construct($nom, $con){
        $this->nombre = $nom;
        $this->contrasenia = $con;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getContrasenia(){
        return $this->contrasenia;
    }
    public function setNombre($var){
        $this->nombre = $var;
    }
    public function setContrasenia($var){
        $this->contrasenia = $var;
    }

    public function verificarUsuario($usuarios, $obj){
        $user=$obj->getNombre();
        $clave=$obj->getContrasenia();
        $resp=false;
        foreach($usuarios as $objUsuario){
            if($objUsuario->getNombre() == $user && $objUsuario->getContrasenia() == $clave){
                $resp=true;
            }
        }
        return $resp;
    }
}