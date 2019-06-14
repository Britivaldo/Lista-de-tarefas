<?php
    include '../db.php';
    $pdo = conectar();

    $id = $_POST['id'];
    $descricao = $_POST['descricao'];
    $data = $_POST['data'];
    $usuario = $_POST['usuario'];

    $insert = $pdo->prepare(" UPDATE tarefas set descricao  = :descricao, data = :data, usuario = :usuario WHERE id = :id");
    $insert->bindValue(":id", $id);
    $insert->bindValue(":descricao", $descricao);
    $insert->bindValue(":data", $data);
    $insert->bindValue(":usuario", $usuario);
    $insert->execute();

    echo 'Atualizado com sucesso.'

?>