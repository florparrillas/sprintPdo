<?php
  //Esto debo hacerlo, para lograr que este programa logré visualizar las funciones creadas y de esa forma poder usarlas cuando desee.
  require_once("controladores/funciones.php");
  require_once("helpers.php");
  

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">


    <title>Registro de nuevos usuarios</title>
  </head>
  <body>
    <div class="container-fluid">

        <?php require_once("navbar.php"); ?>

        
        
        <div class="container">
        <div class="row">
            
            <div class="d-none d-md-block  p-3 col-12 col-sm-0 col-md-7 col-lg-7 align-center">
              <h4>¿DÓNDE NOS ENCUENTRA?</h2>
              <br>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2161.8191779552767!2d-58.443827430223614!3d-34.548944726549415!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfb39818e7624ac76!2sDigital%20House!5e0!3m2!1ses-419!2sar!4v1568849065488!5m2!1ses-419!2sar" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>

            <div class="  p-3 col-12 col-sm-12 col-md-5 col-lg-5 align-center">
              
              <h4 class="text-center ">Tiene alguna duda? Contactenos!</h4>
              <br>
              <form class="" action="" method="post">

                <div class="form-group">
                  <label for="inputNombre">Nombre</label>
                  <input type="text" name= "nombre"  class="form-control" id="inputNombre" placeholder="Nombre">
                </div>


                <div class="form-group">
                  <label for="inputEmail">Email</label>
                  <input type="email" name="email" value= "<?=isset($errores['email'])? "":old('email') ;?>" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Ingrese su email">
                </div>

                <div class="form-group">
                  <label for="inputUsuario">Mensaje</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>


                <button type="submit" class="btn btn-primary botonRegistro" id="botonRegistro" >Enviar Consulta</button>
                
              </form>
            </div>
          </div>

          </div>


    
    
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
