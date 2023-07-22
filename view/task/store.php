<?php
    require_once __DIR__ . ("/../../controller/TaskController.php");
    $obj = new TaskController();
    $obj->guardar($_POST['title'], $_POST['description'],$_POST['date_create'],$_POST['status']);
    //echo ($_POST['title'], $_POST['description'], $_POST['date_create']);
?>