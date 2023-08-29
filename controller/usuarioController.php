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
            return ($id!=false) ? header('Location:registro.php') : 'false';
        }
        public function login($email, $pass){
            $res = $this->model->login($email, $pass);
            if($res == false){
                return header('Location: form.php');
            }else{
                $_SESSION['usuario'] = $res->id_usuario;
                return header('Location: registro.php');
            }
            
            
        }
    }
?>