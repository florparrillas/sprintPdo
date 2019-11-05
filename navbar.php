<?php
  require_once('controladores/funciones.php');
  require_once('helpers.php');
?>

<header id="cabecera">

<!--Cabecera Arriba-->

<div class="cabecera_arriba color-oscuro">
    <div class="container">
        <div class="row">


            <div class="col-xs-12 col-sm-12">
                <ul class="cabecera-arriba-dere text-right">
                    <li class="cuenta text-center">
                        <a href="faq.php" class="text-center">FAQ</a>
                    </li>
                    <li class="cuenta text-center">
                        <a href="contacto.php" class="text-center">Contacto</a>
                    </li>

                    <?php if(!isset($_SESSION["email"])) :?>
                        <li class="cuenta text-center">
                            <a href="login.php" class="text-center">Logín</a>
                        </li>
                        <li class="cuenta text-center">
                            <a href="registro.php" class="text-center">Registro</a>
                        </li>
                  <?php else :?>
                        
                      <li class="cuenta nav-item dropdown ">
                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hola <?=$_SESSION['nombre'] ;?></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="perfil.php">Mi cuenta</a>
                        <a class="dropdown-item" href="compras.php">Mis compras</a>
                        <a class="dropdown-item" href="preguntas.php">Mis preguntas</a>
                        <a class="dropdown-item" href="favoritos.php">Favoritos</a>
                    </div>
                    </li>
                    <li class="cuenta text-center">
                        <a href="logout.php" class="text-center">Cerrar Sesión</a>
                      </li>

                  <?php endif;?>    
                            
                </ul>
            </div>

        </div>
    </div>
</div>

<!--Cabecera Abajo-->

<div class="cabecera_abajo">
    <div class="container">
        <!--Row Header Abajo -->
        <div class="row">




            <!--Logo-->
            <div class="logo col-12 col-sm-8 d-sm-flex justify-content-end">
                <a href="Index.php" class="logo-link">                    
                    <img src="img/Logo_Green1.png" alt=""> 
                    <!-- #FBF27C -->
                </a>
            </div>
            <!--Carrito Compras-->
            <div class="col-12 col-sm-4 carrito">
                <div id="div-carro" class="btn-group btn-block mtb_40 text-center">

                    <button type="button" class="btn" data-target="#dropdown-carrito"
                        data-toggle="collapse" aria-expanded="true"><span id="carrito-compra">Carrito de
                            Compra</span><span id="carrito-total">items (3)</span> </button>
                </div>
                <div id="dropdown-carrito" class="cart-menu collapse">
                    <ul>
                        <li>
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td class="text-center"><a href="#"><img
                                                    src="img/Producto 1.png" alt="iPod Classic"
                                                    title="iPod Classic"></a></td>
                                        <td class="text-left nombre-producto"><a href="#">MacBook
                                                Pro</a>
                                            <span class="text-left precio">$20.00</span>
                                            <input class="cant-carro" name="product_quantity" min="1"
                                                value="1" type="number">
                                        </td>
                                        <td class="text-center"><a class="close-cart"><i
                                                    class="fa fa-times-circle"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="#"><img src="img/producto2.jpg"
                                                    alt="iPod Classic" title="iPod Classic"></a></td>
                                        <td class="text-left nombre-producto"><a href="#">MacBook
                                                Pro</a>
                                            <span class="text-left precio">$20.00</span>
                                            <input class="cant-carro" name="product_quantity" min="1"
                                                value="1" type="number">
                                        </td>
                                        <td class="text-center"><a class="close-cart"><i
                                                    class="fa fa-times-circle"></i></a></td>
                                    </tr>


                                </tbody>
                            </table>
                        </li>
                        <li>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="text-right"><strong>Sub-Total</strong></td>
                                        <td class="text-right">$2,100.00</td>
                                    </tr>

                                    <tr>
                                        <td class="text-right"><strong>IVA (21%)</strong></td>
                                        <td class="text-right">$20.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>Total</strong></td>
                                        <td class="text-right">$2,122.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                        <li>
                            <form action="#">
                                <input class="btn float-left mt_10" value="View cart" type="submit">
                            </form>
                            <form action="#">
                                <input class="btn float-right mt_10" value="Checkout" type="submit">
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

</div>
<!--Termina Row Header Abajo-->

<!--Empieza El NavBar-->

<nav class="navbar navbar-expand-lg navbar-light nav1">
    <p class="menu">Menu</p>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse div-nav" id="navbarNavDropdown">

        <!-- Links -->

        <ul class="navbar-nav opciones mt-3 mt-lg-0">

                     





        
            <li class="nav-item activo">
                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categorias
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Tegnologia</a>
                    <a class="dropdown-item" href="#">Ropa</a>
                    <a class="dropdown-item" href="#">ETC</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ofertas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Vender</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ayuda</a>
            </li>

        </ul>

        <form class="form-inline d-lg-flex ml-auto mr-lg-5 mr-xl-6 my-4 my-lg-0 barra_busqueda">
            <input class="busqueda form-control form-control-underlined pl-3" type="search"
                placeholder="Search" aria-label="Search">
            <span><button class="btn_bus btn-underlined py-0" type="submit" style="outline: none;"><i
                        id="buscar" class="fas fa-search"></i></button>
        </form>



    </div>
</nav>

</header>