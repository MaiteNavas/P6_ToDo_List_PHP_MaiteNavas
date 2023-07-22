<?php
    require_once("./view/head/head.php");
    require_once("./controller/TaskController.php");  

    $obj = new TaskController();
    $rows = $obj->index();
?>
<div class="mb-3">
    <a href="./view/task/create.php" class="btn btn-primary">Agregar nueva tarea</a>
</div>


<table class="table">
    <thead>
        <tr>
            <th colspan="6" class="text-center"><b>LISTA DE TAREAS</b></th>
           
        </tr>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">TAREA</th>
            <th scope="col">DESCRIPCIÓN</th>
            <th scope="col">FECHA DE CREACIÓN</th>
            <th scope="col">ESTADO</th>
            <th scope="col">ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        <?php if($rows): ?>
            <?php foreach($rows as $row): ?>
                <tr>
                    <th><?=$row["id"] ?></th>
                    <th><?=$row["title"] ?></th>
                    <th><?=$row["description"] ?></th>
                    <th><?=$row["date_create"] ?></th>
                    <th><?=$row["status"] ?></th>
                    <th>
                        <a href="./view/task/show.php?id=<?= $row["id"]?>" class="btn btn-primary">Ver</a>
                        <a href="./view/task/edit.php?id=<?= $row["id"]?>" class="btn btn-success">Editar</a>
                        <!-- Button trigger modal -->
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar la tarea?</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Una vez eliminado no se podrá recuperar la tarea
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                                        <a href="./view/task/delete.php?id=<?= $row["id"]?>" class="btn btn-danger">Eliminar</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </th>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6" class="text-center">No hay registros</td>
            </tr>
        <?php endif; ?>
    </tbody>

</table>

<?php
    require_once("./view/head/footer.php");
?>