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
      <a class="navbar-brand page-scroll" href="<?php echo URL ?>index.php/portal/index">Guadalajara de Buga</a>
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
          <a class="page-scroll" href="<?php echo URL ?>index.php/categoria/categorias">Categorias</a>
        </li>

        <li>
          <a href="">Registrate</a>
        </li>

        <!--        iniciar sesion-->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle page-scroll" data-toggle="dropdown"><b>Iniciar sesion</b> <span class="caret"></span></a>
          <ul id="login-dp" class="dropdown-menu">
            <li>
              <div class="row">
                <div class="col-md-12">

                  Inicia con :
                  <div id="social-botones">
                    <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="btn btn-gg"><i class="fa fa-google-plus"></i></a>
                  </div>

                  O
                  <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">

                    <div class="form-group ">
                      <label class="sr-only " for="correo">Correo</label>
                      <input type="email" class="form-control" id="correo" placeholder="Ingresa Correo" required>
                    </div>

                    <div class="form-group">
                      <label class="sr-only" for="pass">Contraseña</label>
                      <input type="password" class="form-control" id="pass" placeholder="Ingresa Contraseña" required>

                      <div class="help-block text-right"><a href="" id="text-social">Olvidaste Tu Contraseña ?</a></div>
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Iniciar sesion</button>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Recuerdame
                      </label>
                    </div>
                  </form>
                </div>
                <div class="bottom text-center">
                  Nuevo Aqui ? <a href="#" id="text-social"><b>Registrate</b></a>
                </div>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!-- ==================================== 
Contenedor Slider 
=======================================-->
<h1 class="slider-title"><a href="">Buga</a></h1>

<!-- Slider Container -->
<section class="slider-container">
  <ul id="slider" class="slider-wrapper">
    <li class="slide-current">
      <img src="<?php echo URL ?>pictures/fondo1-a.jpg" alt="Slider Imagen 1">
      <div class="caption">
        <h3 class="caption-title">Diseño web</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ea.</p>
      </div>
    </li>

    <li>
      <img src="<?php echo URL ?>pictures/fondo1-b.jpg" alt="Slider Imagen 1">
      <div class="caption">
        <h3 class="caption-title">Desarrollo web</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ea.</p>
      </div>
    </li>

    <li>
      <img src="<?php echo URL ?>pictures/fondo1-c.jpg" alt="Slider Imagen 1">
      <div class="caption">
        <h3 class="caption-title">Javascript</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ea.</p>
      </div>
    </li>

    <li>
      <img src="<?php echo URL ?>pictures/fondo1-d.jpg" alt="Slider Imagen 1">
      <div class="caption">
        <h3 class="caption-title">Maquetacion</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ea.</p>
      </div>
    </li>
  </ul>

  <!-- Sombras -->
  <div class="shadow"></div>

  <!-- Controles -->
  <ul id="slider-controls" class="slider-controls"></ul>

  <!-- Autores de las Imagenes -->
  <p class="authors">Las imagenes usadas en esta demostracion no son de mi propiedad y son solamente como uso de ejemplo. <br><a href="https://www.flickr.com/photos/flickr/galleries/72157645330786244/">Autores de las imagenes</a></p>
</section>


<!-- Sección Sitio-->
<section id="evento" class="bg-light-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading"> Sitios</h2>
        <h2 class="section-subheading text-muted">Arte y Cultura</h2>
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
          <img src="<?php echo URL ?>pictures/buga-2.jpg" class="img-responsive" alt="">

        </a>
        <div class="evento-caption">
          <h4>Basilica </h4>
          <p class="text-muted">Museo de buga Arte-Cultura</p>
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
          <img src="<?php echo URL ?>pictures/sitio1.jpg" class="img-responsive" alt="">
        </a>
        <div class="evento-caption">
          <h4>Vieja Estacion del Ferrocarril</h4>
          <p class="text-muted">Estacion del ferrocarril de Buga</p>
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
        </div>
      </div>
    </div>
  </div>
</section>


<!-- eventos Modal 6 -->
<!--          <div class="col-md-4 col-sm-6 evento-item">
            <a href="#eventoModal6" class="evento-link" data-toggle="modal">
              <div class="evento-hover">
                <div class="evento-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img src="<?php echo URL ?>pictures/mama.jpg" class="img-responsive" alt="">
            </a>
            <div class="evento-caption">
              <h4>Sueños</h4>
              <p class="text-muted">Diseño web</p>
            </div>
          </div>-->



<!-- Sitios Modals descripcion -->

<!-- evento Modal 1 -->
<div class="evento-modal modal fade" id="eventoModal1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body">

            <!-- Detalles del Sitio-->
            <h2>Museo de la Basilica</h2>
            <p class="item-intro text-muted">No te Lo Pierdas</p>
            <img class="img-responsive img-centered" src="<?php echo URL ?>pictures/buga-2.jpg" alt="">
            <p>  La Basílica Menor del Señor de los Milagros es un templo católico localizado en el Centro Histórico de Guadalajara de Buga (Valle del Cauca).
              La basílica tiene 33 m de altura y 80 m de largo, y posee un reloj francés instalado el 18 de marzo de 1909.</p>

            <ul class="list-inline">
              <p>Abierta desde las 5:30 a.m. hasta las 7:00 p.m. Visita al camarín del Milagroso en las mismas horas.</p>
              <br><br> <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i> Agregar a mi Itinerario</button>
            </ul>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Volver</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Sitio Modal 2 -->
<div class="evento-modal modal fade" id="eventoModal2" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body">
            <h2>Estacion del ferrocarril</h2>
            <p class="item-intro text-muted">Guadalajara de Buga</p>
            <img class="img-responsive img-centered" src="<?php echo URL ?>pictures/sitio1.jpg">
            <p>NUESTRA HISTORIA, NUESTRA ESTACION

La Estación del Ferrocarril, espectacular conjunto arquitectonico, declarado Bien de Interes Cultural (BIC) de la Nación por el Ministerio de Cultura. Posee una arquitectura colonial, buscando uniformidad en cada uno de los elementos y detalles que la componen. Todos los espacios externos e internos son atribuidos a una funcion o actividad especifica, por lo cual es un monumento digno de apreciar.</p>
            <ul class="list-inline">
              <p>Abierta todos los dias del año!</p>
              <br><br> <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i> Agregar a mi Itinerario</button>
            </ul>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Volver</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Sitio Modal 3 -->
<div class="evento-modal modal fade" id="eventoModal3" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body">
            <!-- Detalles del proyecto -->
            <h2>Universidad del valle</h2>
            <p class="item-intro text-muted">Guadalajara de Buga</p>
            <img class="img-responsive img-centered" src="<?php echo URL ?>pictures/colegio.jpg">
            <p>Antiguo colegio Academico y actualmente la universidad del valle sede Buga.</p>
            <ul class="list-inline">
              <li>Lugar:carrera 13 # 6-23</li>
              <br><br> <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i> Agregar a mi Itinerario</button>
            </ul>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Volver</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!--      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="modal-body">
               Detalles del proyecto 
              <h2>Project Name</h2>
              <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
              <img class="img-responsive img-centered" src="img/portafolio/dreams-preview.png" alt="">
              <p>Dreams is a free PSD web template built by <a href="#">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
              <p>You can download the PSD template in this portfolio sample item at <a href="#">FreebiesXpress.com</a>.</p>
              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
            </div>
          </div>
        </div>
      </div>-->


<!-- Sección Sitio-->
<section id="evento" class="bg-light-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading">Deportes</h2>
        <h3 class="section-subheading text-muted"></h3>
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
          <img src="<?php echo URL ?>pictures/deporte.jpg" class="img-responsive" alt="">

        </a>
        <div class="evento-caption">
          <h4>Escuela de Futbol </h4>
          <p class="text-muted">Inder-Buga</p>
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
          <img src="<?php echo URL ?>pictures/PROYECTO FUTBOL.jpg" class="img-responsive" alt="">
        </a>
        <div class="evento-caption">
          <h4>Escuela de futbol Deport-Buga</h4>
          <p class="text-muted">Guadalajara de Buga</p>
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
          <img src="<?php echo URL ?>pictures/Screenshot.png" class="img-responsive" alt="">
        </a>
        <div class="evento-caption">
          <h4>Bombonera</h4>
          <p class="text-muted">Academia de futbol sede (Buga)</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- eventos Modal 6 -->
<!--          <div class="col-md-4 col-sm-6 evento-item">
            <a href="#eventoModal6" class="evento-link" data-toggle="modal">
              <div class="evento-hover">
                <div class="evento-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img src="<?php echo URL ?>pictures/mama.jpg" class="img-responsive" alt="">
            </a>
            <div class="evento-caption">
              <h4>Sueños</h4>
              <p class="text-muted">Diseño web</p>
            </div>
          </div>-->




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



<!-- Sitios Modals descripcion -->

<!-- evento Modal 1 -->
<div class="evento-modal modal fade" id="eventoModal1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body">

            <!-- Detalles del Sitio-->
            <h2>Escuela de futbol del Norte</h2>
            <p class="item-intro text-muted">Ven y diviertete No te Lo Pierdas</p>
            <img class="img-responsive img-centered" src="<?php echo URL ?>pictures/deporte.jpg" alt="">
            <p> familiar, niños y niñas padres y profesores y para la comunidad en general. </p>

            <ul class="list-inline">
              <li>Hora: 7pm</li>
              <li>Dia: Martes 29</li>
              <li>Mes: Septiembre</li>
              <li>Lugar: Museo</li>
            </ul>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Volver</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Sitio Modal 2 -->
<div class="evento-modal modal fade" id="eventoModal2" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body">
            <h2>Estacion del ferrocarril</h2>
            <p class="item-intro text-muted">Guadalajara de Buga</p>
            <img class="img-responsive img-centered" src="<?php echo URL ?>pictures/Estacion-ferrocarril-buga.jpg">
            <p>Academia de Baile y Antigua estacion del ferrocarril</p>
            <ul class="list-inline">
              <li>Hora: 7pm</li>
              <li>Dia: Lunes a Viernes</li>
              <li>Lugar: Estacion del ferrocarril</li>
            </ul>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Volver</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Sitio Modal 3 -->
<div class="evento-modal modal fade" id="eventoModal3" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body">
            <!-- Detalles del proyecto -->
            <h2>Universidad del valle</h2>
            <p class="item-intro text-muted">Guadalajara de Buga</p>
            <img class="img-responsive img-centered" src="<?php echo URL ?>pictures/Antiguo Colegio Académico de Buga,.jpg">
            <p>Antiguo colegio Academico y actualmente la universidad del valle sede Buga.</p>
            <ul class="list-inline">
              <li>Lugar:carrera 13 # 6-23</li>
            </ul>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Volver</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include DIR . 'view/parcial/foot.php'; ?>