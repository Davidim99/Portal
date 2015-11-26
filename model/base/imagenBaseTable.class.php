<?php

namespace portalFinal\model\base;

use portalFinal\fsModel as model;
use portalFinal\myConfig as config;

/**
 * Description of imagenBaseTable
 *
 * @author luis david sicua 
 */
class imagenBaseTable extends model{

  const IMG_ID = 'img_id';
  const EVE_ID = 'eve_id';
  const SIT_ID = 'sit_id';
  const IMG_RUTA = 'img_ruta';
  const IMG_CREATED_AT = 'img_created_at';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $img_id;
  private $eve_id;
  private $sit_id;
  private $img_ruta;
  private $img_created_at;
  
  public function __construct(config $config, $img_id  = null, $eve_id  = null, $sit_id  = null, $img_ruta = null, $img_created_at = null) {
    $this->config = $config;
    $this->img_id = $img_id;
    $this->eve_id = $eve_id;
    $this->sit_id = $sit_id;
    $this->img_ruta = $img_ruta;
    $this->img_created_at = $img_created_at;
  }
  public function getImg_id() {
    return $this->img_id;
  }

  public function getEve_id() {
    return $this->eve_id;
  }

  public function getSit_id() {
    return $this->sit_id;
  }

  public function getImg_ruta() {
    return $this->img_ruta;
  }

  public function getImg_created_at() {
    return $this->img_created_at;
  }

  public function setImg_id($img_id) {
    $this->img_id = $img_id;
  }

  public function setEve_id($eve_id) {
    $this->eve_id = $eve_id;
  }

  public function setSit_id($sit_id) {
    $this->sit_id = $sit_id;
  }

  public function setImg_ruta($img_ruta) {
    $this->img_ruta = $img_ruta;
  }

  public function setImg_created_at($img_created_at) {
    $this->img_created_at = $img_created_at;
  }

}
