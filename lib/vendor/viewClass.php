
<?php

/**
 * Description of viewClass
 *
 * @author David
 */
class viewClass {

  static public function definirVista($modulo, $vista, $variables, $formato) {
    $vista = DIR . 'view/' . $modulo . '/' . $vista . 'View.' . $formato . '.php';


    if (file_exists($vista) === false) {
      throw new PDOException('La vista solicitada no existe');
    }
    
    if(is_array($variables) === true){
      extract($variables);
    }
    
    include_once $vista;
  }

}
