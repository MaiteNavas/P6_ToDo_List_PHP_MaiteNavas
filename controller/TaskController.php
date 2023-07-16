<?php
class TaskController{
    private $model;
    public function __construct(){
        require_once __DIR__ .("./../model/taskModel.php");
        
        $this->model = new TaskModel();
    }
    public function guardar($title, $description, $date_create){
        $id = $this->model->insertar($title, $description, $date_create);
        return($id != false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
    }
    public function show($id){
        return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index-php");
    }

}
?>