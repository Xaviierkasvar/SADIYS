<?php
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
  $x=0;
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Vista/Css/bootstrap.min.css">    
    <link rel="stylesheet" href="Vista/Css/font-awesome.min.css"> <!--Iconos--> 
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="Vista/Css/font-awesome.min.css">
    <link rel="stylesheet" href="Vista/Css/Style.css">
    <script type="text/javascript" src="Vista/Script/jquery.js"></script>
    <script src="Vista/Script/script.js" ></script>
    <title>Bienvenido a SADIYS</title>
  </head>
  <body background="Vista/Img/fondogris.jpg">
    <header>
      <div class="container">
        <div class="row">
          <!-- Navigation -->
          <nav id="barra" class="navbar transp col-12 navbar-expand-lg fixed-top">
            <a class="navbar-brand" href="#principal"><img src="Vista/img/logo.jpg" class="logo" alt=""></a>
            <button class="btn-outline-primary btn btn-sm  text-white" data-toggle="modal" data-target="#sesion">Iniciar Sesión</button>
            <button class="navbar-toggler btn-outline-primary" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse" id="menu">
              <ul class="navbar-nav float-right ml-auto">
                <li class="nav-item">
                  <a class="nav-link text-white" href="#enfoque">Enfoque</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#document">Documentación</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#contact">Contacto</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>   
    </header>
    <section id="principal" class="pt-3">
      <!-- modal -->
      <div class="modal fade" id="sesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesión</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <?php include "Vista/Login.php" ?>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
            <div class="col-7 mx-auto text-center pt-4 pt-md-5">
              <div class="text-center text">
                <h1>SADIYS</h1>
                <h4>Sistema Automatizado De Ingreso Y Salida</h4>
              </div>
              <!-- alertas -->
                <?php
                  if ($x==1)
                      echo '<div class="alert alert-danger text-center">Error de usuario y/o contraseña ó el usuario no está registrado en la base de datos</div>';
                  if ($x==2)
                      echo '<div class="alert alert-info text-center">El Usuario ha cerrado sesión correctamente</div>';
                  if ($x==3)
                      echo '<div class="alert alert-danger text-center">Por favor contactar al administrador del sistema o enviar correo javier_castillo_15@hotmail.es</div>';
                ?>
            </div>
            <div class="col-12 d-flex">
              <div class="col-2"></div>
              <div class="col-7 text-center">
                <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active altura">
                      <img class="d-block w-100 img-responsive" src="Vista/Img/fotos/1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item altura">
                      <img class="d-block w-100 img-responsive" src="Vista/Img/fotos/2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item altura">
                      <img class="d-block w-100 img-responsive" src="Vista/Img/fotos/3.jpg" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              <div class="col-3">
                <a class="twitter-timeline" data-width="300" data-height="380" data-theme="dark" href="https://twitter.com/TendenciasTech?ref_src=twsrc%5Etfw">Tweets by TendenciasTecnologicas</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
              </div>
            </div>
        </div>
      </div>
    </section>
    <!-- aplicacion -->
    <section class="mb-5 mbr" id="enfoque">
      <div class="container">
        <div class="row">
          <div class="col-12 d-md-flex">
            <div class="col-md-6">
              <img class="d-block w-100 img-responsive" src="Vista/Img/fotos/4.jpg" alt="">
            </div>
            <div class="col-md-6">
              <p class="text-white bg-dark text-justify">Todas las empresas en los distintos sectores se desarrollan a la mano de las nuevas tecnologías haciéndose más productivas o mejorando su servicio. Para que esté de origen la empresa debe actualizarse en cuanto al manejo y uso de la información por medio de los diferentes equipos “hardware y software” el hardware es la parte tangible de todos los equipos y el software es el medio por donde se manipula el hardware. Con la continua evolución tecnológicas se crean nuevos equipos más eficientes con más capacidades esto genera la creación de nuevos y mejorados softwares los cuales para un correcto manejo y efectiva productividad deben estar actualizándose continuamente este procedimiento se hace mejorando y creando una versión o reemplazándolo por uno mejor. Este último es el que más aplica en este proyecto ya que la información se estaba manipulando por medio de no un software si no un sistema de información a base del procesador de datos de Windows EXCEL. Esto implica un gran uso de RAM innecesario, saturación y congelación del procesador por exceso de datos que en su mayoría innecesario. Adicionalmente este proyecto aumenta el nivel se seguridad para el uso de la información una gran cualidad.</p>
            </div>
          </div>
        </div>
      </div>
    </section >
    <!-- documentación -->
    <section class="mbr" id="document">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex">
            <div class="col-md-6 d-flex pt-5 mt-md-5">
              <div class="col-6">
              <a href="Manual de usuario.pdf" download="Manual de usuario.pdf"><center><img class="d-block w-25 img-responsive" src="Vista/Img/fotos/pdf.png" alt="">Manual de usuario</center></a>
              </div>
              <div class="col-6">
              <a href="Manual Técnico.pdf" download="Manual Técnico.pdf"><center><img class="d-block w-25 img-responsive" src="Vista/Img/fotos/pdf.png" alt="">Manual Tecnico</center></a>
              </div>
            </div>
            <div class="col-md-6">
              <img class="d-block w-100 img-responsive" src="Vista/Img/fotos/5.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </section >
     <!-- Contact -->
    <section class="mbr" id="contact">
      <div class="container">

        <div class="row">

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <h4 class="text-uppercase m-0">Dirección</h4>
                <hr class="my-4">
                <div class="small text-black-50">Barranquila-Colombia</div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <h4 class="text-uppercase m-0">Correo</h4>
                <hr class="my-4">
                <div class="small text-black-50">
                  <a href="#">javier_castillo_15@hotmail.es</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <h4 class="text-uppercase m-0">Telefono</h4>
                <hr class="my-4">
                <div class="small text-black-50">+57 (300) 433-0873</div>
              </div>
            </div>
          </div>
        </div>

        <div class=" d-flex justify-content-center">
          <a href="http://twitter.com" class="mx-2">
            <i class="fa fa-twitter-square fa-5x social" aria-hidden="true"></i>
          </a>
          <a href="http://facebook.com" class="mx-2">
            <i class="fa fa-facebook-official fa-5x social" aria-hidden="true"></i>
          </a>
          <a href="http://instagram.com" class="mx-2">
            <i class="fa fa-instagram fa-5x social" aria-hidden="true"></i>
          </a>
        </div>

      </div>
    </section>
    <footer class="bg-dark small text-center text-white-50">
      <div class="container-fluid">
        Todos los derechos reservados &copy. SADIYS (Sistema Automatizado Ingreso y Salida)  Junio-2018
      </div>
    </footer>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="Vista/js/jquery.slim.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="Vista/js/bootstrap.min.js"></script>
    <script src="Vista/js/scripts.js"></script>
  </body>
  </body>
</html>