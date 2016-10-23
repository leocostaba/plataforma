<?php
try {
    require_once('../models/Files.php');
} catch (Exception $e) {
    echo($e->getMessage());
}
    if (isset($_POST)) {
        $action = $_POST['action'];
        $_SESSION['msg'] = 'fail">Você não forneceu as informações obrigatórias.';
        switch ($action) {
            case 'insert':
                if ($_POST['title']!="" && $_POST['autor']!="" && $_$FILES["document"]) {
                    if ($_FILES['picture']['name']) {
                    	preg_match("/\.(pdf|ppt|pptx){1}$/i", $_FILES['document']["name"], $ext);
    					$document_name = md5(uniqid(time())) . "." . $ext[1];
    					$document_path = "../uploads/files/" . $document_name;
    					move_uploaded_file($_FILES['document']['tmp_name'], $document_path);
    					$user->image = $document_name;
                    }
                    $_POST['local'] = $document_name;
                    $user = new Files($_POST);
                    $user->insert();
                    $_SESSION['msg'] = 'fail">Arquivo enviado com sucesso!';
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
