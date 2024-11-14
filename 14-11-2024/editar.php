<?php
require "./funcoes.php";

$tarefas = ListarTarefa();

$tarefa = $tarefas

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="./images/list.ico">
    <title>To Do Edit</title>
</head>
    <body>
      <div class="content">
        <u><h1><i class="bi bi-card-heading"></i></i>To Do Edit:</h1></u>

        <form action="./atualizar.php" class="form">
          <label for="todo">Tarefa:</label>
          <input type="text" name="todo" value="">
          
          <label for="status">Status:</label>
          <input type="text" name="status">

          <button type="submit">Enviar</button>
        </form>

    </body>
</html>