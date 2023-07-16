<?php
    require_once __DIR__ . ("/../../controller/taskController.php");
    $obj = new taskController();
    $obj->guardar($_POST['title'], $_POST['description'],$_POST['date_create']);
    //echo ($_POST['title'], $_POST['description'], $_POST['date_create']);

?>