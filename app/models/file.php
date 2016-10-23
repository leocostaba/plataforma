<?php
    try {
        require_once(__DIR__.'/../helpers/Connect.php');
    } catch (Exception $e) {
        echo($e->getMessage());
    }
class User extends Connect {
    public $id;
    public $local;
    public $titulo;
    public $autor;
    function __construct($attributes = array()) {
        if (!empty($attributes)) {
            $this->id = array_key_exists('id', $attributes) ? $attributes['id'] : null;
            $this->local = array_key_exists('local', $attributes) ? $attributes['local'] : null;
            $this->titulo = array_key_exists('titulo', $attributes) ? $attributes['titulo'] : null;
            $this->autor = array_key_exists('autor', $attributes) ? $attributes['autor'] : null;
        }
    }
    public function insert() {
        $pdo = static::start();
        $sth = $pdo->prepare("INSERT INTO users (local, titulo, autor) VALUES (:local, :titulo, :autor)");
        $sth->BindValue(':local', $this->local, PDO::PARAM_STR);
        $sth->BindValue(':titulo', $this->titulo, PDO::PARAM_STR);
        $sth->BindValue(':autor', $this->autor, PDO::PARAM_STR);
        return $sth->execute();
    }
    public function select() {
        $pdo = static::start();
        $sth = $pdo->prepare("SELECT id, local FROM users WHERE id=:id LIMIT 1");
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
