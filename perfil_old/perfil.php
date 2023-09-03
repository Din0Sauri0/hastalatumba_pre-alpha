<?php
    session_start();
    include_once('../controller/usuarioController.php');
    $controller = new usuarioController();
    $res = $controller->userConfeciones($_SESSION['id_usuario']);
    $dataUser = $controller->getDataUser($_SESSION['id_usuario']);
?>