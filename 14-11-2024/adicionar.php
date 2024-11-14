<?php

require "./funcoes.php";

if (
  isset($_GET["todo"]) && !empty($_GET["todo"]) &&
  isset($_GET["status"]) && !empty($_GET["status"])
) {

  $todo = $_GET["todo"];
  $status = $_GET["status"];

  AdicionarTarefa($todo, $status);
  header("Location: ./index.php");
  exit;
}