<?php
    try {
        require_once(__DIR__.'/../helpers/Connect.php');
    } catch (Exception $e) {
        echo($e->getMessage());
    }
class Files extends Connect {
    public $id;
    public $local;
    public $titulo;
    public $description;
    public $autor;
    function __construct($attributes = array()) {
        if (!empty($attributes)) {
            $this->id = array_key_exists('id', $attributes) ? $attributes['id'] : null;
            $this->local = array_key_exists('local', $attributes) ? $attributes['local'] : null;
            $this->titulo = array_key_exists('titulo', $attributes) ? $attributes['titulo'] : null;
            $this->description = array_key_exists('description', $attributes) ? $attributes['description'] : null;
            $this->autor = array_key_exists('autor', $attributes) ? $attributes['autor'] : null;
        }
    }
    public function insert() {
        $pdo = static::start();
        $sth = $pdo->prepare("INSERT INTO arquivo (local, titulo, autor, description) VALUES (:local, :titulo, :autor, :description)");
        $sth->BindValue(':local', $this->local, PDO::PARAM_STR);
        $sth->BindValue(':titulo', $this->titulo, PDO::PARAM_STR);
        $sth->BindValue(':description', $this->description, PDO::PARAM_STR);
        $sth->BindValue(':autor', $this->autor, PDO::PARAM_STR);
        return $sth->execute();
    }
    public function select($id) {
        $pdo = static::start();
        $sth = $pdo->prepare("SELECT id, local, titulo, description, autor FROM arquivo WHERE id=:id");
        $sth->BindValue(':id', $id, PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetch(PDO::FETCH_OBJ);
    }
    public function selectById($id) {
        $pdo = static::start();
        $sth = $pdo->prepare("SELECT id, local, titulo, description, autor FROM arquivo WHERE autor=:id");
        $sth->BindValue(':id', $id, PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_OBJ);
    }

    public static function selectLasts() {
        $connect = static::start();
        $stm = $connect->query("SELECT * FROM arquivo ORDER BY id DESC LIMIT 6");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }


    public static function selectAll() {
        $connect = static::start();
        $stm = $connect->query("SELECT * FROM arquivo ORDER BY name");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }

    public function delete() {
        $pdo = static::start();
        $sth = $pdo->prepare("DELETE FROM users WHERE id=:id");
        $sth->BindValue(':id', $this->id, PDO::PARAM_INT);
        return $sth->execute();
    }
}
?>
