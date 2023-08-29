<?php
class confecionModel{
    private $PDO;
    public function __construct(){
        require_once('../data/conn.php');
        $conn = new DB();
        $this->PDO = $conn->conectar();
    }
    public function insertar($titulo, $categoria, $confecion, $id_usuario_id){
        $query = $this->PDO->prepare("INSERT INTO confeciones VALUES (null, :titulo, :categoria, :confecion, :id_usuario_id)");
        $query->bindParam(':titulo', $titulo);
        $query->bindParam(':categoria', $categoria);
        $query->bindParam(':confecion', $confecion);
        $query->bindParam(':id_usuario_id', $id_usuario_id);
        return ($query->execute()) ? $this->PDO->lastInsertId() : false;

    }
}
?>