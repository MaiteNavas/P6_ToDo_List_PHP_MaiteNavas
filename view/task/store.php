<?php
    use Controller\TaskController;
    require __DIR__ . '/../../vendor/autoload.php';
    //require_once __DIR__ . ("/../../controller/TaskController.php");
    $obj = new TaskController();
    $obj->store($_POST['title'], $_POST['description'],$_POST['date_create'],$_POST['status']);
    //echo ($_POST['title'], $_POST['description'], $_POST['date_create']);
?>