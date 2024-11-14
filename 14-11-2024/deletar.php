<?php

require "./funcoes.php";

# Deletar notícia
if (isset($_GET["excluir"]) && !empty($_GET["excluir"])) {
  $id = $_GET["excluir"];

  RemoverTarefa($id);
  header("Location: ./index.php");
  exit;
}