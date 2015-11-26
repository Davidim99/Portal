<?php

/**
 * Description of itinerario
 *
 * @author Luis david sicua <xwhisper_dim@outlook.com>
 */
class itinerario extends controllerClass {
  
  static public function main() {
    
    viewClass::definirVista('usuariosPortal', 'itinerario', null, 'html');
  }
}
