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


<!-- Sección categorias -->
<hr>
<div class="row">
  <div class="col-lg-12 text-center">

    <h2 class="section-subheading text-muted">INVITACION TURISTICA BUGA</h2>
  </div>
</div>

<section class="main container">
  <div class="row">
    <section class="posts col-md-9">
      <div class="miga-de-pan">
        <ol class="breadcrumb">
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Categorias</a></li>
          <li class="active">Diseño Web</li>
        </ol>
      </div>

      <article class="post clearfix">
        <a href="<?php echo URL ?>index.php/categoria/restaurantes" class="thumb pull-left">
          <img class="img-thumbnail" src="<?php echo URL ?>pictures/restaurante-paraisodelbuensazon5.jpg" alt="">
        </a>
        <h3><a href="<?php echo URL ?>index.php/categoria/restaurantes">Restaurantes</a></h3>
        <p class="post-contenido text-justify">
          Para los amantes de la buena mesa encuentra aquí los mejores lugares 
          para disfrutar de su famoso Sancocho de Gallina, cocinado en fogón de leña.
        </p>

        <div class="contenedor-botones">
          <a href="<?php echo URL ?>index.php/categoria/restaurantes" class="btn btn-primary">Leer Mas</a>

        </div>
      </article>

      <article class="post clearfix">
        <a href="<?php echo URL ?>index.php/categoria/fincasCampestres" class="thumb pull-left">
          <img class="img-thumbnail" src="<?php echo URL ?>pictures/fincacampestre-lamiranda.jpg" alt="">
        </a>
        <h3><a href="<?php echo URL ?>index.php/categoria/fincasCampestres">Fincas Campestres</a></h3>
        <p class="post-contenido text-justify">
          Te invitamos a conocer las mejores Fincas Campestres en Buga 
          para que alquiles y pases un fin de semana inolvidable con tu familiares y amigos.
        </p>

        <div class="contenedor-botones">
          <a href="<?php echo URL ?>index.php/categoria/fincasCampestres" class="btn btn-primary">Leer Mas</a>

        </div>
      </article>

      <article class="post clearfix">
        <a href="<?php echo URL ?>index.php/categoria/balnearios" class="thumb pull-left">
          <img class="img-thumbnail" src="<?php echo URL ?>pictures/balneario-lamaria.jpg" alt="">
        </a>
        <h3><a href="<?php echo URL ?>index.php/categoria/balnearios">Balnearios</a></h3>
        <p class="post-contenido text-justify">
          Aqui encontrarás los mejores Balnearios en Buga, 
          ven y disfruta con tus familiares y amigos, de un pasadía espectacular.
        </p>

        <div class="contenedor-botones">
          <a href="<?php echo URL ?>index.php/categoria/balnearios" class="btn btn-primary">Leer Mas</a>

        </div>
      </article>

      <article class="post clearfix">
        <center>   <h3><a href="#">Informacion</a></h3></center>
        <p class="post-contenido text-justify">
          Dentro de sus <a href="<?php echo URL ?>index.php/categoria/restaurantes">Restaurantes</a>, 
          la gastronom&iacute;a de <strong>Buga</strong>, 
          no tiene rival para su especialidad el Dulce Manjar Blanco, 
          ya que año tras año mejoran su receta,
          la cual lo hace extremadamente delicioso e inigualable.
          No podemos dejar pasar por alto, los 
          <a href="<?php echo URL ?>index.php/categoria/balnearios">Balnearios</a> 
          de los corregimientos de la Maria, La Habana y Alaska, además de sus 
          <a class="link" href="<?php echo URL ?>index.php/categoria/fincasCampestres">
            Fincas Campestres</a>, con su representativa gastronomía, los hacen destinos
          obligados a visitar cuando llegamos a esta hermosa ciudad, 
          nuestra <strong>Guadalajara de Buga</strong>.
        </p>

        <!--        <div class="contenedor-botones">
                  <a href="#" class="btn btn-primary">Leer Mas</a>
                  <a href="#" class="btn btn-success">Comentarios <span class="badge">20</span></a>
                </div>-->
      </article>
    </section>

    <aside class="col-md-3 hidden-xs hidden-sm">

      <center> <h4>Planea Tu Viaje</h4></center>
      <div class="list-group">
        <a href="<?php echo URL ?>index.php/usuariosPortal/itinerario" class="list-group-item active">Itinerario</a>

      </div>
      <center> <h4>Categorias</h4></center>
      <div class="list-group">
        <a href="#" class="list-group-item active">Cultura</a>
        <a href="#" class="list-group-item">Deporte</a>
        <a href="#" class="list-group-item">Ecoturismo</a>
        <a href="#" class="list-group-item">Entretenimiento</a>
        <a href="#" class="list-group-item">Historico</a>
        <a href="#" class="list-group-item">Religioso</a>
        <a href="#" class="list-group-item">Restaurantes</a>
        <a href="#" class="list-group-item">Balnearios</a>
      </div>

      <center>  <h4>Ultimos articulos</h4></center>
      <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">III FESTIVAL DE MÚSICA DE CÁMARA</h4>
        <p class="list-group-item-text">los amantes de la música clásica podrán disfrutar
          de un recorrido de melodías a través del tiempo, desde el renacimiento hasta la actualidad</p>
      </a>

      <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">CARNAVAL INFANTIL DE LAS MARIONETAS</h4>
        <p class="list-group-item-text">presentación familiar, niños y niñas padres y profesores y para la comunidad en general.</p>
      </a>

      <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">ENCUENTRO MUNICIPAL DE LECTORES Y ESCRITORES</h4>
        <p class="list-group-item-text"> Día a día se muestra como un ente que visibiliza la producción intelectual de Guadalajara de Buga.</p>
      </a>

    </aside>
  </div>
</section>
<!----------------------------------------------------------------------------------------->


<!-- Sección Eventos-->

<div class="row">
  <div class="col-lg-12 text-center">
    <h2 class="section-subheading text-muted">Eventos Mas Vistos</h2>
  </div>
</div>
<section class="main container">

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

    <!-- eventos Modal 3 -->
    <div class="col-md-4 col-sm-6 evento-item">
      <a href="#eventoModal3" class="evento-link" data-toggle="modal">
        <div class="evento-hover">
          <div class="evento-hover-content">
            <i class="fa fa-plus fa-3x"></i>
          </div>
        </div>
        <img src="<?php echo URL ?>pictures/mama.jpg" class="img-responsive" alt="">
      </a>
      <div class="evento-caption">
        <h4>Zumba Benefica</h4>
        <p class="text-muted">Zumba Rosa Contra El <br>Cancer De Mama</p>
      </div>
    </div>

    <!-- eventos Modal 4 -->
    <div class="col-md-4 col-sm-6 evento-item">
      <a href="#eventoModal4" class="evento-link" data-toggle="modal">
        <div class="evento-hover">
          <div class="evento-hover-content">
            <i class="fa fa-plus fa-3x"></i>
          </div>
        </div>
        <img src="<?php echo URL ?>pictures/cuenta.jpg" class="img-responsive" alt="">
      </a>
      <div class="evento-caption">
        <h4>Audiencia Pública</h4>
        <p class="text-muted">Audiencia Pública De Rendición De Cuentas Para Infancia, Adolescencia Y Juventud</p>
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
  </div>
</div>
</section>



<!--Pie de página-->

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

<!-- evento Modal 3 -->
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
            <p class="item-intro pmuted">Guadalajara de Buga</p>
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

<!-- evento Modal 4 -->
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

<!-- evento Modal 5 -->
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
