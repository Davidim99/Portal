<?php include DIR . 'view/parcial/headPanel.php'; ?>
<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Hola Putos</a>
            </div>
            

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Pagina De Inicio</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Cuenta<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Editar</a>
                                </li>
                                <li>
                                    <a href="morris.html">Eliminar</a>
                                </li>
                            </ul>
                            
                        </li>
                      
  
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Evento<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Crear Evento</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Modificar Evento</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Desactivar Evento</a>
                                </li>
                                <li>
                                    <a href="typography.html">Eliminar Evento</a>
                                </li>
  
                            </ul>
                            
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sitio<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Crear Sitio</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Modificar Sitio</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Desactivar Sitio</a>
                                </li>
                                <li>
                                    <a href="typography.html">Eliminar Sitio</a>
                                </li>
                            </ul>
                            
                        </li>
                    </ul>
                </div>
                
            </div>
            
        </nav>

    </div>

<?php include DIR . 'view/parcial/footPanel.php'; ?>