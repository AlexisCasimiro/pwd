
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
     * @return array
     */
    public function validacionFile(){
        $resultado["tamanio"]="";
        $resultado["tipo"]="";

        if($this->getArchivo()["error"]<=0){
             // COMPROBACION DEL TAMAÑO DEL ARCHIVO 
            $maxTam=1024*1024*2; // conversion a byte
            if($this->getArchivo()["size"]>$maxTam){
                $resultado["tamanio"]="El tamaño del archivo supera los 2Mb";
                    //echo("El archico supera el tamaño especificado <br>");
            }// fin if 

            // VERIFICACION DE LA EXTENSION DEL ARCHIVO
            $archivoCompleto=explode(".",$this->getArchivo()["name"]); // divide los string en 2, por un punto
            $extension=strtolower(end($archivoCompleto));// recupera la ultima porcion del string. En este caso tensdrá la extension
            if($extension!="docx" && $extension!="pdf"){
                $resultado["tipo"]="El archivo no es ni pdf ni docx";
              //echo("El archivo no tiene extension pdf o doc <br>");

            }// fin if 

        }// fin if 
        else{
            $resultado["tamanio"]="el archivo esta vacio";
        }// fin else
       

    return $resultado; 

    }// fin function

    /**
     * @return array
     */
    public function cargarArchivo(){
        $target_dir='uploads/';//$_SERVER['DOCUMENT_ROOT'].'/'.'uploads/';  // especifica el directorio donde se va a poner el archivo
        $target_file=$target_dir.$this->getArchivo()['name'];  // especifica el camino dle archivo a subir 
        $datosArchivo=$this->getArchivo();
       
        $datosArchivo["path"]=$target_file;
        $datosArchivo["exito"]=false; // me indica si se puedo cargar o no el archivo

        $salida=$this->validacionFile();
        if($salida["tamanio"]=="" && $salida["tipo"]==""){ // significa que verifica el tipo de extension y el tamaño
            if(!file_exists($target_dir)){
                mkdir($target_dir,0777);// creo la carpeta si no existe 
    
            }// fin if

            if(copy($this->getArchivo()["tmp_name"],$target_file)){ // cambia el path desde el temporal a donde quiero que se guarde el archivo
                $datosArchivo["mensaje"]="El archivo se cargo corerctamente";
                $datosArchivo["exito"]=true;    
            }// fin if 
            else{
                $datosArchivo["mensaje"]="No se pudo cargar el archivo";
                
            }// fin else
        

        }// fin if 
        else{
            $datosArchivo["mensaje"]="Verifique el tamaño o el tipo de archivo a subir (menor a 2Mb y pdf o docx)";

        }// fin else

        return $datosArchivo;
    }// fin function 

}// fin clase control



?>