<?php include DIR . 'view/parcial/head.php'; ?>

<!-- Navegación -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- icono mostrado en modo móvil-->
    <div class="navbar-header page-scroll">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#click-movil">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!--      titulo del nav-->
      <a style="font-family: snap ITC" class="navbar-brand page-scroll" href="#page-top">Guadalajara de Buga</a>
    </div>

    <!-- Contenido del navbar -->
    <div class="collapse navbar-collapse" id="click-movil">
      <ul class="nav navbar-nav navbar-right">
        <!--        buscador-->
        <li class="btn-search active">
          <form action="" class="nav navbar-form" role="search">
            <div>
              <input type="search" class="form-control" placeholder="Buscar...">
              <span  class="fa fa-search visible-lg-inline-block"></span>   
            </div>
          </form>
        </li>
        <li>
          <a class="page-scroll" href="<?php echo URL ?>index.php/portal/categoria/categorias">Sitios</a>
        </li>

        <li>
          <a class="page-scroll" href="<?php echo URL ?>index.php/categoria/categorias">Categorias</a>
        </li>

        <li >
          <a style="color: chartreuse" href="#" ><b>Bienvenido Usuario</b> </a>

        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Carrusel -->
<div class="carrusel">
  <div class="col-md-12">
    <div id="carousel-1" class="carousel slide" data-ride="carousel">
      <!--        indicadores-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-1" data-slide-to="1" ></li>
        <li data-target="#carousel-1" data-slide-to="2"></li>
      </ol>
      <!--        contenedor de los slides-->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img id="banner" src='<?php echo URL ?>pictures/fondo1.jpg' class="img-responsive">
          <div class="carousel-caption">
            <h3> este es mi numero 1</h3>
          </div>
        </div>

        <div class="item">
          <img id="banner" src='<?php echo URL ?>pictures/fondo2.jpg' class="img-responsive">
          <div class="carousel-caption">
            <h3> este es mi numero 2</h3>
          </div>
        </div>


        <div class="item">
          <img id="banner" src='<?php echo URL ?>pictures/fondo3.jpg' class="img-responsive">
          <div class="carousel-caption">
            <h3> este es mi numero 3</h3>
          </div>
        </div>
      </div>

    </div>

    <!--      controles-->
    <a href="#carousel-1" class="left carousel-control" role="button" data-slide="prev">
      <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a href="#carousel-1" class="right carousel-control" role="button" data-slide="next">
      <span aria-hidden="true"><i class="fa fa-angle-right" ></i></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>
</div>


<!-- Sección Eventos-->
<section id="evento" class="bg-light-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 style="font-family: fantasy"class="section-heading">Categorias</h2>
        <h3 style="font-size: 30px" class="section-subheading text-muted">Todas Las Categorias</h3>
      </div>
    </div>


    <div class="row">

      <!-- eventos Modal 1 -->
      <div class="col-md-4 col-sm-6 evento-item">
        <a href="<?php echo URL ?>index.php/categoria/cultura" class="evento-link" data-toggle="modal">
          <div class="evento-hover">
            <div class="evento-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img src="<?php echo URL ?>pictures/teatro.jpg" class="img-responsive" alt="">
        </a>
        <div class="evento-caption">
          <h4>Cultura y Tradicion</h4>
          <p class="text-muted">Descripcion Descripcion  Descripcion  Descripcion  Descripcion </p>
        </div>
      </div>

      <!-- eventos Modal 2 -->
      <div class="col-md-4 col-sm-6 evento-item">
        <a href="#eventoModal2" class="evento-link" data-toggle="modal">
          <div class="evento-hover">
            <div class="evento-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img src="<?php echo URL ?>pictures/catDeporte.jpg" class="img-responsive" alt="">
        </a>
        <div class="evento-caption">
          <h4>Deporte</h4>
          <p class="text-muted">Descripcion Descripcion Descripcion Descripcion Descripcion </p>
        </div>
      </div>



      <!-- eventos Modal 5 -->
      <div class="col-md-4 col-sm-6 evento-item">
        <a href="#eventoModal5" class="evento-link" data-toggle="modal">
          <div class="evento-hover">
            <div class="evento-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img src="<?php echo URL ?>pictures/catEcoturismo.jpg" class="img-responsive" alt="">
        </a>
        <div class="evento-caption">
          <h4>Ecoturismo</h4>
          <p class="text-muted">Descripcion Descripcion Descripcion Descripcion Descripcion </p>
        </div>
      </div>



      <!-- eventos Modal 1 -->
      <div class="col-md-4 col-sm-6 evento-item">
        <a href="#eventoModal1" class="evento-link" data-toggle="modal">
          <div class="evento-hover">
            <div class="evento-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img src="<?php echo URL ?>pictures/catEntretenimiento.jpg" class="img-responsive" alt="">
        </a>
        <div class="evento-caption">
          <h4>Entretenimiento</h4>
          <p class="text-muted">Descripcion Descripcion Descripcion Descripcion Descripcion </p>
        </div>
      </div>

      <!-- eventos Modal 2 -->
      <div class="col-md-4 col-sm-6 evento-item">
        <a href="#eventoModal2" class="evento-link" data-toggle="modal">
          <div class="evento-hover">
            <div class="evento-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img src="<?php echo URL ?>pictures/catHistorico.jpg" class="img-responsive" alt="">
        </a>
        <div class="evento-caption">
          <h4>Historico</h4>
          <p class="text-muted">Descripcion Descripcion Descripcion Descripcion Descripcion </p>
        </div>
      </div>



      <!-- eventos Modal 5 -->
      <div class="col-md-4 col-sm-6 evento-item">
        <a href="#eventoModal5" class="evento-link" data-toggle="modal">
          <div class="evento-hover">
            <div class="evento-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img src="<?php echo URL ?>pictures/catReligioso.jpg" class="img-responsive" alt="">
        </a>
        <div class="evento-caption">
          <h4>Religioso</h4>
          <p class="text-muted">Descripcion Descripcion Descripcion Descripcion Descripcion </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Pie de página-->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <span class="copyright">Contactanos En Redes Sociales</span>
      </div>
      <div class="col-md-6">
        <ul class="list-inline social-buttons">
          <li><a href="#"><i class="fa fa-twitter"></i></a>
          </li>
          <li><a href="#"><i class="fa fa-facebook"></i></a>
          </li>
          <li><a href="#"><i class="fa fa-google"></i></a>
          </li>
          <li><a href="#"><i class="fa fa-youtube"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<?php include DIR . 'view/parcial/foot.php'; ?>





















