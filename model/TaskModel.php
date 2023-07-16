<?php
class TaskModel{
    private $PDO;
    public function __construct(){
        require_once __DIR__ . ("/../config/Database.php");
        $conn = new Database();
        $this->PDO = $conn->conexion();
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

}


?>