<?php

session_start();

if (!isset($_POST["usuario"]) || empty($_POST["usuario"]) ||
    !isset($_POST["senha"]) || empty($_POST["senha"])) {

  header("Location: ./index.php");
}


$usuarios = [
  [
    "id" => "1",
    "usuario" => "admin",
    "senha" => "admin",
    "nome" => "Administrador",
    "permissao" => "admin"
  ],
  [
    "id" => "2",
    "usuario" => "joao_silva",
    "senha" => "senha123",
    "nome" => "João Silva",
    "permissao" => "user"
  ],
  [
    "id" => "3",
    "usuario" => "maria_oliveira",
    "senha" => "senha456",
    "nome" => "Maria Oliveira",
    "permissao" => "user"
  ],
  [
    "id" => "4",
    "usuario" => "carlos_souza",
    "senha" => "senha789",
    "nome" => "Carlos Souza",
    "permissao" => "user"
  ],
  [
    "id" => "5",
    "usuario" => "ana_pereira",
    "senha" => "senha101",
    "nome" => "Ana Pereira",
    "permissao" => "user"
  ],
  [
    "id" => "6",
    "usuario" => "lucas_santos",
    "senha" => "senha102",
    "nome" => "Lucas Santos",
    "permissao" => "user"
  ],
  [
    "id" => "7",
    "usuario" => "fernanda_moraes",
    "senha" => "senha103",
    "nome" => "Fernanda Moraes",
    "permissao" => "user"
  ],
  [
    "id" => "8",
    "usuario" => "ricardo_alves",
    "senha" => "senha104",
    "nome" => "Ricardo Alves",
    "permissao" => "user"
  ],
  [
    "id" => "9",
    "usuario" => "paula_rodrigues",
    "senha" => "senha105",
    "nome" => "Paula Rodrigues",
    "permissao" => "user"
  ],
  [
    "id" => "10",
    "usuario" => "gabriel_costa",
    "senha" => "senha106",
    "nome" => "Gabriel Costa",
    "permissao" => "user"
  ],
  [
    "id" => "11",
    "usuario" => "juliana_freitas",
    "senha" => "senha107",
    "nome" => "Juliana Freitas",
    "permissao" => "user"
  ]
];

foreach($usuarios as $usuario){
    if($_POST['usuario']==$usuario['usuario'] && $_POST['senha'] == $usuario['senha']){
        $_SESSION["usuario"] = ["nome" => $usuario["nome"], "permissao" => $usuario["permissao"] == "admin" ? true : false];
        header("Location: ./home.php");
        exit;
    }
}

header("Location: ./index.php");
exit;

?>

