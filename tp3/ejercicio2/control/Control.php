<?php 

class Control{
    private $archivo; 

    public function __construct($archivo){
        $this->archivo=$archivo;

    }// fin constructor

    public function getArchivo(){
        return $this->archivo; 
    }// fin getArchivo

    /**
     * VerificaTxt
     *  @return boolean
     */
    public function verificaTxt(){
        $salida=false;
        $nombre=explode(".",$this->getArchivo()["name"]);
        $extension=strtolower(end($nombre));

        if($extension=="txt" && $this->getArchivo()["size"]<1024*1024*2){
            $salida=true; 
        }// fin if 
    

        return $salida; 

    }// fin function 

    /**
     * Sube el archivo 
     * @return array
     */
    public function subeTxt(){
        // variables
        $respuesta["exito"]=false; 
        $respuesta["mensaje"]="";
        $target_dir='uploads/';
        $target_file=$target_dir.$this->getArchivo()['name'];  // especifica el camino dle archivo a subir 
        $respuesta["path"]=$target_file;
        $extensionTxt=$this->verificaTxt();

        if($extensionTxt){ // significa que verifica el tipo de extension tiene que ser txt
            if(!file_exists($target_dir)){
                mkdir($target_dir,0777);// creo la carpeta si no existe lo crea en la carpeta vista  
    
            }// fin if

            if(copy($this->getArchivo()["tmp_name"],$target_file)){ // cambia el path desde el temporal a donde quiero que se guarde el archivo
                $respuesta["exito"]=true;    
                $respuesta["mensaje"]="el archivo se cargo correctamente"; 
            }// fin if 
            else{
                $respuesta["mensaje"]="No se pudo cargar el archivo";
                
            }// fin else
        

        }// fin if 
        else{
            $respuesta["mensaje"]="Verifique el tamaño o el tipo de archivo a subir (menor a 2Mb y txt)";

        }// fin else

        return $respuesta;
    }

   

}// fin clase 

?>