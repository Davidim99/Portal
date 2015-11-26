<?php
/**
 * Description of indexControllerClass
 *
 * @author Luis david sicua <xwhisper_dim@outlook.com>
 */
class categorias extends controllerClass {
  
  static public function main() {
    
    viewClass::definirVista('portal/categoria', 'categorias', null, 'html');
  }
}
