<?php
class dashModel{
    private $PDO;
    public function __construct(){
        require_once('/xampp/htdocs/hastalatumba_pre-alpha/data/conn.php');
        $conn = new DB();
        $this->PDO = $conn->conectar();
    }
    public function dashHomeData(){
        try{
            $query = $this->PDO->prepare('SELECT count(*) FROM confeciones');
            $query->execute();
            $dashHomeData = array();
            if($query->rowCount() > 0){
                $dashHomeData['confeciones'] = $query->fetchColumn();
                $query = $this->PDO->prepare('SELECT count(*) FROM usuarios');
                $query->execute();
                if($query->rowCount() > 0){
                    $dashHomeData['usuarios'] = $query->fetchColumn();
                    $query = $this->PDO->prepare("SELECT * FROM confeciones ORDER BY id_confecion DESC LIMIT 5");
                    $query->execute();
                    if($query->rowCount() > 0){
                        $dashHomeData['confecionesLastFive'] = $query->fetchAll(PDO::FETCH_OBJ);
                        $query = $this->PDO->prepare("SELECT * FROM usuarios ORDER BY id_usuario DESC LIMIT 5");
                        $query->execute();
                        if($query->rowCount() > 0){
                            $dashHomeData['usuariosLastFive'] = $query->fetchAll(PDO::FETCH_OBJ);
                            return $dashHomeData;
                        }
                    }
                    
                }else{
                    return 'Lo sentimos, ha ocurrido un error';
                }
            }else{
                return 'Lo sentimos, ha ocurrido un error';
            }
        }catch(PDOException $err){
            return $err->getMessage();
        }
    }
}

?>