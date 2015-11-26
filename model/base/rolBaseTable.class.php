<?php

namespace portalFinal\model\base;

use portalFinal\fsModel as model;
use portalFinal\myConfig as config;

/**
 * Description of rolBaseTable
 *
 * @author luis david sicua
 */
class rolBaseTable extends model {

  const ROL_ID = 'rol_id';
  const ROL_ROL = 'rol_rol';
  const ROL_CREATED_AT = 'rol_created_at';
  const ROL_UPDATED_AT = 'rol_updated_at';
  const ROL_DELETED_AT = 'rol_deleted_at';

  /**
   * Configuración del sistema
   * @var config
   */
  
  protected $config;
  private $rol_id;
  private $rol_rol;
  private $rol_created_at;
  private $rol_updated_at;
  private $rol_deleted_at;

  public function __construct(config $config, $rol_id = null, $rol_rol = null, $rol_created_at = null, $rol_updated_at = null, $rol_deleted_at = null) {
    $this->config = $config;
    $this->rol_id = $rol_id;
    $this->rol_rol = $rol_rol;
    $this->rol_created_at = $rol_created_at;
    $this->rol_updated_at = $rol_updated_at;
    $this->rol_deleted_at = $rol_deleted_at;
  }
  public function getRol_id() {
    return $this->rol_id;
  }

  public function getRol_rol() {
    return $this->rol_rol;
  }

  public function getRol_created_at() {
    return $this->rol_created_at;
  }

  public function getRol_updated_at() {
    return $this->rol_updated_at;
  }

  public function getRol_deleted_at() {
    return $this->rol_deleted_at;
  }

  public function setRol_id($rol_id) {
    $this->rol_id = $rol_id;
  }

  public function setRol_rol($rol_rol) {
    $this->rol_rol = $rol_rol;
  }

  public function setRol_created_at($rol_created_at) {
    $this->rol_created_at = $rol_created_at;
  }

  public function setRol_updated_at($rol_updated_at) {
    $this->rol_updated_at = $rol_updated_at;
  }

  public function setRol_deleted_at($rol_deleted_at) {
    $this->rol_deleted_at = $rol_deleted_at;
  }
   
}
