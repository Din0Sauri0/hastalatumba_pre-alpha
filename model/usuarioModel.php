<?php
    class usuarioModel{
        private $PDO;
        public function __construct(){
            require_once("../data/conn.php");
            $conn = new DB();
            $this->PDO = $conn->conectar();
        }
        public function insertar($nombre, $alias, $email, $genero, $pass, $descripcion){
            $query = $this->PDO->prepare("INSERT INTO usuarios VALUES (null, :nombre, :alias, :email, :genero, :pass, :descripcion)");
            $query->bindParam(":nombre", $nombre);
            $query->bindParam(":alias", $alias);
            $query->bindParam(":email", $email);
            $query->bindParam(":genero", $genero);
            $query->bindParam(":pass", $pass);
            $query->bindParam(":descripcion", $descripcion);
            return ($query->execute()) ? $this->PDO->lastInsertId() : false;
        }
        public function update($genero, $alias, $descripcion, $email, $id){
            try{
                $query = $this->PDO->prepare("UPDATE usuarios SET genero=:genero, alias=:alias, descripcion=:descripcion, email=:email WHERE id_usuaio=:id");
                $query->bindParam(':genero', $genero);
                $query->bindParam(':alias', $alias);
                $query->bindParam(':descripcion', $descripcion);
                $query->bindParam(':email', $email);
                $query->bindParam(':id', $id);
                return ($query->execute()) ? true : false;
            }catch(PDOException $err){
                return $err->getMessage();
            }

        }
        public function login($email, $pass){
            $query = $this->PDO->prepare("SELECT * FROM usuarios WHERE email=:email AND pass=:pass");
            $query->bindParam(':email', $email);
            $query->bindParam(':pass', $pass);
            $query->execute();
            $res = $query->fetch(PDO::FETCH_OBJ);
            return $res;
        }
        public function userConfeciones($id_usuario){
            $query = $this->PDO->prepare("SELECT * FROM confeciones WHERE id_usuario_id=:id_usuario");
            $query->bindParam(':id_usuario', $id_usuario);
            $query->execute();
            $res = $query->fetchAll(PDO::FETCH_OBJ);
            return $res;
        }
        public function getDataUser($id_usuario){
            $query = $this->PDO->prepare("SELECT * FROM usuarios WHERE id_usuario=:id_usuario");
            $query->bindParam(':id_usuario', $id_usuario);
            $query->execute();
            $res = $query->fetch(PDO::FETCH_OBJ);
            return $res;
        }
    }
?>