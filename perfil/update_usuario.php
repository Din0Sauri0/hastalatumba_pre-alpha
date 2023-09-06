<?php 
session_start();
require_once("../controller/usuarioController.php");
$usuario = new usuarioController();
$usuario->update($_POST['alias'], $_POST['email'], $_POST['genero'], $_POST['descripcion'], $_SESSION['id_usuario']);
?>