<?php
class Usuario{
    private $userName;
    private $email;
    private $password;
    private $passwordRepeat;
    private $avatar;
    private $nombre;
    private $apellido;
    private $role;


    public function __construct( $email, $password, $passwordRepeat=null, $userName=null, $nombre = null, $apellido=null, $role=null, $avatar=null){        
        $this->email = $email;
        $this->password = $password;
        $this->passwordRepeat = $passwordRepeat;
        $this->userName = $userName;        
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->role = $role;
        $this->avatar = $avatar;
    }
    public function getUserName(){
        return $this->userName; 
    }
    public function getEmail(){
        return $this->email; 
    }
    public function getPassword(){
        return $this->password; 
    }
    public function getPasswordRepeat(){
        return $this->passwordRepeat; 
    }
    public function getAvatar(){
        return $this->avatar; 
    }
    public function getNombre(){
        return $this->nombre; 
    }
    public function getApellido(){
        return $this->apellido; 
    }
    public function getRole(){
        return $this->role; 
    }



    public function setUserName($userName){
        $this->userName = $userName; 
    }
    public function setEmail($email){
        $this->email = $email; 
    }
    public function setPassword($password){
        $this->password = $password; 
    }
    public function setPaswordRepeat($passwordRepeat){
        $this->passwordRepeat = $passwordRepeat; 
    }
    public function setAvatar($avatar){
        $this->avatar= $avatar;  
    }
    public function setNombre($nombre){
        $this->avatar= $nombre;  
    }
    public function setApellido($apellido){
        $this->avatar= $apellido;  
    }
    public function setRole($role){
        $this->avatar= $role;  
    }


    
}