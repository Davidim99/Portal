<?php
namespace portalBuga2\model\base;
use portalFinal\fsModel as model;
use portalFinal\myConfig as config;
/**
 * Description of estadoBaseTable
 *
 * @author PIPENKI
 */
class estadoBaseTable extends model{
  const EST_ID = 'est_id';
  const EST_NOMBRE = 'est_nombre';
  const EST_NOMBRE_LENGTH = 50;
  const EST_CREATED_AT = 'est_created_at';
  const EST_UPDATED_AT = 'est_updated_at';
  
  
  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $est_id;
  private $est_nombre;
  private $est_created_at;
  private $est_updated_at;
  
  public function __construct(config $config, $est_id  = null, $est_nombre  = null,  $est_created_at = null, $est_update_at = null) {
    $this->config = $config;
    $this->est_id = $est_id;
    $this->est_nombre = $est_nombre;
    
    $this->est_created_at = $est_created_at;
    $this->est_updated_at= $est_updated_at;
  }
  public function getImg_id() {
    return $this->est_id;
  }
  public function getEve_id() {
    return $this->est_nombre;
  }
  public function getSit_id() {
    return $this->est_created_at;
  }
  public function getImg_ruta() {
    return $this->est_updated_at;
  }
  public function setImg_id($img_id) {
    $this->img_id = $est_id;
  }
  public function setEve_id($eve_id) {
    $this->eve_id = $est_nombre;
  }
  public function setSit_id($sit_id) {
    $this->sit_id = $est_created_at;
  }
  public function setImg_ruta($img_ruta) {
    $this->img_ruta = $est_updated_at;
  }
}
