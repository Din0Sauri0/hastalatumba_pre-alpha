<?php
    session_start();
    class usuarioController{
        private $model;
        public function __construct(){
            require_once('../model/usuarioModel.php');
            $this->model = new usuarioModel();
        }
        public function registrar($nombre, $alias, $email, $genero, $pass, $descripcion){
            $id = $this->model->insertar($nombre, $alias, $email, $genero, $pass, $descripcion);
            return ($id!=false) ? header('Location:registro.php') : false;
        }
        public function login($email, $pass){
            $res = $this->model->login($email, $pass);
            if($res == false){
                return header('Location: form.php');
            }else{  
                $_SESSION["id_usuario"] = $res->id_usuario;
                return header('Location: ../perfil/index.php');
            }
        }
        public function userConfeciones($id_usuario){
            $res = $this->model->userConfeciones($id_usuario);
            return $res;
        }
        public function getDataUser($id_usuario){
            $res = $this->model->getDataUser($id_usuario);
            return $res;
        }
    }
?>