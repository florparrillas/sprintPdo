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

    <title>E-Comerce</title>
</head>

<body>

    <div class="container_fluid"><!-- Container1 -->

        <div class="container_fluid"><!-- Container2 -->
            <?php require_once("navbar-2.php"); ?>



            <div class="container_fluid carrusel_container"><!-- Carrusel -->
                 <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/carrusel1.jpg" class="d-block w-100 imagen_Carrusel" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/100organic.jpg" class="d-block w-100 imagen_Carrusel" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/Comida2.jpg" class="d-block w-100 imagen_Carrusel" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div><!-- Carrusel -->


            <div class="container container_productos_menu"><!-- Menu1 -->
                <div class="row justify-content-between align-items-center mb-4"> <!-- Menu -->
                    <div class="col-12 col-sm">
                      <ul class="list-inline text-center text-sm-left mb-3 mb-sm-0">
                        <li class="list-inline-item"><a href="#" class="text-dark">Todo los Productos </a></li>
                        <li class="list-inline-item"><a href="#" class="text-muted text-hover-dark">Tipo1</a></li>
                        <li class="list-inline-item"><a href="#" class="text-muted text-hover-dark">Tipo2</a></li>
                        <li class="list-inline-item"><a href="#" class="text-muted text-hover-dark">Tipo3</a></li>
                        <li class="list-inline-item"><a href="#" class="text-muted text-hover-dark">Tipo4</a></li>
                      </ul>
                    </div>
                    <div class="col-12 col-sm-auto text-center"><a href="#" class="btn btn-link px-0">Todo los Productos</a></div>
                  </div>

                        <div class="row">

                             <!-- Productos -->

                            <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                                <div class="producto">
                                    <div class="product-image mb-md-3">
                                        <div class="product-badge badge badge-secondary">Nuevo</div><a class="link_Home" href="detail-1.html">
                                            <div class="product-image">
                                                <img src="img/caja-vegana.png" alt="product" class="img-fluid product-image-front">
                                            </div>
                                            <div class="position-relative">
                                                <h3 class="text-base mb-1">White Tee</h3><span class="text-gray-500 text-sm">$40.00</span></a>
                                            </div>
                                    </div>                                       
                                </div>
                            </div> <!-- Productos -->
                            

                        </div> <!-- row -->
                </div><!-- menu -->
            </div><!-- Menu1 -->



        </div><!-- Container2 -->
    </div><!-- Container1 -->


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
