<?php

//Aquí de entrada activo la session, de no hacerlo no se almacenan las variables de sessión del usuario que se loguea
session_start();

//Este archivo representa el conjunto de funciones que controlaran toda la lógica de nuestra propuesta, y de esa forma no la disponemos en nuestras páginas donde tenemos las vistas al usuario.
function validar($datos,$imagen){
    //Este representa mi array donde voy a ir almacenando los errores, que luego muestro en la vista al usuario.|
    $errores = [];

    $nombre = trim($datos['nombre']);
    if(empty($nombre )){
        $errores['nombre']="El campo nombre no puede quedar en blanco..";
    }

    $apellido = trim($datos['apellido']);
    if(empty($apellido )){
        $errores['apellido']="El campo apellido no puede quedar en blanco..";
    }
    
    
    $email = trim($datos['email']);
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errores['email']="Email inválido...";
    }

    $userName = trim($datos['usuario']);
    if(empty($userName )){
        $errores['usuario']="El campo Usuario no puede quedar en blanco..";
    }

    $password = trim($datos['password']);
    if(empty($password)){
        $errores['password']="El password no puede ser blanco...";
    }elseif (!is_numeric($password)) {
        $errores['password']="El password debe ser numérico...";
    }elseif (strlen($password)<6) {
        $errores['password']="El password como mínimo debe tener 6 caracteres...";
    }
    $passwordRepeat = trim($datos['passwordRepeat']);
    if($password != $passwordRepeat){
        $errores['passwordRepeat']="Las contraseñas deben ser iguales";
    }
    if(isset($_FILES)){
        $nombre = $imagen['avatar']['name'];
        $ext = pathinfo($nombre,PATHINFO_EXTENSION);
        if($imagen['avatar']['error']!=0){
            $errores['avatar']="Debe seleccionar una imagen para su avatar";
    
        }elseif ($ext != "jpg" && $ext != "png") {
            $errores['avatar']="Formato inválido. La imagen debe ser de extensión .jpg o .png";
        }        
    }        
    
    
    return $errores;   
}

//Guardo el Avatar y recupero la ruta en el servidor
function armarAvatar($imagen){
    //recupero nombre y extension
    $nombre = $imagen['avatar']['name'];
    $ext = pathinfo($nombre,PATHINFO_EXTENSION);
    //Este es el archivo fisico
    $archivoOrigen = $imagen['avatar']['tmp_name'];
    //Establesco carpeta destino y complemento un id aleatorio unico para guardarlo
    $archivoDestino = dirname(__DIR__);    
    $archivoDestino = $archivoDestino."/imagenes/";
    $avatar = uniqid();
    $archivoDestino = $archivoDestino.$avatar.".".$ext;
    //Copio al servidor el archivo
    move_uploaded_file($archivoOrigen,$archivoDestino);
    //Devuelvo el nombre con el cual almacene el avatar y su extension
    $avatar = $avatar.".".$ext;
    return $avatar;
}

function armarRegistro($datos, $avatar){
    $usuarios =[
        "nombre" => $datos["nombre"],
        "apellido" => $datos["apellido"],
        "email" => $datos["email"],
        "usuario" => $datos["usuario"],
        "password" => password_hash($datos["password"],PASSWORD_DEFAULT),
        "avatar"=>$avatar,
        "role" => 1,        
    ];
    return $usuarios;
}

function guardarRegistro($registro){
    $archivoJson = json_encode($registro);
    file_put_contents("usuarios.json",$archivoJson.PHP_EOL, FILE_APPEND);
}

function validarLogin($datos){
    $errores=[];
    $email = trim($datos['email']);
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errores['email']="Formato de email inválido";
    }
    $password = trim($datos['password']);
    if(empty($password)){
        $errores['password']="El campo contraseña no puede estar vacío";
    }elseif (!is_numeric($password)) {
        $errores['password']="La contraseña debe ser numérico";
    }elseif (strlen($password)<6) {
        $errores['password']="La contraseña como mínimo debe tener 6 dígitos";
    }
    return $errores;
}


//Busco en el BD si el mail solicitado existe
function buscarPorEmail($email){
    $usuarios = abrirBaseDatos();
    if($usuarios !=null){
        foreach ($usuarios as  $usuario) {
            if($email === $usuario['email']){
                return $usuario;
            }
        }
    }
    return null;
}

//Esta función abre nuestro archivo json y lo prepara para eliminar el último registro en blanco y además, fijese que además genero el array asociativo del mismo. Convierto de json a array asociativo para mas adelante con la funcion "bucarEmail" poder recorrerlo y verificar si el usuario existe o no en mi base de datos, dicha verificación la hago por el email del usuario, ya que es el dato único que tengo del usuario
function abrirBaseDatos(){
    if(file_exists('usuarios.json')){
        $archivoJson = file_get_contents('usuarios.json');        
        $archivoJson = explode(PHP_EOL,$archivoJson);
        
        //Saco el ultimo registro (siempre esta en blanco)
        array_pop($archivoJson);

        //Aquí recorro el array $archivoJson y creo $arrayUsuarios con todos los usuarios
        foreach ($archivoJson as  $usuarios) {
            $arrayUsuarios[]= json_decode($usuarios,true);
        }

        return $arrayUsuarios;
    }else{
        return null;
    }
}

//Aqui creo los las variables de session y de cookie de mi usuario que se está loguendo
function seteoUsuario($usuario,$dato){
    $_SESSION['nombre']=$usuario['nombre'];
    $_SESSION['apellido']=$usuario['apellido'];    
    $_SESSION['email']=$usuario['email'];
    $_SESSION['usuario']=$usuario['usuario'];
    $_SESSION['avatar']=$usuario['avatar'];
    $_SESSION['role']=$usuario['role'];
    //de $_POST recupero si se checkeo el recordar, caso positivo guardo cookie
    if(isset($dato['recordarme'])){
        //duracion de la cookie 1 hora
        setcookie('email',$usuario['email'],time()+3600);
        setcookie('password',$dato['password'],time()+3600);
    }
}
//Con esta función controlo si el usuario se logueo o ya tenemos las cookie en la máquina
function validarUsuario(){
    if(isset($_SESSION['email'])){
        return true;
    }elseif(isset($_COOKIE['email'])){
        $_SESSION['email']=$_COOKIE['email'];
        return true;
    }else{
        return false;
    }
}