<?php
  require_once('controladores/funciones.php');
  require_once('helpers.php');

  if($_POST){
    $errores = validarLogin($_POST);
    if(count($errores)==0){
      $usuario = buscarPorEmail($_POST['email']);
      if($usuario==null){
        $errores['email']="Usuario no encontrado";
      }else{
        if(password_verify($_POST['password'],$usuario['password'])===false){
          $errores['password']="Datos inválidos...";
        }else{
          seteoUsuario($usuario,$_POST);
          if(validarUsuario()){            
            header('location:perfil.php');
            exit;
          }else{
            header('location:login.php');
            exit;
          }
        }
      }
    }
  }

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

    <title>Login de Usuario</title>
  </head>
  <body>
  <div class="container-fluid">

    <?php require_once("navbar-2.php"); ?>
    <div class="container">
    <div class="row">

        <div class=" d-none d-md-block  p-3 col-12 col-sm-0 col-md-0 col-lg-0 align-center">
        </div>
        <div class=" d-none d-md-block  p-3 col-12 col-sm-0 col-md-4 col-lg-4 align-center">
          <img src="img/loginSide.jpg"  class = "img-fluid" alt="cake">
        </div>

        <div class="  p-3 col-12 col-sm-12 col-md-8 col-lg-4 align-center">
            <?php if(isset($errores)):?>
              <ul class="alert alert-danger">
                <?php foreach ($errores as $value) :?>
                    <li><?=$value;?></li>
                <?php endforeach;?>
              </ul>
            <?php endif;?> 
            <form class="" action="" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="text" name= "email" class="form-control" id="inputEmailLogin" placeholder="Ingrese su e-mail">
              </div>
              <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name ="password" class="form-control" id="inputPasswordLogin" placeholder="Ingrese su Contraseña">
              </div>
              <div class="form-group form-check">
                  <input  class="text-left" name="recordarme" type="checkbox" value= "recordarme" class="form-control " id="recordarme" >
                  <label for="recordarme">Recordarme y permanecer conectado</label>
                
              </div>
              <button type="submit" class="btn btn-primary" id="botonRegistro">Submit</button>
              <a href="registro.php">Crear Usuario</a>
            </form>
        </div>




    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </div>
  </body>
</html>
