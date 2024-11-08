<?php 

array_push($_SESSION["todo"],[
    "id" => uniqd(),
    "titulo" => $_POST["titulo"],
    "descricao" => $_POST["descricao"],
    "status" => $_POST["status"]
]);

