<?php
class Producto{
    private $nombre;
    private $categoria_id;
    private $marca_id;
    private $precio;
    private $modelo;
    private $imagen;
    
    public function __construct($nombre, $categoria_id, $marca_id, $precio, $modelo, $imagen){
        $this->nombre = $nombre;
        $this->categoria_id = $categoria_id;
        $this->marca_id = $marca_id;
        $this->precio = $precio;
        $this->modelo = $modelo;
        $this->imagen = $imagen;
        
    }
    //Geters
    public function getNombre(){
        return $this->nombre;    
    }
    public function getCategoria_id(){
        return $this->categoria_id;    
    }
    public function getMarca_id(){
        return $this->marca_id;    
    }
    public function getPrecio(){
        return $this->precio;    
    }
    public function getModelo(){
        return $this->modelo;    
    }
    public function getImagen(){
        return $this->imagen;    
    }

    //Seters
    public function setNomre($nombre){
        $this->nombre = $nombre;
    }
    public function setCategoria_id($categoria_id){
        $this->categoria_id = $categoria_id;
    }
    public function setMarca_id($marca_id){
        $this->marca_id = $marca_id;
    }
    public function setPrecio($precio){
        $this->precio = $precio;
    }
    public function setModelo ($modelo){
        $this->modelo = $modelo;
    }
    public function setImagen($imagen){
        $this->imagen = $imagen;
    }


}