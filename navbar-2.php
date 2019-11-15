<?php
  require_once('controladores/funciones.php');
  require_once('helpers.php');
?>

<header id="cabecera">

<!--Cabecera Arriba-->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">


      
      <li class="nav-item">
        <a class="nav-link" href="faq.php">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contacto.php">Contacto</a>
      </li>

      <?php if(!isset($_SESSION["email"])) :?>
        <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="registro.php">Registro</a>
        </li>      
      <?php else :?>

        <li class="nav-item">
             <a class="nav-link" href="productoConsulta.php">CRUD_Productos</a>
        </li>


    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Hola <?=$_SESSION['nombre'] ;?>
        </a>
        
        <div class="dropdown-menu  bg-light" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Mi cuenta</a>
          <a class="dropdown-item" href="#">Mis compras</a>
          <a class="dropdown-item" href="#">Preguntas</a>
          <a class="dropdown-item" href="#">Favoritos</a>
          <a class="dropdown-item" href="productoConsulta.php"></a>          
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Cerrar sesion</a>
        </div>
      </li>
      
      
      <?php endif;?>
    </ul>
    
  </div>

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
                <div class="dropdown-menu  bg-light" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Alimentos</a>
          <a class="dropdown-item" href="#">Belleza</a>
          <a class="dropdown-item" href="#">Moda</a>
          <a class="dropdown-item" href="#">Productos Organicos</a>
         
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



  
</nav>
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
            <div class="col-8 col-sm-4 carrito">
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



</header>