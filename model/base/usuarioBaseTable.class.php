<?php

namespace portalFinal\model\base;

use portalFinal\fsModel as model;
use portalFinal\myConfig as config;

/**
 * Description of usuarioBaseTable
 *
 * @author luis david sicua
 */
class usuarioBaseTable extends model {

  const USU_ID = 'usu_id';
  const USU_USUARIO = 'usu_usuario';
  const USU_PASSWORD = 'usu_password';
  const USU_ACTIVADO = 'usu_activado';
  const ROL_ID = 'rol_id';
  const USU_CREATED_AT = 'usu_created_at';
  const USU_UPDATED_AT = 'usu_updated_at';
  const USU_DELETED_AT = 'usu_deleted_at';

  /**
   * Configuración del sistema
   * @var config
   */
  
  protected $config;
  private $usu_id;
  private $usu_usuario;
  private $usu_password;
  private $usu_activado;
  private $rol_id;
  private $usu_created_at;
  private $usu_updated_at;
  private $usu_deleted_at;

  public function __construct(config $config, $usu_id = null, $usu_usuario = null, $usu_password = null, $usu_activado = null, $rol_id = null, $usu_created_at = null, $usu_updated_at = null, $usu_deleted_at = null) {
    $this->config = $config;
    $this->usu_id = $usu_id;
    $this->usu_usuario = $usu_usuario;
    $this->usu_password = $usu_password;
    $this->usu_activado = $usu_activado;
    $this->rol_id = $rol_id;
    $this->usu_created_at = $usu_created_at;
    $this->usu_updated_at = $usu_updated_at;
    $this->usu_deleted_at = $usu_deleted_at;
  }
  public function getUsu_id() {
    return $this->usu_id;
  }

  public function getUsu_usuario() {
    return $this->usu_usuario;
  }

  public function getUsu_password() {
    return $this->usu_password;
  }

  public function getUsu_activado() {
    return $this->usu_activado;
  }

  public function getRol_id() {
    return $this->rol_id;
  }

  public function getUsu_created_at() {
    return $this->usu_created_at;
  }

  public function getUsu_updated_at() {
    return $this->usu_updated_at;
  }

  public function getUsu_deleted_at() {
    return $this->usu_deleted_at;
  }

  public function setUsu_id($usu_id) {
    $this->usu_id = $usu_id;
  }

  public function setUsu_usuario($usu_usuario) {
    $this->usu_usuario = $usu_usuario;
  }

  public function setUsu_password($usu_password) {
    $this->usu_password = $usu_password;
  }

  public function setUsu_activado($usu_activado) {
    $this->usu_activado = $usu_activado;
  }

  public function setRol_id($rol_id) {
    $this->rol_id = $rol_id;
  }

  public function setUsu_created_at($usu_created_at) {
    $this->usu_created_at = $usu_created_at;
  }

  public function setUsu_updated_at($usu_updated_at) {
    $this->usu_updated_at = $usu_updated_at;
  }

  public function setUsu_deleted_at($usu_deleted_at) {
    $this->usu_deleted_at = $usu_deleted_at;
  }


}
