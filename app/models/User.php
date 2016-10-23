<?php
    try {
        require_once(__DIR__.'/../helpers/Connect.php');
    } catch (Exception $e) {
        echo($e->getMessage());
    }
class User extends Connect {
    public $id;
    public $name;
    public $email;
    public $password;
    function __construct($attributes = array()) {
        if (!empty($attributes)) {
            $this->id = array_key_exists('id', $attributes) ? $attributes['id'] : null;
            $this->name = array_key_exists('name', $attributes) ? $attributes['name'] : null;
            $this->email = array_key_exists('email', $attributes) ? $attributes['email'] : null;
            $this->password = array_key_exists('password', $attributes) ? md5($attributes['password']) : null;
        }
    }
    public function insert() {
        $pdo = static::start();
        $sth = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
        $sth->BindValue(':name', $this->name, PDO::PARAM_STR);
        $sth->BindValue(':email', $this->email, PDO::PARAM_STR);
        $sth->BindValue(':password', $this->password, PDO::PARAM_STR);
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
