<?php
class TaskModel{
    private $PDO;
    public function __construct(){
        require_once __DIR__ . ("/../database/DatabaseConnection.php");
        $conn = new DatabaseConnection();
        $this->PDO = $conn->connection();
    }
    public function insertar($title,$description, $date_create){
        $stament = $this->PDO->prepare("INSERT INTO tasks(title, description, date_create) VALUES(:title,:description, :date_create)");
        $stament->bindParam(":title",$title);
        $stament->bindParam(":description",$description);
        $stament->bindParam(":date_create",$date_create);
        return($stament->execute()) ? $this->PDO->lastInsertId() : false;

    }
    public function show($id){
        $stament = $this->PDO->prepare("SELECT * FROM tasks where id = :id limit 1");
        $stament->bindParam(":id",$id);
        return ($stament->execute()) ? $stament->fetch() : false;
    }
    public function index(){
        $stament = $this->PDO->prepare("SELECT * FROM tasks");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function update($id,$title,$description){
        $stament = $this->PDO->prepare("UPDATE tasks SET title = :title, description = :description WHERE id = :id");
       
        $stament->bindParam(":id",$id);
        $stament->bindParam(":title",$title);
        $stament->bindParam(":description",$description);
        return ($stament->execute()) ? $id : false;
    }
    public function delete($id){
        $stament = $this->PDO->prepare("DELETE FROM tasks WHERE id = :id");
        $stament->bindParam(":id",$id);
        return ($stament->execute()) ? true : false;
    }
}

?>