<?php
namespace portalBuga2\model\base;
use portalFinal\fsModel as model;
use portalFinal\myConfig as config;
/**
 * Description of imagenBaseTable
 *
 * @author PIPENKI
 */
class pqrsBaseTable extends model{
  const pqrsf_ID = 'pqrsf_id';
  const USU_ID = 'usu_id';
  const EST_ID = 'est_id';
  const pqrsf_MENSAJE = 'pqrsf_mensaje';
  const pqrsf_CREATED_AT = 'pqrsf_created_at';
  const pqrsf_UPDATED_AT = 'pqrsf_updated_at';
  const pqrsf_DELETED_AT = 'pqrsf_deleted_at';
  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $ipqrsf_id;
  private $usu_id;
  private $est_id;
  private $qrsf_mensaje;
  private $img_created_at;
  private $pqrsf_updated_at;
  private $pqrsf_deleted_at;
  
  function __construct(config $config, $ipqrsf_id, $usu_id, $est_id, $qrsf_mensaje, $img_created_at, $pqrsf_updated_at, $pqrsf_deleted_at) {
    $this->config = $config;
    $this->ipqrsf_id = $ipqrsf_id;
    $this->usu_id = $usu_id;
    $this->est_id = $est_id;
    $this->qrsf_mensaje = $qrsf_mensaje;
    $this->img_created_at = $img_created_at;
    $this->pqrsf_updated_at = $pqrsf_updated_at;
    $this->pqrsf_deleted_at = $pqrsf_deleted_at;
  }
  function getConfig() {
    return $this->config;
  }
  function getIpqrsf_id() {
    return $this->ipqrsf_id;
  }
  function getUsu_id() {
    return $this->usu_id;
  }
  function getEst_id() {
    return $this->est_id;
  }
  function getQrsf_mensaje() {
    return $this->qrsf_mensaje;
  }
  function getImg_created_at() {
    return $this->img_created_at;
  }
  function getPqrsf_updated_at() {
    return $this->pqrsf_updated_at;
  }
  function getPqrsf_deleted_at() {
    return $this->pqrsf_deleted_at;
  }
  function setConfig(config $config) {
    $this->config = $config;
  }
  function setIpqrsf_id($ipqrsf_id) {
    $this->ipqrsf_id = $ipqrsf_id;
  }
  function setUsu_id($usu_id) {
    $this->usu_id = $usu_id;
  }
  function setEst_id($est_id) {
    $this->est_id = $est_id;
  }
  function setQrsf_mensaje($qrsf_mensaje) {
    $this->qrsf_mensaje = $qrsf_mensaje;
  }
  function setImg_created_at($img_created_at) {
    $this->img_created_at = $img_created_at;
  }
  function setPqrsf_updated_at($pqrsf_updated_at) {
    $this->pqrsf_updated_at = $pqrsf_updated_at;
  }
  function setPqrsf_deleted_at($pqrsf_deleted_at) {
    $this->pqrsf_deleted_at = $pqrsf_deleted_at;
  }
}
