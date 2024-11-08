<?php
require("./adicionar.php");

if(!session_start()){
    session_start();
}

if (!isset($_SESSION["todo"])) {
    $_SESSION["todo"] = [];
}  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de tarefas:</title>
</head>
<body>
    <center>
        <form action="./adicionar.php" method="POST">
            <input type="text" name="titulo" placeholder="Título..">
            <input type="text" name="descricao" placeholder="Descrição..">
            <input type="text" name="status" placeholder="Status..">
            <button type="submit">Enviar</button>
        </form>
        <table>
            <thead>
                <tr>
                    <td>Título</td>
                    <td>Descrição</td>
                    <td>Status</td>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($_SESSION["todo"] as $item): ?>
                    <tr>
                    <td <?= $item["id"] ?> </td>
                    <td><?= $item["titulo"] ?></td>
                    <td><?= $item["descricao"] ?></td>
                    <td><?= $item["status"] ?></td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </center>   
</body>
</html>