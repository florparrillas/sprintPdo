<?php
    require_once('loader.php');
    if($_POST){
        $categoria = new Categoria($_POST['nombre']);
            
        $errores = $validar->Validarcategoria($categoria);
        if (count($errores)==0){
            $consulta->guardarCategoria($bd,'categorias',$categoria);
        }

    }
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registro de categorias</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/master.css">

    </head>
    <body>
        <?php require_once("navbar-2.php"); ?>
        
        <div class="spacer"></div>
        <br>
        <h2 class="text-center">Agregar categoria</h2>
       <div class="row mt-5">
            <div class="col-lg-8 offset-lg-2">
                <?php if(isset($errores)):?>
                    <ul class="alert alert-danger">
                        <?php foreach ($errores as  $error) :?>
                            <li><?=$error ;?></li>
                        <?php endforeach;?>
                    </ul>
                <?php endif; ?>
                <form action="" method="post" enctype="multipart/formdata">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar categoria</button>
                </form>
                <br>
                <a href="categoriaConsulta.php" class="btn btn-danger">Volver</a>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>
</html>
