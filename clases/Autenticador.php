<?php
class Autenticador{
    static public function iniciarSession(){
        if(!isset($_SESSION)){
            session_start();
        }
    }
    static public function  verificarPassword($password,$passwordHash){
        return password_verify($password,$passwordHash);
    }
    
    static public function seteoSesion($user){            

        $_SESSION["nombre"]= $user["Nombre"];
        $_SESSION["apellido"]= $user["Apellido"];
        $_SESSION["usuario"]= $user["nombreUsuario"];        
        $_SESSION["email"] = $user["email"];
        $_SESSION["role"]= $user["role"];
        $_SESSION["avatar"]= $user["avatar"];
    }

    static public function seteoCookie($user){
            setcookie("email",$user["email"],time()+3600);
            setcookie("password",$user["password"],time()+3600);
    }
    static public function validarUsuario(){
        if(isset($_SESSION["email"])){
            return true;
        }elseif (isset($_COOKIE["email"])) {
            $_SESSION["email"]=$_COOKIE["email"];
            return true;
        }else{
            return false;
        }
    }
}