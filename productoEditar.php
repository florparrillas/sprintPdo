<?php
    require_once('loader.php');
   if($_POST){
        $producto = new Producto($_POST['nombre'], $_POST['categoria_id'], $_POST['marca_id'], $_POST['precio'], $_POST['modelo'], $_POST['imagen']);
        $errores = $validar->Validarproducto($producto);
        if (count($errores)==0){            
            $consulta->actualizarProducto($bd,'productos',$producto, $_GET['id']);
        }
    }
    $categorias = $consulta->listarTablaSimple($bd,'categorias');
    $marcas = $consulta->listarTablaSimple($bd,'marcas');        
    $producto = $consulta->detalleProducto($bd, 'productos', 'categorias','marcas',$_GET['id']);
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Edición de un producto</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/master.css">

    </head>
    <body>
        <?php require_once("navbar-2.php"); ?>
        
        <div class="spacer"></div>
        <br>
        <h2 class="text-center">Editar producto</h2>
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
                        <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $producto['nombre']; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="categorias">Categoria del producto</label>
                        <select class="form-control" name="categoria_id" id="categorias">                            
                            <option value="<?=$producto['categoria_id']; ?>"><?= $producto['cate']; ?></option>
                            <?php foreach ($categorias as $categoria) :?>
                                <?php if($categoria['id']!=$producto['categoria_id']): ?>
                                    <option value="<?=$categoria['id'] ;?>"><?=$categoria['nombre'] ;?></option>
                                <?php endif; ?>
                            <?php endforeach;?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="marcas">Marca</label>
                        <select class="form-control" name="marca_id" id="marcas">
                            <option value="<?=$producto['marca_id']; ?>"><?= $producto['marc']; ?></option>
                            <?php foreach ($marcas as $marca) :?>
                                <?php if($marca['id']!=$producto['marca_id']): ?>
                                    <option value="<?=$marca['id'] ;?>"><?=$marca['nombre'] ;?></option>
                                <?php endif; ?>
                            <?php endforeach;?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" min="0.00" max="999999999.99" step="0.01" class="form-control" name="precio" id="precio" value="<?= $producto['precio']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="modelo">Modelo</label>
                        <input type="text" class="form-control" name="modelo" id="modelo" value="<?= $producto['modelo']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="imagen">Imagen</label>
                        <input type="text" class="form-control" name="imagen" id="imagen" value="<?= $producto['imagen']; ?>">
                    </div>


                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>

                </form>
                <br>
                <a href="productoConsulta.php" class="btn btn-danger">Volver</a>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>
</html>
