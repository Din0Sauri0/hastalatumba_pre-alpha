<?php
    require_once("../controller/usuarioController.php");
    $usuario = new usuarioController();
    $usuario->login($_POST['email'], $_POST['pass']);
?>