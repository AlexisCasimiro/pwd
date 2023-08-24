<?php

class Usuario{
    public function verificarUsuario($usuarios){
        $nameUser=$_POST["usuario"];
        $clave=$_POST["contrasenia"];
        $resp=false;
        foreach($usuarios as $unUsuario => $contrasenia){
            if($unUsuario==$nameUser && $contrasenia==$clave){
                $resp=true;
            }
        }
        return $resp;
    }
}