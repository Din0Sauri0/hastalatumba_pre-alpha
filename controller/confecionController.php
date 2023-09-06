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
    public function delete($id){
        $res = $this->model->delete($id);
        return ($res != false) ? header('Location: ../perfil/index.php') : 'error';
    }
    public function getConfecionById($id_confecion){
        try{
            $res = $this->model->getConfecionById($id_confecion);
            return $res;
        }catch(Exception $err){
            return $err->getMessage();
        }
        
    
    }
}
?>