<?php
session_start();
try {
    require_once('../models/Files.php');
} catch (Exception $e) {
    echo($e->getMessage());
}
    if (isset($_POST)) {
        $action = $_POST['action'];
        $_SESSION['msg'] = 'fail">Você não forneceu as informações obrigatórias.';
        $_POST['autor'] = $_SESSION['user'];
        if (isset($_FILES['___']['name'])) {
            preg_match("/\.(pdf|ppt|pptx){1}$/i", $_FILES['___']["name"], $ext);
            $document_name = md5(uniqid(time())) . "." . $ext[1];
            if (($ext[1] !== "pdf") && ($ext[1] !== "pptx") && ($ext[1] !== "ppt")) {
                var_dump($ext);
                $_SESSION['msg'] = 'fail">Arquivo enviado é invalido!';
                $action ="";
            }
            $_POST['local'] = $document_name;
        }
        switch ($action) {
            case 'insert':
                if ($_POST['titulo']!="" && $_POST['description']!="" && $_POST['autor']!="") {
                    $document_path = "../uploads/files/" . $document_name;
                    move_uploaded_file($_FILES['___']['tmp_name'], $document_path);
                    $files = new Files($_POST);
                    $files->insert();
                    var_dump($_POST);
                    $_SESSION['msg'] = 'fail">Arquivo enviado com sucesso!';
                }
                header('Location: ../views/home.php');
            break;
            case 'delete':
                $user = new User($_POST);
                $user->delete();
                header('Location: ../views/index.php');
            break;
            default:
                header('Location: ../views/submeter.php');
        }
    }
?>
