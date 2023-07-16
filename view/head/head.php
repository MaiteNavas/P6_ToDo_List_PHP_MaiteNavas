<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo List Php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid bg-dark p-2 mb-3">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <div class="container-fluid">
                <a class="navbar-brand" href="/Fem-Coders/P6_ToDo_List_PHP_MaiteNavas/index.php">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tareas
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/Fem-Coders/P6_ToDo_List_PHP_MaiteNavas/view/task/index.php">Tareas</a></li>
                            <li><a class="dropdown-item" href="/Fem-Coders/P6_ToDo_List_PHP_MaiteNavas/create.php">Agregar nueva tarea</a></li>
                        </ul>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
    