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

        <?php require_once("navbar-2.php"); ?>

        <br>
        <h3 class="text-center ">Carga de Producto</h3>
        <?php if(isset($errores)):?>
              <ul class="alert alert-danger">
                <?php foreach ($errores as $value) :?>
                    <li><?=$value;?></li>
                <?php endforeach;?>
              </ul>
        <?php endif;?> 
        
        
        <div class="container">
        <div class="row">

            <div class=" d-none d-md-block  p-3 col-12 col-sm-0 col-md-0 col-lg-2 align-center">
            </div>
            <div class="d-none d-md-block  p-3 col-12 col-sm-0 col-md-4 col-lg-4 align-center">
              <br>
              
            </div>

            <div class="  p-3 col-12 col-sm-12 col-md-8 col-lg-4 align-center">
              <form class="" action="" method="post" enctype="multipart/form-data">

                <div class="form-group">
                  <label for="inputNombre">Nombre del Producto</label>
                  <input type="text" name= "nombre" value= "<?=isset($errores['nombre'])? "":old('nombre') ;?>" class="form-control" id="inputNombre" placeholder="Nombre del Producto">
                </div>

                <div class="form-group">
                  <label for="inputApellido">Tipo de Producto</label>
                  <input type="text" name= "apellido" value= "<?=isset($errores['apellido'])? "":old('apellido') ;?>" class="form-control" id="inputApellido" placeholder="Apellido">
                </div>

                <div class="form-group">
                  <label for="inputEmail">Email</label>
                  <input type="email" name="email" value= "<?=isset($errores['email'])? "":old('email') ;?>" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Ingrese su email">
                </div>

                <div class="form-group">
                  <label for="inputUsuario">Usuario Red Vegana</label>
                  <input type="text" name= "usuario" value= "<?=isset($errores['usuario'])? "":old('usuario') ;?>" class="form-control" id="inputUsuario" placeholder="Ingrese su nombre de Usuario">
                </div>

                <div class="form-group">
                  <label for="inputPassword">Contraseña</label>
                  <input type="password" name ="password" value= "<?=isset($errores['password'])? "":old('password') ;?>" class="form-control" id="inputPassword" placeholder="Ingrese una Contraseña">
                </div>

                <div class="form-group">
                  <label for="inputPasswordRepeat">Repita Contraseña</label>
                  <input type="password" name="passwordRepeat" value= "<?=isset($errores['passwordRepeat'])? "":old('passwordRepeat') ;?>" class="form-control" id="inputPasswordRepeat" placeholder="Repita la Contraseña">
                </div>

                <div class="form-group">
                  <label for="avatar">Avatar</label>
                  <input  name="avatar" type="file" value= "" class="form-control" id="avatar" >
                </div>          

                <button type="submit" class="btn btn-primary botonRegistro" id="botonRegistro" >Registrarse</button>
                <a href="login.php">Ya tengo usuario</a>
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