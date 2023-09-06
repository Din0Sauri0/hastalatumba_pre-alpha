<?php
class confecionModel{
    private $PDO;
    public function __construct(){
        require_once('/xampp/htdocs/hastalatumba_pre-alpha/data/conn.php');
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
    public function delete($id){
        $query = $this->PDO->prepare("DELETE FROM confeciones WHERE id_confecion=:id");
        $query->bindParam(':id', $id);
        return ($query->execute()) ? true : false;
    }
    public function getConfecionById($id_confecion){
        try{
            $query = $this->PDO->prepare("SELECT * FROM confeciones WHERE id_confecion=:id");
            $query->bindParam(':id', $id_confecion);
            $query->execute();
            if($query->rowCount() > 0){
                return $query->fetch(PDO::FETCH_OBJ);
                //crear consulta para obtener el alias del usuario que publico y enviarlo como un objeto de objetos a la vista
            }else{
                return 'No se han encontrado resultado';
            }
        }catch(PDOException $err){
            return $err->getMessage();
        }
    }
}
?>