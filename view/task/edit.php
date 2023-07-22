<?php
    //use Controller\TaskController;
    require_once("../head/head.php");
    require_once("../../controller/TaskController.php");

    $obj = new TaskController();
    $task = $obj->show($_GET['id']);


?>
<form action="update.php" method="post" autocomplete="off">
    <h2>Editar tarea</h2>
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
    <div class="col-sm-10">
      <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $task["id"]?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Tarea</label>
    <div class="col-sm-10">
      <input type="text" name="title" class="form-control" id="inputPassword" value="<?= $task["title"]?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Descripción</label>
    <div class="col-sm-10">
      <input type="text" name="description" class="form-control" id="inputPassword" value="<?= $task["description"]?>">
    </div>
  </div>
  <div>
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Fecha de creación</label>
    <div class="col-sm-10">
      <input type="text" name="date_create" readonly class="form-control-plaintext" id="staticEmail" value="<?= $task["date_create"]?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Estado</label>
    <div class="col-sm-10">
        <select id="status" name="status"class="form-control-plaintext" id="exampleInputEmail1" aria-describedby="emailHelp">
            <option value="Sin empezar">Sin empezar</option>
            <option value="En progreso">En progreso</option>
            <option value="Terminada">Terminada</option>
        </select>
    </div>
  </div>
  
    <input type="submit" value="Actualizar" class="btn btn-success">
    <a href="show.php?id=<?= $task["id"]?>" class="btn btn-danger">Cancelar</a>
  </div>
</form>


<?php
    require_once("../head/footer.php");

?>