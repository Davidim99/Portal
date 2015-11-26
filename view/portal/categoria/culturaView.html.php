

<?php include DIR . 'view/parcial/head.php'; ?>
<body>
  <!-- Navegación -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- icono mostrado en modo móvil-->
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand page-scroll" href="<?php echo URL ?>index.php/portal/index">Guadalajara de Buga</a>
      </div>

      <!-- Contenido del navbar -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="hidden">
            <a href="#"></a>
          </li>
          <li>
            <form action="" class="navbar-form navbar-left" role="search">
              <div>
                <input type="text" class="form-control" placeholder="Buscar...">
                <span  class="visible-lg-inline fa fa-search"></span>   
              </div>
            </form>
          </li>
          <li>
            <a class="page-scroll" href="#services">Categorias</a>
          </li>
          <li>
            <a class="page-scroll" href="#about">Iniciar sesion</a>
          </li>

          <li>
            <a class="page-scroll" href="#contact">Registrate</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>


  <!-- Carrusel -->
  <div class="">
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
            <img id="banner" src='<?php echo URL ?>pictures/fondo1-a.jpg' class="img-responsive">
            <div class="carousel-caption">
              <h3>Fiestas Folcloricas</h3>
            </div>
          </div>

          <div class="item">
            <img id="banner" src='<?php echo URL ?>pictures/fondo2-a.jpg' class="img-responsive">
            <div class="carousel-caption">
              <h3> Arte Local y Contemporaneo</h3>
            </div>
          </div>


          <div class="item">
            <img id="banner" src='<?php echo URL ?>pictures/fondo3-a.jpg' class="img-responsive">
            <div class="carousel-caption">
              <h3> Tradiciones  </h3>
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
          <h2 style="font-family: fantasy"class="section-heading">Arte y Tradicion</h2>
          <h3 style="font-size: 30px" class="section-subheading text-muted">Ultimos Eventos</h3>
        </div>
      </div>


      <div class="row">

        <!-- eventos Modal 1 -->
        <div class="col-md-4 col-sm-6 evento-item">
          <a href="#eventoModal1" class="evento-link" data-toggle="modal">
            <div class="evento-hover">
              <div class="evento-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img src="<?php echo URL ?>pictures/teatro.jpg" class="img-responsive" alt="">
          </a>
          <div class="evento-caption">
            <h4>Carnaval Infantil</h4>
            <p class="text-muted">Presentación del Carnaval Infantil de las Marionetas</p>
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
            <img src="<?php echo URL ?>pictures/festival.jpg" class="img-responsive" alt="">
          </a>
          <div class="evento-caption">
            <h4>Festival de Música</h4>
            <p class="text-muted">III Festival de Música de Cámara Guadalajara de Buga</p>
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
            <img src="<?php echo URL ?>pictures/escritores.jpg" class="img-responsive" alt="">
          </a>
          <div class="evento-caption">
            <h4>Encuentro de lectores</h4>
            <p class="text-muted">Encuentro Municipal de lectores y Escritores</p>
          </div>
        </div>

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


  <!-- eventos Modals descripcion -->


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

              <!-- Detalles del evento-->
              <h2>Carnaval Infantil de las Marionetas</h2>
              <p class="item-intro text-muted">No te Lo Pierdas</p>
              <img class="img-responsive img-centered" src="<?php echo URL ?>pictures/teatro.jpg" alt="">
              <p>presentación familiar, niños y niñas padres y profesores y para la comunidad en general. </p>

              <ul class="list-inline">
                <li>Hora: 7pm</li>
                <li>Dia: Martes 29</li>
                <li>Mes: Septiembre</li>
                <li>Lugar: Teatro Municipal</li>
              </ul>
              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Volver</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- evento Modal 2 -->
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
              <h2>III Festival de Música de Cámara</h2>
              <p class="item-intro text-muted">Guadalajara de Buga</p>
              <img class="img-responsive img-centered" src="<?php echo URL ?>pictures/festival.jpg">
              <p>Tras el éxito de su primera y segunda edición, 
                el Festival de Música de Cámara Guadalajara de Buga, 
                regresa para cautivar los oídos de los vallecaucanos. 
                Con una programación compuesta por talleres y conciertos, 
                los amantes de la música clásica podrán disfrutar en 
                esta ocasión de un recorrido de melodías a través del tiempo,
                desde el renacimiento hasta la actualidad</p>
              <ul class="list-inline">
                <li>Hora: 7pm</li>
                <li>Dia: 8 al 11</li>
                <li>Mes: Octubre</li>
                <li>Lugar: Teatro Municipal</li>
              </ul>
              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Volver</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- evento Modal 2 -->
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
              <h2>Zumba Rosa Contra El Cáncer De Mama</h2>
              <p class="item-intro text-muted">Guadalajara de Buga</p>
              <img class="img-responsive img-centered" src="<?php echo URL ?>pictures/mama.jpg">
              <p>Ven baila por la vida y tomate a pecho tu salud.</p>
              <ul class="list-inline">
                <li>Hora: 7pm</li>
                <li>Dia: 6</li>
                <li>Mes: Octubre</li>
                <li>Lugar:Parque Biosaludable el Vergel</li>
              </ul>
              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Volver</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- evento Modal 2 -->
  <div class="evento-modal modal fade" id="eventoModal4" tabindex="-1" role="dialog" aria-hidden="true">
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
              <!-- Detalles de proyecto -->
              <h2>Audiencia Pública De Rendición De Cuentas </h2>
              <p class="item-intro text-muted">Para Infancia, Adolescencia Y Juventud.</p>
              <img class="img-responsive img-centered" src="<?php echo URL ?>pictures/cuenta.jpg">
              <p> En nombre del Alcalde Municipal Magister John Harold Suárez Vargas, 
                nos permitimos invitarle al 
                Teatro Municipal a la Rendición de 
                Cuentas para Infancia, Adolescencia y Juventud..</p>
              <ul class="list-inline">
                <li>Hora: 9 am</li>
                <li>Dia: Miecoles 28</li>
                <li>Mes: Octubre</li>
                <li>Lugar:Teatro Municipal</li>
              </ul>
              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- evento Modal 2 -->
  <div class="evento-modal modal fade" id="eventoModal5" tabindex="-1" role="dialog" aria-hidden="true">
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
            <div class="modal-body modal-color">
              <!-- Detalles del proyecto -->
              <h2>Encuentro Municipal De Lectores Y Escritores </h2>
              <p class="item-intro text-muted">2015.</p>
              <img class="img-responsive img-centered" src="<?php echo URL ?>pictures/escritores2.jpg">
              <p>En el presente año, el Concurso Municipal del Cuento, 
                ha contado con una importante participacion; 
                789 textos fueron recibidos en la convocatoria 2015, 
                nutriendo así las 5 categorías participantes en este evento, 
                el cual, día a día se muestra como un ente que visibiliza la 
                producción intelectual de Guadalajara de Buga.</p>
              <ul class="list-inline">
                <li>Hora: 3 pm</li>
                <li>Dia: Miercoles 28</li>
                <li>Mes: Octubre</li>
                <li>Lugar:Club Guadalajara Comfenalco</li>
              </ul>
              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> volver</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- evento Modal 2 -->
  <div class="evento-modal modal fade" id="eventoModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl">
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
    </div>
  </div>
</body>
<?php include DIR . 'view/parcial/foot.php'; ?>



























<!------------------------------------------------------------------------------------------------------------------------>

