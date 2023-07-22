<?php 
    //use Controller\TaskController;
    require_once("../../controller/TaskController.php");
    $obj = new TaskController();
    $obj->delete($_GET['id']);

?>