<?php

/**
 * Description of modelClass
 *
 * @author luis david sicua
 */
class modelClass {

  private static $instance = null;

  /**
   * Obtenemos la instancia de la clase PDO
   * @return PDO
   */
  protected static function getConexion() {
    if (self::$instance === null) {

      //para usar conexiones persistentes
      $opciones = array(
          PDO::ATTR_PERSISTENT => true
      );

      //crea la instancia de la conexion
      self::$instance = new PDO(DSN, USER, PASS, $opciones);

      //la asignacion de atributos para el manejo de errores
      self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    return self::$instance;
  }

}
