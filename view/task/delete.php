<?php 
    use Controller\TaskController;
    require __DIR__ . '/../../vendor/autoload.php';
    //require_once("../../controller/TaskController.php");
    $obj = new TaskController();
    $obj->delete($_GET['id']);

?>