<?php
/**
 * Description of indexControllerClass
 *
 * @author Luis david sicua <xwhisper_dim@outlook.com>
 */
class religioso extends controllerClass {
  
  static public function main() {
    
    viewClass::definirVista('portal/categoria', 'religioso', null, 'html');
  }
}
