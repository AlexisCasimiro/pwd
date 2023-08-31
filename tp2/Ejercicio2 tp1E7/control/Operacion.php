<?php

class Operacion{
    public function resolucion(){
        $resultado=0;
        $operacion=$_GET["operacion"];
        $operando1=$_GET["operando1"];
        $operando2=$_GET["operando2"];
        if($operacion=="suma"){
            $resultado=$operando1+$operando2;
        }elseif($operacion=="resta"){
            $resultado=$operando1-$operando2;
        }elseif($operacion=="multiplicacion"){
            $resultado=$operando1*$operando2;
        }
        return $resultado;
    }
}