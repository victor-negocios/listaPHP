<?php
    require "./validacoes.php";

if (isset($_GET['idade']) && !empty($_GET['idade']) && isset($_GET['genero']) && !empty($_GET['genero']) && isset($_GET['jaFez']) && !empty($_GET['jaFez'])){
    $mensagem = ValidaObrigatoriedade($_GET["idade"], $_GET['genero'], $_GET['jaFez']);
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
    <form action="./index.php">
        <label for="idade">Idade:</label>
        <input type="number" name="idade"> <br>
        <label for="genero">Genero:</label>
        <select name="genero">
            <option value=""></option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
        </select><br>
        
        <label for="jaFez">Já se alistou?</label>
        <input type="checkbox" name="jaFez"/>
        <br>

        <button type="submit">Registrar</button>
    </form>
        
    <?php if(isset($mensagem)): ?>
      <p><?=$mensagem?></p>
    <?php endif ?>

</body>
</html>

