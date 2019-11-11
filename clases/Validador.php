<?php
class Validador{
    public function ValidarMarca($marca){
        $errores = [];                    
        $nombre = trim($marca->getNombre());
        if(empty($nombre)){
            $errores['nombre'] = "Campo requerido";
        }
        return $errores;
    }

    public function ValidarCategoria($categoria){
        $errores = [];                    
        $nombre = trim($categoria->getNombre());
        if(empty($nombre)){
            $errores['nombre'] = "Campo requerido";
        }
        return $errores;
    }
    
    public function ValidarProducto($producto){
        $errores = [];                    
        $nombre = trim($producto->getNombre());
        if(empty($nombre)){
            $errores['nombre'] = "Debe ingresar el nombre";
        }
        $precio = trim($producto->getPrecio());
        if(empty($precio)){
            $errores['precio'] = "Debe ingresar el precio";
        }
        $modelo = trim($producto->getModelo());
        if(empty($modelo)){
            $errores['modelo'] = "Debe ingresar el modelo";
        }


        return $errores;
    }

}