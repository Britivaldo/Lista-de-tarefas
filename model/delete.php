<?php
    include '../db.php';
    
    $pdo = conectar();

    $id = $_POST['id'];

    $insert = $pdo->prepare("DELETE FROM tarefas WHERE id = :id ");
    $insert->bindValue(":id", $id);
    $insert->execute();

    echo 'excluido com sucesso.'

?>