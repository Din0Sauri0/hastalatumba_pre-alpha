<?php
    session_start();
    require_once("../controller/confecionController.php");
    $confecion = new confecionController();
    $confecion->registrar($_POST['titulo'], $_POST['categoria'], $_POST['confecion'], $_SESSION['id_usuario']);
?>