<?php
session_start();
try {
    require_once('../models/comments.php');
} catch (Exception $e) {
    echo($e->getMessage());
}
    if (isset($_POST)) {
        $action = $_POST['action'];
        $_SESSION['msg'] = 'fail">Você não forneceu as informações obrigatórias.';
        $_POST['id_user'] = $_SESSION['user'];
        switch ($action) {
            case 'insert':
                if ($_POST['comentario']!="" && $_POST['id_user']!="" && $_POST['id_file']!="") {
                    $comentarios = new Comentarios($_POST);
                    $comentarios->insert();
                    $_SESSION['msg'] = 'fail">Usuário criaddo com sucesso, faça login!';
                    header('Location: ../views/verumtrabalho.php?id='.$_POST['id_file']);
                }
            break;
            case 'delete':
                $user = new User($_POST);
                $user->delete();
                header('Location: ../views/index.php');
            break;
        }
    }
?>
