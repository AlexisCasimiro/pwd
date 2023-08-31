<?php
class Entrada {
    public function darPrecio(){
        $edad=$_GET['edad'];
        $estudiante=$_GET['estudia'];
        $precio=0;
        if($estudiante=="si" && $edad<12){
            $precio=160;
        }elseif($estudiante=="si" && $edad>=12){
            $precio=180;
        }else{
            $precio=300;
        }
        return $precio;
    }
}