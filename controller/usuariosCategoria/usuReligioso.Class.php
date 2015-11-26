<?php
/**
 * Description of indexControllerClass
 *
 * @author Luis david sicua <xwhisper_dim@outlook.com>
 */
class usuReligioso extends controllerClass {
  
  static public function main() {
    
    viewClass::definirVista('usuarioPortal/usuariosCategoria', 'usuReligioso', null, 'html');
  }
}
