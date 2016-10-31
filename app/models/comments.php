<?php
    try {
        require_once(__DIR__.'/../helpers/Connect.php');
    } catch (Exception $e) {
        echo($e->getMessage());
    }
class User extends Connect {
    public $id;
    public $conteudo;
    public $data;
    public $horario;
    function __construct($attributes = array()) {
        if (!empty($attributes)) {
            $this->id = array_key_exists('id', $attributes) ? $attributes['id'] : null;
            $this->conteudo = array_key_exists('conteudo', $attributes) ? $attributes['conteudo'] : null;
            $this->data = array_key_exists('data', $attributes) ? $attributes['data'] : null;
            $this->horario = array_key_exists('horario', $attributes) ? $attributes['horario'] : null;
        }
    }
    public function insert() {
        $pdo = static::start();
        $sth = $pdo->prepare("INSERT INTO users (conteudo, data, horario) VALUES (conteudo, data, :horario)");
        $sth->BindValue(':conteudo', $this->conteudo, PDO::PARAM_STR);
        $sth->BindValue(':data', $this->data, PDO::PARAM_STR);
        $sth->BindValue(':horario', $this->horario, PDO::PARAM_STR);
        return $sth->execute();
    }
    public function select() {
        $pdo = static::start();
        $sth = $pdo->prepare("SELECT id, name FROM users WHERE id=:id LIMIT 1");
        $sth->BindValue(':id', $this->id, PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetch(PDO::FETCH_OBJ);
    }

    public function delete() {
        $pdo = static::start();
        $sth = $pdo->prepare("DELETE FROM users WHERE id=:id");
        $sth->BindValue(':id', $this->id, PDO::PARAM_INT);
        return $sth->execute();
    }
}
?>
