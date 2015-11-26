<?php
/**
 * Description of indexControllerClass
 *
 * @author Luis david sicua <xwhisper_dim@outlook.com>
 */
class panel extends controllerClass {
  
  static public function main() {
    
    viewClass::definirVista('usuariosPortal/panel', 'panel', null, 'html');
  }
}
