<?php
/**
 * Description of indexControllerClass
 *
 * @author Luis david sicua <xwhisper_dim@outlook.com>
 */
class historico extends controllerClass {
  
  static public function main() {
    
    viewClass::definirVista('portal/categoria', 'historico', null, 'html');
  }
}
