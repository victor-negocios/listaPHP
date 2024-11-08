<?php 
session_start();

if (empty($_SESSION["usuario"]) || !isset($_SESSION["usuario"])) {
    header("Location: ./index.php");
  }

$admOpt = false;
if($_SESSION["usuario"]["permissao"] == "admin"){
    $admOpt = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <?php if($admOpt): 
        echo "<a href='./administracao.php'>Administração</a>";
    endif?>
    <h1> Seja bem-vindo, <?=$_SESSION["usuario"]["nome"]?></h1>
    <h3>Deseja sair? <a href="./signout.php">SignOut</a> </h3>
</body>
</html>