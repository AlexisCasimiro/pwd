<?php

class Pelicula{
    private $nombre;
    private $actores;
    private $director;
    private $guion;
    private $produccion;
    private $anio;
    private $nacionalidad;
    private $genero;
    private $duracion;
    private $restriccion;
    private $sinopsis;
    private $imagen; 
    
    public function __construct($nombre,$actores,$director,$guion,$produccion,$anio,$nacionalidad,$genero,$duracion,$restriccion,$sinopsis,$imagen){
        $this->nombre=$nombre;
        $this->actores=$actores;
        $this->director=$director;
        $this->guion=$guion;
        $this->produccion=$produccion;
        $this->anio=$anio;
        $this->nacionalidad=$nacionalidad;
        $this->genero=$genero;
        $this->duracion=$duracion;
        $this->restriccion=$restriccion;
        $this->sinopsis=$sinopsis;
        $this->imagen=$imagen;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getActores(){
        return $this->actores;
    }
    public function getDirector(){
        return $this->director;
    }
    public function getGuion(){
        return $this->guion;
    }
    public function getProduccion(){
        return $this->produccion;
    }
    public function getAnio(){
        return $this->anio;
    }
    public function getGenero(){
        return $this->genero;
    }
    public function getDuracion(){
        return $this->duracion;
    }
    public function getNacionalidad(){
        return $this->nacionalidad;
    }
    public function getRestriccion(){
        return $this->restriccion;
    }
    public function getSinopsis(){
        return $this->sinopsis;
    }
    public function getImagen(){
        return $this->imagen; 
    }

    public function __toString(){
    return "<h1>La pelicula introducida es:</h1>"."<br>"."<strong>titiulo:</strong>: ".$this->getNombre().
    "<br>"."<strong>Actores:</strong>: ".$this->getActores()."<br>"."<strong>Director:</strong>: ".$this->getDirector().
    "<br>"."<strong>Guion:</strong>: ".$this->getGuion()."<br>"."<strong>Produccion:</strong>: ".$this->getProduccion().
    "<br>"."<strong>Años:</strong>: ".$this->getAnio()."<br>"."<strong>Genero:</strong>".$this->getGenero().
    "<br>"."<strong>Nacionalidad</strong>: ".$this->getNacionalidad().
    "<br>"."<strong>Duracion:</strong>".$this->getDuracion()."<br>"."<strong>Restriccion:</strong>: ".$this->getRestriccion().
    "<br>"."<strong>Sinopsis:</strong>: ".$this->getSinopsis()."<br>";}

    /**
     * VERIFICAIMAGEN
     *  @return boolean
     */
    public function verificaImagen(){
        $salida=false;
        $nombre=explode(".",$this->getImagen()["name"]);
        $extension =strtolower(end($nombre));
        if($extension=="jpeg" || $extension=="jpg" || $extension=="png"){
            $salida=true; 
        }// fin if 

        return $salida; 

    }// fin function 

    /**
     * cargarImagen
     * @return array
     */
    public function cargarImagen(){
        $respuesta["exito"]=false;
        $respuesta["mensaje"]="";
        $respuesta["path"]="";
        $target_dir='uploads/';
        $target_file=$target_dir.$this->getImagen()['name'];  // especifica el camino dle archivo a subir 
        $respuesta["path"]=$target_file;
        $extensionImagen=$this->verificaImagen(); 

        if($extensionImagen){
            if(!file_exists($target_dir)){
                mkdir($target_dir,0777); 
            }// fin if 

            if(copy($this->getImagen()["tmp_name"],$target_file)){
                $respuesta["exito"]=true;
                $respuesta["mensaje"]="La imagen se subio correctamente";

            }// fin if 
            else{
                $respuesta["mensaje"]="No se pudo cargar la imagen";
            }// fin else


        }// fin if
        else{
            $respuesta["mensaje"]="Verifique que la extension sea jpg - jpge - png"; 

        }// fin else
        
        return $respuesta; 

    }// fin function




}// fin clase Pelicula