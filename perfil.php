<?php
  require_once('controladores/funciones.php');
  require_once('helpers.php');
  //Esto lo incorporé, ya que por medio de esto logro hacer que si un usuario no está logueado en mi sistema y quiere entrar colocando la URL en el browser yo no se lo permito, hago que necesariamente se debe loguear
  if(!isset($_SESSION["email"])) {
    navbar("location:login.php");
    exit;
}

?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Font Awsone-->

    <script src="https://kit.fontawesome.com/66735e3f01.js"></script>


    <!-- Estilos Propios -->

  
    <link rel="stylesheet" href="css/master.css">

    <title>Mi Cuenta</title>
</head>

<body>

    <div class="container_fluid">

        <div class="container_fluid">
            <?php require_once("navbar-2.php"); ?>




        <!--Menu lateral izquierdo-->
            <div class="row cuerpo-perfil"  >
            <div class="  contenedor-lateral d-none d-md-block  p-3 col-12  col-sm-0 col-md-3 col-lg-3 align-center"  >

                    <div class="titulo-bienvenida">
                        <p> <img class="imagen-perfil" src="img/girl.png" alt="">Hola <?=$_SESSION['nombre'] ;?></p> 
                    </div> 
                    <div class="usuario-compra-vende">Soy Comprador</div>
                    <br> 
                    <div>
                            <ul class="lista-cuenta">
                                    <li><a href="perfil.php">Mi cuenta</a></li>
                                    <li><a href="compras.php">Mis compras</a></li>
                                    <li><a href="preguntas.php">Mis preguntas</a></li>
                                    <li><a href="favoritos.php">Favoritos</a></li>
                                </ul>
                    </div>
                        </div>
                <div class=" contenedor-central p-3 col-12 col-sm-12 col-md-9 col-lg-9 align-center">
                    <div  >
                        <div  >
                        <h2  >Mi cuenta</h2>
                        </div>
                            
                            <br>
                            <div  class=" contenedor-informacion">
                                    <div class="linea">
                                            <h4 class="titulo-contenedor">Informacion personal</h4> <a class="editar" href="editar-informacion-cuenta.php">Editar</a>
                                    </div>
                                     <br>
                                     <div class="contenido-contenedor">
                                            <p class="informacion-mi-cuenta"></p> <img class="icono-cuenta" src="img/icon-usuario.png" alt=""><?=$_SESSION['nombre'] ;?></p>
                                            <p class="informacion-mi-cuenta"></p> <img class="icono-cuenta" src="img/icon-usuario.png" alt=""><?=$_SESSION['apellido'] ;?></p>
                                            <p class="informacion-mi-cuenta"> <img class="icono-cuenta" src="img/icon-email.png" alt=""><?=$_SESSION['email'] ;?></p>
                                            <p class="informacion-mi-cuenta"> <img class="icono-cuenta" src="img/icon-email.png" alt=""><?=$_SESSION['usuario'] ;?></p>
                                            <p class="informacion-mi-cuenta"> <img class="icono-cuenta" src="img/icon-telefono.png" alt=""> 4765-6541</p>
                                            <p class="informacion-mi-cuenta"> <img class="icono-cuenta" src="img/icon-ciudad.png" alt="">Calle 123 - Buenos Aires - Argentina</p>
                                            <p class="informacion-mi-cuenta"> <img class="icono-cuenta" src="img/icon-idioma.png" alt="">Español</p>
                                     </div>
                            </div>
                                    <br>
                            <div class="contenedor-pass"> 
                                    <div class="linea">
                                             <h4 class="titulo-contenedor">Contraseña</h4> <a class="editar" href="cambiar-pass.php">Editar</a>
                                    </div>
                                             <br>
                                    <div class="contenido-contenedor">
                                            <p class="contrasenia-contenedor">***********</p>
                                    </div>
                                    </div>
                            </div>
                        
                </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>