<?php
use portalFinal\model\base\datoUsuarioBaseTable;
/**
 * Description of datoUsuarioTable
 *
 * @author luis david sicua 
 */
class datoUsuarioTable extends datoUsuarioBaseTable {
  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT dus_id, usu_id, dus_nombre, dus_apellido, dus_correo, dus_genero, dus_fecha_nacimiento, dus_facebook, dus_twitter, dus_google_plus, dus_avatar, dus_create_at, dus_updated_at, dus_deleted_at FROM bdp_dato_usuario';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }
  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT dus_id, usu_id, dus_nombre, dus_apellido, dus_correo, dus_genero, dus_fecha_nacimiento, dus_facebook, dus_twitter, dus_google_plus, dus_avatar, dus_create_at, dus_updated_at, dus_deleted_at FROM bdp_dato_usuario WHERE dus_id = :id';
    $params = array(
        ':id' => ($id !== null)
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }
  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bdp_dato_usuario (user_name, password, actived, last_login_at) VALUES (:user_name, :password, :actived, :last_login_at)';
    $params = array(
        ':user_name' => $this->getUserName(),
        ':password' => $this->getPassword(),
        ':actived' => $this->getActived(),
        ':last_login_at' => $this->getLastLoginAt()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return $conn->lastInsertId(self::_SEQUENCE);
  }
  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE usuario SET user_name = :user_name, password = :password, actived = :actived, last_login_at = :last_login_at WHERE id = :id';
    $params = array(
        ':user_name' => $this->getUserName(),
        ':password' => $this->getPassword(),
        ':actived' => $this->getActived(),
        ':last_login_at' => $this->getLastLoginAt(),
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }
    public function delete($deleteLogical = true) {
    $conn = $this->getConnection($this->config);
    $params = array(
        ':id' => $this->getId()
    );
    switch ($deleteLogical) {
      case true:
        $sql = 'UPDATE usuario SET deleted_at = now() WHERE id = :id';
        break;
      case false:
        $sql = 'DELETE FROM usuario WHERE id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }
}
