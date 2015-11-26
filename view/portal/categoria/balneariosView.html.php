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
      <a class="navbar-brand page-scroll" href="#page-top">Guadalajara de Buga</a>
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
                      <a href="../usuariosPortal/usuariosIndexView.html.php"> <button type="submit" class="btn btn-primary btn-block">Iniciar sesion</button></a>
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
        <h3 class="caption-title">Lorem ipsum</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ea.</p>
      </div>
    </li>

    <li>
      <img src="<?php echo URL ?>pictures/fondo1-b.jpg" alt="Slider Imagen 1">
      <div class="caption">
        <h3 class="caption-title">Lorem ipsum</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ea.</p>
      </div>
    </li>

    <li>
      <img src="<?php echo URL ?>pictures/fondo1-c.jpg" alt="Slider Imagen 1">
      <div class="caption">
        <h3 class="caption-title">Lorem ipsum</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, ea.</p>
      </div>
    </li>

    <li>
      <img src="<?php echo URL ?>pictures/fondo1-d.jpg" alt="Slider Imagen 1">
      <div class="caption">
        <h3 class="caption-title">Lorem ipsum</h3>
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

<div>

  <center><h2><strong>BALNEARIOS EN BUGA</strong></h2>
    <p><em>Aqui encontrarás los mejores Balnearios en Buga, ven y disfruta con tus 
        familiares y amigos, de un pasadía espectacular en estos hermosos sitios turísticos con sus piscinas de Agua Natural estos destinos son los mas visitados.</em></p>
  </center>
  <br>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4">
      <div>
        <div>
          <div>
            <img src="<?php echo URL ?>pictures/balneario-lamaria.jpg" class="img-responsive" alt="">                                
          </div>

        </div>
        <div class="caption">
          <h3><a class="hover-effect" href="restaurantes.html">Balneario La María</a></h3>
          <p>Ven y disfruta de este espectacular Balneario, situado en el famoso sector de la María, Buga. Puedes disfrutar de un día lleno de diversión, con sus piscinas de agua natural,
            su espectacular tobogán y Garucha dentro de la misma piscina. Comparte en familia preparando un delicioso Sancocho de Gallina en los Fogónes de Leña.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div>
        <div>
          <div>
            <img src="<?php echo URL ?>pictures/balneario-lafloresta.jpg" class="img-responsive" alt="">   
          </div>

        </div>
        <div class="caption">
          <h3><a class="hover-effect" href="fincascampestres.html">Balneario La Floresta</a></h3>
          <p>Ubicado a 8 km de la Basílica del Señor de los Milagros y rodeado de una imponente belleza natural, el Balneario La Floresta es lugar indicado para el descanso, la diversión y 
            el contacto con la naturaleza. Este sitio turístico ofrece zonas de recreación, restaurante, piscinas, pesca deportiva, salón de baile y fogones de leña.</p>
        </div>
      </div>     
    </div>

    <div class="col-md-4">
      <div>
        <div >
          <div>
            <img src="<?php echo URL ?>pictures/balneario-elestaderodesolis.jpg" class="img-responsive" alt="">   
          </div>

        </div>
        <div class="caption">
          <h3><a class="hover-effect" href="balnearios.html">Balneario El Estadero de Solís</a></h3>
          <p>Ven y disfruta de este espectacular Balneario, situado en el famoso sector de Alaska, Buga. Puedes disfrutar de un día lleno de diversión, con sus piscinas de agua natural,
            su espectacular tobogán y Garucha dentro de la misma piscina. Comparte en familia preparando un delicioso Sancocho de Gallina en los Fogónes de Leña.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!--    !--Pie de página-->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <span class="copyright">Contactanos En Redes Sociales</span>
      </div>
      <div class="col-md-4">
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