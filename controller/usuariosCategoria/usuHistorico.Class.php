<?php
/**
 * Description of indexControllerClass
 *
 * @author Luis david sicua <xwhisper_dim@outlook.com>
 */
class usuHistorico extends controllerClass {
  
  static public function main() {
    
    viewClass::definirVista('usuarioPortal/usuariosCategoria', 'usuHistorico', null, 'html');
  }
}
