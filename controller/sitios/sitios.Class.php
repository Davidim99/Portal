<?php
/**
 * Description of indexControllerClass
 *
 * @author Luis david sicua <xwhisper_dim@outlook.com>
 */
class sitios extends controllerClass {
  
  static public function main() {
    
    viewClass::definirVista('portal/sitios', 'sitios', null, 'html');
  }
}
