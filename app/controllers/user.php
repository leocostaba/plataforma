<?php
try {
    require_once('../models/User.php');
} catch (Exception $e) {
    echo($e->getMessage());
}
    if (isset($_POST)) {
        $action = $_POST['action'];
        $_SESSION['msg'] = 'fail">Você não forneceu as informações obrigatórias.';
        switch ($action) {
            case 'insert':
                if ($_POST['name']!="" && $_POST['email']!="" && $_POST['password']!="" && ($_POST["password"] == $_POST["password2"])) {
                    $user = new User($_POST);
                    $user->insert();
                    $_SESSION['msg'] = 'fail">Usuário criaddo com sucesso, faça login!';
                    header('Location: ../views/index.php');
                }
            break;
            case 'delete':
                $user = new User($_POST);
                $user->delete();
                header('Location: ../views/index.php');
            break;
        }
        header('Location: ../views/index.php');
    }
?>
