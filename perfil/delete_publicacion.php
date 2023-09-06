<?php
    require_once("../controller/confecionController.php");
    $confecion = new confecionController();
    $confecion->delete($_GET['id']);
?>