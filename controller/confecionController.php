<?php
class confecionController{
    private $model;
    public function __construct(){
        require_once('../model/confecionModel.php');
        $this->model = new confecionModel();
    }
    public function registrar($titulo, $categoria, $confecion, $id_usuario_id){
        $id = $this->model->insertar($titulo, $categoria, $confecion, $id_usuario_id);
        return ($id != false) ? header('Location: ../perfil/index.php') : 'false';
    }
}
?>