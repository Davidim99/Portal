<?php

namespace portalBuga2\model\base;

use portalFinal\fsModel as model;
use portalFinal\myConfig as config;

/**
 * Description of sitioBaseTable
 *
 * @author PIPENKI
 */
class sitioBaseTable extends model {

  const SIT_ID = 'sit_id';
  const SIT_NOMBRE = 'sit_nombre';
  const SIT_NOMBRE_LENGTH = 80;
  const SIT_DESCRIPCION = 'sit_descripcion';
  const CAT_ID = 'cat_id';
  const SIT_DIRECCION = 'sit_direccion';
  const SIT_DIRECCION_LENGTH = 100;
  const SIT_TELEFONO = 'sit_telefono';
  const SIT_TELEFONON_LENGTH = 40;
  const SIT_LATITUD = 'sit_latitud';
  const SIT_LATITUD_LENGTH = 70;
  const SIT_LONGITUD = 'sit_longitud';
  const SIT_LONGITUD_LENGTH = 70;
  const EST_ID = 'est_id';
  const SIT_FACEBOOK = 'sit_facebook';
  const SIT_FACEBOOK_LENGTH = 80;
  const SIT_TWITER = 'sit_twiter';
  const SIT_TWITER_LENGTH = 80;
  const SIT_GOOGLE_PLUS = 'sit_google_plus';
  const SIT_GOOGLE_PLUS_LENGTH = 80;
  const SIT_CREATED_AT = 'sit_created_at';
  const SIT__UPDATED_AT = 'sit_updated_at';
  const SIT_DELETED_AT = 'sit_deleted_at';
  const SIT_USU_ID = 'usu_id';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $sit_id;
  private $sit_nombre;
  private $sit_descripcion;
  private $cat_id;
  private $sit_direccion;
  private $sit_telefono;
  private $sit_latitud;
  private $sit_longitud;
  private $est_id;
  private $sit_facebook;
  private $sit_twiter;
  private $sit_google_plus;
  private $sit_created_at;
  private $sit_updated_at;
  private $sit_deleted_at;
  private $usu_id;
  
  function __construct(config $config, $sit_id, $sit_nombre, $sit_descripcion, $cat_id, $sit_direccion, $sit_telefono, $sit_latitud, $sit_longitud, $est_id, $sit_facebook, $sit_twiter, $sit_google_plus, $sit_created_at, $sit_updated_at, $sit_deleted_at, $usu_id) {
    $this->config = $config;
    $this->sit_id = $sit_id;
    $this->sit_nombre = $sit_nombre;
    $this->sit_descripcion = $sit_descripcion;
    $this->cat_id = $cat_id;
    $this->sit_direccion = $sit_direccion;
    $this->sit_telefono = $sit_telefono;
    $this->sit_latitud = $sit_latitud;
    $this->sit_longitud = $sit_longitud;
    $this->est_id = $est_id;
    $this->sit_facebook = $sit_facebook;
    $this->sit_twiter = $sit_twiter;
    $this->sit_google_plus = $sit_google_plus;
    $this->sit_created_at = $sit_created_at;
    $this->sit_updated_at = $sit_updated_at;
    $this->sit_deleted_at = $sit_deleted_at;
    $this->usu_id = $usu_id;
  }
  function getConfig() {
    return $this->config;
  }

  function getSit_id() {
    return $this->sit_id;
  }

  function getSit_nombre() {
    return $this->sit_nombre;
  }

  function getSit_descripcion() {
    return $this->sit_descripcion;
  }

  function getCat_id() {
    return $this->cat_id;
  }

  function getSit_direccion() {
    return $this->sit_direccion;
  }

  function getSit_telefono() {
    return $this->sit_telefono;
  }

  function getSit_latitud() {
    return $this->sit_latitud;
  }

  function getSit_longitud() {
    return $this->sit_longitud;
  }

  function getEst_id() {
    return $this->est_id;
  }

  function getSit_facebook() {
    return $this->sit_facebook;
  }

  function getSit_twiter() {
    return $this->sit_twiter;
  }

  function getSit_google_plus() {
    return $this->sit_google_plus;
  }

  function getSit_created_at() {
    return $this->sit_created_at;
  }

  function getSit_updated_at() {
    return $this->sit_updated_at;
  }

  function getSit_deleted_at() {
    return $this->sit_deleted_at;
  }

  function getUsu_id() {
    return $this->usu_id;
  }

  function setConfig(config $config) {
    $this->config = $config;
  }

  function setSit_id($sit_id) {
    $this->sit_id = $sit_id;
  }

  function setSit_nombre($sit_nombre) {
    $this->sit_nombre = $sit_nombre;
  }

  function setSit_descripcion($sit_descripcion) {
    $this->sit_descripcion = $sit_descripcion;
  }

  function setCat_id($cat_id) {
    $this->cat_id = $cat_id;
  }

  function setSit_direccion($sit_direccion) {
    $this->sit_direccion = $sit_direccion;
  }

  function setSit_telefono($sit_telefono) {
    $this->sit_telefono = $sit_telefono;
  }

  function setSit_latitud($sit_latitud) {
    $this->sit_latitud = $sit_latitud;
  }

  function setSit_longitud($sit_longitud) {
    $this->sit_longitud = $sit_longitud;
  }

  function setEst_id($est_id) {
    $this->est_id = $est_id;
  }

  function setSit_facebook($sit_facebook) {
    $this->sit_facebook = $sit_facebook;
  }

  function setSit_twiter($sit_twiter) {
    $this->sit_twiter = $sit_twiter;
  }

  function setSit_google_plus($sit_google_plus) {
    $this->sit_google_plus = $sit_google_plus;
  }

  function setSit_created_at($sit_created_at) {
    $this->sit_created_at = $sit_created_at;
  }

  function setSit_updated_at($sit_updated_at) {
    $this->sit_updated_at = $sit_updated_at;
  }

  function setSit_deleted_at($sit_deleted_at) {
    $this->sit_deleted_at = $sit_deleted_at;
  }

  function setUsu_id($usu_id) {
    $this->usu_id = $usu_id;
  }


}
