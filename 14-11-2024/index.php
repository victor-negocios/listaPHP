<?php
require "./funcoes.php";

$tarefas = ListarTarefa();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/x-icon" href="./images/list.ico">
    <title>To Do List</title>
</head>
    <body>
      <div class="content">
        <u><h1><i class="bi bi-card-checklist"></i>To Do List:</h1></u>

        <form action="./adicionar.php" class="form">
          <label for="todo">Tarefa:</label>
          <input type="text" name="todo" style="width: 270px;">
          
          <label for="status">Status:</label>
          <input type="text" name="status">

          <button type="submit">Enviar</button>
        </form>
        <hr>
        
        <table class="table table-striped table-dark" style="text-align: center;">
          <thead>
            <tr>
              <td>Tarefa</td>
              <td>Status</td>
              <td>Criação</td>
              <td>Excluir</td>
              <td>Editar</td>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($tarefas as $tarefa): ?>
              <tr>
                <td><?= $tarefa["todo"] ?></td>
                <td><?= $tarefa["status"] ?>..</td>
                <td><?= $tarefa["created_at"] ?></td>
                <td><a href="./deletar.php?excluir=<?= $tarefa['id']?>">🗑️</a></td>
                <td><a href="./editar.php?atualizar=<?= $tarefa['id']?>"><i class="bi bi-pencil"></i></a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </body>
</html>