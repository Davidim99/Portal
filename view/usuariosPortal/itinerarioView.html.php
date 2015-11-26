
<?php include DIR . 'view/parcial/head.php'; ?>
<link rel="stylesheet" href="<?php echo URL ?>css/estilos1.css">

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
      <a class="navbar-brand page-scroll" href="<?php echo URL ?>index.php/portal/index">Guadalajara de Buga</a>
    </div>
    <as
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
            <a class="page-scroll" href="<?php echo URL ?>index.php/portal/sitios">Sitios</a>
          </li>

          <li>
            <a class="page-scroll" href="<?php echo URL ?>index.php/categoria/categorias">Categorias</a>
          </li>

       <li>
   <a style="color: #FFFEA2" class="page-scroll" href="<?php echo URL ?>index.php/panel/panel">Panel De Control</a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle page-scroll" data-toggle="dropdown"><b style="color: greenyellow">Hola Felipe </b> <span class="caret"></span></a>
          <ul id="login-dp" class="dropdown-menu">
            <li>
              <div class="row">
                <div class="col-md-12">

                  <div class="bottom text-center">
                    Hola deseas <a href="#" id="text-social"><b>Configurar</b></a>
                  </div>
                </div>
            </li>
          </ul>
        </li>
      </div>
  </div>
</nav>




<!-- Sección categorias -->
<br><br><br><br>

<div class="row">
  <div class="col-lg-12 text-center">
    
   
  </div>
</div>

<section class="main container">
  <div class="row">
    <section class="posts col-md-9">
      <div class="miga-de-pan">
        <ol class="breadcrumb">
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Itinerario</a></li>
          
        </ol>
      </div>

     
  <div class="col-lg-11">
    <div class="row">
      <div class="col-lg-12 text-center">
    
        <h2 class="section-subheading text-muted">Tu Itinerario Seleccionado:</h2>
      </div>
    </div>


    <div class="row">

      <!-- Sitio Modal 1 -->
      <div class="col-md-4 col-sm-6 evento-item">
        <a href="#eventoModal1" class="evento-link" data-toggle="modal">
          <div class="evento-hover">
            <div class="evento-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img src="<?php echo URL ?>pictures/festival.jpg" class="img-responsive" alt="">

        </a>
        <div class="evento-caption">
          <h4>Auditorio municipal</h4>
          <p class="text-muted">Museo de buga Arte-Cultura</p>
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>Eliminar De Itinerario</button>
        </div>
      </div>

      <!-- Sitio Modal 2 -->
      <div class="col-md-4 col-sm-6 evento-item">
        <a href="#eventoModal2" class="evento-link" data-toggle="modal">
          <div class="evento-hover">
            <div class="evento-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img src="<?php echo URL ?>pictures/teatro.jpg" class="img-responsive" alt="">
        </a>
        <div class="evento-caption">
          <h4>Teatro </h4>
          <p class="text-muted">Estacion del ferrocarril de Buga</p>
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>Eliminar De Itinerario</button>
        </div>
      </div>

      <!-- Sitio Modal 3 -->
      <div class="col-md-4 col-sm-6 evento-item">
        <a href="#eventoModal3" class="evento-link" data-toggle="modal">
          <div class="evento-hover">
            <div class="evento-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img src="<?php echo URL ?>pictures/colegio.jpg" class="img-responsive" alt="">
        </a>
        <div class="evento-caption">
          <h4>Universidad</h4>
          <p class="text-muted">universidad del valle sede (Buga)</p>
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>Eliminar De Itinerario</button>
        </div>
      </div>
    </div>
  </div>
      
      
 <div class="col-lg-11">
 

    <div class="row">

      <!-- Sitio Modal 1 -->
      <div class="col-md-4 col-sm-6 evento-item">
        <a href="#eventoModal1" class="evento-link" data-toggle="modal">
          <div class="evento-hover">
            <div class="evento-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img src="<?php echo URL ?>pictures/descarga1.jpg" class="img-responsive" alt="">

        </a>
        <div class="evento-caption">
          <h4>Basilica </h4>
          <p class="text-muted">Museo de buga Arte-Cultura</p>
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>Eliminar De Itinerario</button>
        </div>
      </div>

      <!-- Sitio Modal 2 -->
      <div class="col-md-4 col-sm-6 evento-item">
        <a href="#eventoModal2" class="evento-link" data-toggle="modal">
          <div class="evento-hover">
            <div class="evento-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img src="<?php echo URL ?>pictures/catReligioso.jpg" class="img-responsive" alt="">
        </a>
        <div class="evento-caption">
          <h4>Vieja Estacion </h4>
          <p class="text-muted">Estacion del ferrocarril de Buga</p>
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>Eliminar De Itinerario</button>
        </div>
      </div>

      <!-- Sitio Modal 3 -->
      <div class="col-md-4 col-sm-6 evento-item">
        <a href="#eventoModal3" class="evento-link" data-toggle="modal">
          <div class="evento-hover">
            <div class="evento-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img src="<?php echo URL ?>pictures/fondo1-c.jpg" class="img-responsive" alt="">
        </a>
        <div class="evento-caption">
          <h4>Universidad</h4>
          <p class="text-muted">universidad del valle sede (Buga)</p>
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>Eliminar De Itinerario</button>
        </div>
      </div>
    </div>
  </div>

    
    </section>
    
    
    

    <aside class="col-md-3 hidden-xs hidden-sm">
      
      
     

    <center>  <h4>SITIOS FAMOSOS</h4></center>
      <a href="#" class="list-group-item">
        <center><h4 class="list-group-item-heading">Lago Calima - Valle del Cauca</h4></center>
        <img class="img-thumbnail" src="<?php echo URL ?>pictures/balneario-lamaria.jpg" alt="">
        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ea..</p>
      </a>

      <a href="#" class="list-group-item">
       <center><h4 class="list-group-item-heading">Basilica Del Milagroso BUGA</h4></center>
       <img class="img-thumbnail" src="<?php echo URL ?>pictures/fondo3.jpg" alt="">
        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ea.</p>
      </a>

      <a href="#" class="list-group-item">
        <center><h4 class="list-group-item-heading">Lago Calima - Valle del Cauca</h4></center>
        <img class="img-thumbnail" src="<?php echo URL ?>pictures/balneario-lamaria.jpg" alt="">
        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ea.</p>
      </a>
    
    
   
   
    </aside>
  </div>
</section>
<!----------------------------------------------------------------------------------------->





<section class="container visible-lg">
  <article class="row">
    <center>
      <p>
        <em>
          <strong>FELICIDADES !!! Guadalajara de Buga</strong><br/>
          Los Ministerios de Cultura, Comercio, Industria y Turismo, con el apoyo del Fondo Nacional del Turismo, declararon al municipio de Guadalajara de Buga
          como <strong>Patrimonio Cultural y Religioso de Colombia</strong>. De esta manera, la <strong>Ciudad Señora</strong> entró a ser parte de la <strong>Red de Pueblos Patrimonio de Colombia</strong>,
          al selecto grupo de 16 municipios del país en tener este título.
        </em>
      </p>
      <small>
        <em>Guadalajara de Buga, Valle del Cauca, Colombia</em>
      </small>
      <em> Nov 2015, Sicua&Gonzalez-Company</em>
    </center>
  </article>
</section>





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
