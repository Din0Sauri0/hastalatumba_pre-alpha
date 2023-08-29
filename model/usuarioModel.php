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
        public function login($email, $pass){
            $query = $this->PDO->prepare("SELECT * FROM usuarios WHERE email=:email AND pass=:pass");
            $query->bindParam(':email', $email);
            $query->bindParam(':pass', $pass);
            $query->execute();
            $res = $query->fetch(PDO::FETCH_OBJ);
            return $res;
            
            // return ($query->execute()) ? true : false ;
        }
    }
?>