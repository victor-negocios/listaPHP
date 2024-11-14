<?php 


//Função Listar
function ListarTarefa(){
    require "./configuracao/config.php";

    $sql = "SELECT * FROM tarefas ORDER BY created_at DESC";
    $sql = $pdo->prepare($sql);
    $sql->execute();

    return $sql->fetchAll(PDO::FETCH_ASSOC);

}

//Função Adicionar
function AdicionarTarefa($todo, $status) {
    require "./configuracao/config.php";
  
    $sql = "INSERT INTO tarefas (todo, status) VALUES (:todo, :status)";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":todo", $todo);
    $sql->bindValue(":status", $status);
  
    $sql->execute();
  }

//Função Remover
function RemoverTarefa($id){
    require "./configuracao/config.php";

    $sql = "DELETE FROM tarefas WHERE id = :id";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":id", $id);
    $sql->execute();
}

//Funçõa Atualizar
function AtualizarTarefa($id){
    require "./configuracao/config.php";

    $todo = $_GET['todo'];
    $status = $_GET['status'];

    $sql = "UPDATE tarefas SET todo = $todo, status = $status WHERE id = :id;";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":id", $id);
    $sql->execute();
}