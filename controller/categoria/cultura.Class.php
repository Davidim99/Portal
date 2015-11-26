<?php
/**
 * Description of indexControllerClass
 *
 * @author Luis david sicua <xwhisper_dim@outlook.com>
 */
class cultura extends controllerClass {
  
  static public function main() {
    
    viewClass::definirVista('portal/categoria', 'cultura', null, 'html');
  }
}
