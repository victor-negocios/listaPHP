<?php

session_start();

if(!$_SESSION["usuario"]["permissao"]){
    header("Location: ./home.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./home.php">Voltar</a>
    <u><h1>Pág. Administrador</h1></u>
</body>
</html>