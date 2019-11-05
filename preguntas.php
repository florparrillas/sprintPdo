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

    <title>Preguntas</title>
</head>

<body>

    <div class="container_fluid">

        <div class="container_fluid">
        <?php require_once("navbar-2.php"); ?>




            <!--Menu lateral izquierdo-->
            <div class=" row cuerpo-perfil ">
                <div class="contenedor-lateral d-none d-md-block  p-3 col-12  col-sm-0 col-md-3 col-lg-3 align-center">

                    <div class="titulo-bienvenida">
                        <p> <img class="imagen-perfil" src="img/girl.png" alt="">Hola Florencia!!</p> 
                    </div> 
                    <div class="usuario-compra-vende">Soy Comprador</div>
                    <br> 
                    <div>
                        <ul>
                            <li><a href="perfil.php">Mi cuenta</a></li>
                            <li><a href="compras.php">Mis compras</a></li>
                            <li><a href="preguntas.php">Mis preguntas</a></li>
                            <li><a href="favoritos.php">Favoritos</a></li>
                        </ul>
                    </div>
                </div>

                                 
            


                <div class="contenedor-central p-3 col-12 col-sm-12 col-md-9 col-lg-9 align-center">
                        <div>
                                <h2 >Mis preguntas</h2>
                                <br><br>
                                <!--Pregunta 1-->
                                <div class="pregunta-producto">
                                    <div class="contenedor-imagen">
                                          <img class="imagen-producto-compra"  src="img/pizza.png" alt="">
                                    </div>
                                        
                                    <div class="despcripcion-producto">
                                            <a href="jugo-fruta.html"> Jugo de Frutas Just</a> <br>
                                            $200.- .
                                    </div>
                                    <div class="foto-tienda-compras">
                                           <img src="img/cat1.png" alt=""> 
                                    </div>

                                    <div class="vendedor-producto-compras">
                                        <h5> Vendedor:</h5> 
                                        <a href="tienda-nala.html"> ♥ Tienda Nala</a> <br>
                                    </div>
                                    <div class="detalle-producto"> 
                                        <input class="btn1" type="button" value="Ver pregunta">
                                    </div>
                                
                                </div>
                              

                            <!--Compra 2-->
                                <div class="pregunta-producto-2">
                                        <div class="contenedor-imagen">
                                             <img class="imagen-producto-compra"  src="img/pizza.png" alt="">
                                        </div>
                                            
                                        <div class="despcripcion-producto">
                                                <a href="jugo-fruta.html"> Jugo de Frutas Just</a> <br>
                                                $200.- 
                                        </div>
                                        <div class="foto-tienda-compras">
                                               <img src="img/cat1.png" alt=""> 
                                        </div>
    
                                        <div class="vendedor-producto-compras">
                                            <h5> Vendedor:</h5> 
                                            <a href="tienda-nala.html"> ♥ Tienda Nala</a> <br>
                                        </div>
                                        <div class="detalle-producto"> 
                                            <input class="btn1" type="button" value="Ver pregunta">
                                        </div>
                                    
                                    </div>
                                     <!--Compra 3-->
                                <div class="pregunta-producto-2">
                                        <div class="contenedor-imagen">
                                             <img class="imagen-producto-compra"  src="img/pizza.png" alt="">
                                        </div>
                                            
                                        <div class="despcripcion-producto">
                                                <a href="jugo-fruta.html"> Jugo de Frutas Just</a> <br>
                                                $200.- 
                                        </div>
                                        <div class="foto-tienda-compras">
                                               <img src="img/cat1.png" alt=""> 
                                        </div>
    
                                        <div class="vendedor-producto-compras">
                                            <h5> Vendedor:</h5> 
                                            <a href="tienda-nala.html"> ♥ Tienda Nala</a> <br>
                                        </div>
                                        <div class="detalle-producto"> 
                                            <input class="btn1" type="button" value="Ver pregunta">
                                        </div>
                                    
                                    </div>
                                    <div  class="paginacion">
                                        <a class="pagina-numero" href="pagina-uno.html">1</a> 
                                        <a class="pagina-numero" href="pagina-uno.html">2</a>
                                        <a class="pagina-numero" href="pagina-uno.html">3</a>
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