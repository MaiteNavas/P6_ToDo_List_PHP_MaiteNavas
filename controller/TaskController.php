<?php
namespace Controller;
use Model\TaskModel;

class TaskController{
    private $model;
    public function __construct(){
        //require_once __DIR__ .("./../model/TaskModel.php");
        $this->model = new TaskModel();
    }
    public function store($title, $description, $date_create, $status){
        $id = $this->model->insert($title, $description, $date_create, $status);
        return($id != false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
    }
    public function show($id){
        return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:../../index-php");
    }
    public function index(){
        return ($this->model->index()) ? $this->model->index() : false;
    }
    public function update($id,$title,$description,$status){
        return ($this->model->update($id,$title,$description,$status) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");

    }
    public function delete($id){
        return ($this->model->delete($id)) ? header("Location:../../index.php") : header("Location:show.php?id=".$id);

    }
}
?>