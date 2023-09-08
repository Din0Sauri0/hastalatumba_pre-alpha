<?php
class dashController{
    private $model;
    public function __construct(){
        require_once('/xampp/htdocs/hastalatumba_pre-alpha/model/dashModel.php');
        $this->model = new dashModel();
    }
    public function dashDataHome(){
        $data = $this->model->dashHomeData();
        return $data;
    }
}

?>