<?php
    require_once("../controller/usuarioController.php");
    $usuario = new usuarioController();
    $usuario->registrar($_POST['nombre'], $_POST['alias'], $_POST['email'], $_POST['genero'], $_POST['pass'], $_POST['descripcion']);
    
?>