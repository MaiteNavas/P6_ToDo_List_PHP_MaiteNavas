<?php 
    use Controller\TaskController;
    require __DIR__ . '/../../vendor/autoload.php';
    //require_once("../../controller/TaskController.php");
    $obj = new TaskController();
    $obj->update($_POST['id'], $_POST['title'], $_POST['description'],$_POST['status']);
?>