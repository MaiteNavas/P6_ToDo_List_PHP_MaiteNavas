<?php
    //use Controller\TaskController;
    require_once("../head/head.php");
    require_once("../../controller/TaskController.php");
    $obj = new TaskController();
    $date = $obj->show($_GET['id']);
    //print_r($date);

?>
<h2 class="text-center">DETALLES DEL REGISTRO</h2>
<div class="pb-3">
    <a href="../../index.php" class="btn btn-primary">Lista de tareas</a>
    <a href="edit.php?id=<?= $date["id"]?>" class="btn btn-success">Editar</a>
    <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar el registro?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Una vez eliminado no se podrá recuperar el registro
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                    <a href="delete.php?id=<?= $date["id"]?>" class="btn btn-danger">Eliminar</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<table class="table container-fluid">
    <thead>
        <tr>
            
            <th scope="col">TAREA</th>
            <th scope="col">DESCRIPCIÓN</th>
            <th scope="col">FECHA DE CREACIÓN</th>
            <th scope="col">ESTADO</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            
            <td scope="col"><?= $date["title"] ?></td>
            <td scope="col"><?= $date["description"] ?></td>
            <td scope="col"><?= $date["date_create"] ?></td>
            <td scope="col"><?= $date["status"] ?></td>
        </tr>
    </tbody>
</table>

<?php
    require_once("../head/footer.php");

?>