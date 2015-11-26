<?php
namespace portalFinal\model\base;

use portalFinal\fsModel as model;
use portalFinal\myConfig as config;

/**
 * Description of datoUsuarioBaseTable
 *
 * @author luis david sicua
 */
class datoUsuarioBaseTable extends model {

  const DUS_ID = 'dus_id';
  const USU_ID = 'usu_id';
  const DUS_NOMBRE = 'dus_nombre';
  const DUS_NOMBRE_LENGTH = 80;
  const DUS_APELLIDOS = 'dus_apellidos';
  const DUS_APELLIDOS_LENGTH = 80;
  const DUS_CORREO = 'dus_correo';
  const DUS_CORREO_LENGTH = 100;
  const DUS_GENERO = 'dus_genero';
  const DUS_FECHA_NACIMIENTO = 'dus_fecha_nacimiento';
  const DUS_FACEBOOK = 'dus_facebook';
  const DUS_FACEBOOK_LENGTH = 80;
  const DUS_TWITTER = 'dus_twitter';
  const DUS_TWITTER_LENGTH = 80;
  const DUS_GOOGLE_PLUS = 'dus_google_plus';
  const DUS_FACEBOOK_LENGTH = 80;
  const DUS_AVATAR = 'dus_avatar';
  const DUS_CREATED_AT = 'dus_created_at';
  const DUS_UPDATED_AT = 'dus_updated_at';
  const DUS_DELETED_AT = 'dus_deleted_at';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $dus_id;
  private $usu_id;
  private $dus_nombre;
  private $dus_apellidos;
  private $dus_correo;
  private $dus_genero;
  private $dus_fecha_nacimiento;
  private $dus_facebook;
  private $dus_twitter;
  private $dus_google_plus;
  private $dus_avatar;
  private $dus_created_at;
  private $dus_updated_at;
  private $dus_deleted_at;

  public function __construct(config $config, $dus_id = null, $usu_id = null, $dus_nombre = null, $dus_apellidos = null, $dus_correo = null, $dus_genero = null, $dus_fecha_nacimiento = null, $dus_facebook = null, $dus_twitter = null, $dus_google_plus = null, $dus_avatar = null, $dus_created_at = null, $dus_updated_at = null, $dus_deleted_at = null) {
    $this->config = $config;
    $this->dus_id = $dus_id;
    $this->usu_id = $usu_id;
    $this->dus_nombre = $dus_nombre;
    $this->dus_apellidos = $dus_apellidos;
    $this->dus_correo = $dus_correo;
    $this->dus_genero = $dus_genero;
    $this->dus_fecha_nacimiento = $dus_fecha_nacimiento;
    $this->dus_facebook = $dus_facebook;
    $this->dus_twitter = $dus_twitter;
    $this->dus_google_plus = $dus_google_plus;
    $this->dus_avatar = $dus_avatar;
    $this->dus_created_at = $dus_created_at;
    $this->dus_updated_at = $dus_updated_at;
    $this->dus_deleted_at = $dus_deleted_at;
  }
  public function getDus_id() {
    return $this->dus_id;
  }

  public function getUsu_id() {
    return $this->usu_id;
  }

  public function getDus_nombre() {
    return $this->dus_nombre;
  }

  public function getDus_apellidos() {
    return $this->dus_apellidos;
  }

  public function getDus_correo() {
    return $this->dus_correo;
  }

  public function getDus_genero() {
    return $this->dus_genero;
  }

  public function getDus_fecha_nacimiento() {
    return $this->dus_fecha_nacimiento;
  }

  public function getDus_facebook() {
    return $this->dus_facebook;
  }

  public function getDus_twitter() {
    return $this->dus_twitter;
  }

  public function getDus_google_plus() {
    return $this->dus_google_plus;
  }

  public function getDus_avatar() {
    return $this->dus_avatar;
  }

  public function getDus_created_at() {
    return $this->dus_created_at;
  }

  public function getDus_updated_at() {
    return $this->dus_updated_at;
  }

  public function getDus_deleted_at() {
    return $this->dus_deleted_at;
  }

  public function setDus_id($dus_id) {
    $this->dus_id = $dus_id;
  }

  public function setUsu_id($usu_id) {
    $this->usu_id = $usu_id;
  }

  public function setDus_nombre($dus_nombre) {
    $this->dus_nombre = $dus_nombre;
  }

  public function setDus_apellidos($dus_apellidos) {
    $this->dus_apellidos = $dus_apellidos;
  }

  public function setDus_correo($dus_correo) {
    $this->dus_correo = $dus_correo;
  }

  public function setDus_genero($dus_genero) {
    $this->dus_genero = $dus_genero;
  }

  public function setDus_fecha_nacimiento($dus_fecha_nacimiento) {
    $this->dus_fecha_nacimiento = $dus_fecha_nacimiento;
  }

  public function setDus_facebook($dus_facebook) {
    $this->dus_facebook = $dus_facebook;
  }

  public function setDus_twitter($dus_twitter) {
    $this->dus_twitter = $dus_twitter;
  }

  public function setDus_google_plus($dus_google_plus) {
    $this->dus_google_plus = $dus_google_plus;
  }

  public function setDus_avatar($dus_avatar) {
    $this->dus_avatar = $dus_avatar;
  }

  public function setDus_created_at($dus_created_at) {
    $this->dus_created_at = $dus_created_at;
  }

  public function setDus_updated_at($dus_updated_at) {
    $this->dus_updated_at = $dus_updated_at;
  }

  public function setDus_deleted_at($dus_deleted_at) {
    $this->dus_deleted_at = $dus_deleted_at;
  }


}
