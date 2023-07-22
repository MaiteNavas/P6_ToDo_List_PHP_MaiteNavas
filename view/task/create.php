<?php 
require_once("../head/head.php");

?>
    <form action="./store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nueva tarea</label>
        <input type="text" name="title" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <label for="exampleInputEmail1" class="form-label">Descripción</label>
        <input type="text" name="description" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <label for="exampleInputEmail1" class="form-label">Fecha de creación</label>
        <input type="date" name="date_create" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <label for="exampleInputEmail1" class="form-label">Estado</label>
        <select id="status" name="status"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <option value="Sin empezar">Sin empezar</option>
            <option value="En progreso">En progreso</option>
            <option value="Terminada">Terminada</option>
        </select>
        <br><br>
        
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
    </form>

<?php 
require_once("../head/footer.php");

?>