<?php
    class verNumero{
        private $numero; 

        public function __construct($nro)
        {
            $this->numero=$nro;
        }

        public function getNro(){
            return $this->numero; 
        }// fin function 

        /**
         * verificaSigno
         * @return string
         */
        public function verificaSigno(){
            $salida=""; 

            if($this->getNro()<0){
                $salida="El numero es negativo";

            }// fin if 
            elseif($this->getNro()>0){
                $salida="El numero es positivo"; 
            }// fin elseif
            else{
                $salida="El numero es cero";
            }// fin else

            return $salida; 

        }// fin function 


    }// fin clase
?>