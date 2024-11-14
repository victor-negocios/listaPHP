<?php

require "./funcoes.php";

# Deletar notícia
if (isset($_GET["atualizar"]) && !empty($_GET["atualizar"])) {
  $id = $_GET["atualizar"];

  AtualizarTarefa($id);
  header("Location: ./index.php");
  exit;
}