<?php
/**
 * Description of indexControllerClass
 *
 * @author Luis david sicua <xwhisper_dim@outlook.com>
 */
class usuCategorias extends controllerClass {
  
  static public function main() {
    
    viewClass::definirVista('usuarioPortal/usuariosCategoria', 'usuCategorias', null, 'html');
  }
}
