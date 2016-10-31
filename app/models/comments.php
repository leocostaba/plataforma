<?php
    try {
        require_once(__DIR__.'/../helpers/Connect.php');
    } catch (Exception $e) {
        echo($e->getMessage());
    }
class Comentarios extends Connect {
    public $id;
    public $comentario;
    public $id_user;
    public $id_file;

    function __construct($attributes = array()) {
        if (!empty($attributes)) {
            $this->id = array_key_exists('id', $attributes) ? $attributes['id'] : null;
            $this->comentario = array_key_exists('comentario', $attributes) ? $attributes['comentario'] : null;
            $this->id_user = array_key_exists('id_user', $attributes) ? $attributes['id_user'] : null;
            $this->id_file = array_key_exists('id_file', $attributes) ? $attributes['id_file'] : null;
            $this->arquivo_autor = array_key_exists('arquivo_autor', $attributes) ? $attributes['arquivo_autor'] : null;
        }
    }
    public function insert() {
        $pdo = static::start();
        $sth = $pdo->prepare("INSERT INTO comentarios (comentario, id_file, id_user, arquivo_autor) VALUES (:comentario, :id_file, :id_user, :arquivo_autor)");
        $sth->BindValue(':comentario', $this->comentario, PDO::PARAM_STR);
        $sth->BindValue(':id_file', $this->id_file, PDO::PARAM_INT);
        $sth->BindValue(':id_user', $this->id_user, PDO::PARAM_INT);
        $sth->BindValue(':arquivo_autor', $this->arquivo_autor, PDO::PARAM_INT);
        return $sth->execute();
    }
    public function selectAll($file) {
        $pdo = static::start();
        $sth = $pdo->prepare("SELECT c.comentario, u.name FROM comentarios c INNER JOIN users u ON u.id = c.id_user WHERE c.id_file = :id_file ORDER BY c.id DESC");
        $sth->BindValue(':id_file', $file, PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_OBJ);
    }

    public function delete() {
        $pdo = static::start();
        $sth = $pdo->prepare("DELETE FROM users WHERE id=:id");
        $sth->BindValue(':id', $this->id, PDO::PARAM_INT);
        return $sth->execute();
    }
}
?>
