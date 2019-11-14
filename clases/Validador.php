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

    public function validarRegistroUsuario( $usuario){
        
        //Este representa mi array donde voy a ir almacenando los errores, que luego muestro en la vista al usuario.|
        $errores = [];
        $userName = trim($usuario->getUserName());
        if(empty($userName )){
            $errores['userName']="El campo nombre de Usuario no lo puede dejar en blanco..";
        }
        $email = trim($usuario->getEmail());
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errores['email']="Email inválido...";
        }
        $password = trim($usuario->getPassword());
        if(empty($password)){
            $errores['password']="El password no puede ser blanco...";
        }elseif (!is_numeric($password)) {
            $errores['password']="El password debe ser numérico...";
        }elseif (strlen($password)<6) {
            $errores['password']="El password como mínimo debe tener 6 caracteres...";
        }
        $passwordRepeat = trim($usuario->getPasswordRepeat());
        if($password != $passwordRepeat){
            $errores['passwordRepeat']="Las contraseñas deben ser iguales";
        }

        $nombre = trim($usuario->getNombre());
        if(empty($nombre )){
            $errores['nombre']="El campo nombre no lo puede dejar en blanco..";
        }
        
        $apellido = trim($usuario->getApellido());
        if(empty($apellido )){
            $errores['apellido']="El campo apellido no lo puede dejar en blanco..";
        }



        if($usuario->getAvatar()!=null){
            $imagen = $usuario->getAvatar();        
            $nombreImg = $imagen['avatar']['name'];
            $ext = strtolower(pathinfo($nombreImg,PATHINFO_EXTENSION));            
            if($imagen['avatar']['error']!=0){
                $errores['avatar']="Debes subir tu foto...";        
            }elseif ($ext != "jpg" && $ext != "png") {
                $errores['avatar']="Formato inválido";
            }        
        }
        return $errores;   
    }


    public function validacionLogin($usuario){
        $errores=array();
    
        $email = trim($usuario->getEmail());
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores["email"]="Email invalido !!!!!";
        }
        $password= trim($usuario->getPassword());
       
        if(empty($password)){
            $errores["password"]= "El campo password es requerido";
        }elseif (strlen($password)<6) {
            $errores["password"]="La contraseña debe tener como mínimo 6 caracteres";
        }
    
        return $errores;
    }


}