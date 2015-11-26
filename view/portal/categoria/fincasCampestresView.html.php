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
            <h2 style="font-family: cooper black"> Ciudad TURISTICA...</h2>
          </div>
        </div>

        <div class="item">
          <img id="banner" src='<?php echo URL ?>pictures/fondo21.jpg' class="img-responsive">
          <div class="carousel-caption">
            <h2 style="font-family: cooper black"> Ciudad Historica...</h2>
          </div>
        </div>


        <div class="item">
          <img id="banner" src='<?php echo URL ?>pictures/fondo3.jpg' class="img-responsive">
          <div class="carousel-caption">
            <h2 style="font-family: cooper black">Y Ciudad Señora!</h2>
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
<!------------------------------------->


<!-- Sección categorias -->

<div>
  <div>

    <center>  <h2 style="color: #048DD6"><strong>FINCAS CAMPESTRES EN BUGA</strong></h2>
      <p><em>Aqui encontrarás la mejores y más hermosas Fincas Campestres en Buga, Alojamientos Rurales en Buga, 
          Casas Campestres en Buga, todas totalmente amobladas, y listas para cuando tú las necesites, visítalas, conócelas y reservalas y disfruta de un descanso inolvidable en estas espectaculares Fincas Campestres en Buga.</em></p>
    </center>
    <br>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="thumbnails thumbnail-style thumbnail-kenburn">
          <div class="thumbnail-img">
            <div class="overflow-hidden">
              <img src="<?php echo URL ?>pictures/balneario-casalagoelmanantial5.jpg" class="img-responsive" alt="">                                
            </div>

          </div>
          <div class="caption">
            <h3><a class="hover-effect" href="restaurantes.html">Cabañas El Manantial</a></h3>
            <p>Ven y disfruta de este espectacular Balneario, situado en el famoso sector de Alaska, Buga. 
              Puedes disfrutar de un día lleno de diversión, con sus piscinas de agua natural, su espectacular tobogán y Garucha dentro de la misma piscina. Comparte en familia preparando un delicioso Sancocho de Gallina en los Fogónes de Leña.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnails thumbnail-style thumbnail-kenburn">
          <div class="thumbnail-img">
            <div class="overflow-hidden">
              <img src="<?php echo URL ?>pictures/fincacampestre-elsilencio.jpg" class="img-responsive" alt="">   
            </div>

          </div>
          <div class="caption">
            <h3><a class="hover-effect" href="fincascampestres.html">FINCA CAMPESTRE EL SILENCIO</a></h3>
            <p>Finca Campestre El Silencio es la mejor alternativa donde puedes planear tus paseos familiares, retiros espirituales,
              reuniones empresariales y otros eventos, bajo un maravilloso entorno natural que solo puede ser hallado a 10 minutos de Guadalajara de Buga, Valle del Cauca.</p>
          </div>
        </div>     
      </div>
      <div class="col-md-4">
        <div class="thumbnails thumbnail-style thumbnail-kenburn">
          <div class="thumbnail-img">
            <div class="overflow-hidden">
              <img src="<?php echo URL ?>pictures/fincacampestre-chontalito.jpg" class="img-responsive" alt="">   
            </div>

          </div>
          <div class="caption">
            <h3><a class="hover-effect" href="balnearios.html">FINCA CAMPESTRE CHONTALITO</a></h3>
            <p>Finca Campestre Chontalito es una finca campestre ubicada en la Salida Sur de Buga, en el casco rural del municipio de Buga. Posee una casa antigua con techo 
              en teja de barro y pisos en ladrillo cocido pero con las comodidades de la vida moderna. Sus áreas sociales son amplias y especialmente diseñadas para el descanso y el disfrute de la naturaleza.</p>
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