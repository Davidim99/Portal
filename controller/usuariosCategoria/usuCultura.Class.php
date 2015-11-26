<?php
/**
 * Description of indexControllerClass
 *
 * @author Luis david sicua <xwhisper_dim@outlook.com>
 */
class usuCultura extends controllerClass {
  
  static public function main() {
    
    viewClass::definirVista('usuarioPortal/usuariosCategoria', 'usuCultura', null, 'html');
  }
}
