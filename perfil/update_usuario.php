<?php 
session_start();
require_once("../controller/usuarioController.php");
$usuario = new usuarioController();
$usuario->update($_POST['genero'], $_POST['alias'], $_POST['descripcion'], $_POST['email'], $_SESSION['id_usuario']);
?>