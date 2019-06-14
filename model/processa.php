<?php
    include "../db.php";
    $pdo = conectar();

    $descricao = $_POST['descricao'];
    $data = $_POST['data'];
    $usuario = $_POST['usuario'];

    $insert = $pdo->prepare("INSERT INTO tarefas(descricao, data, usuario) VALUES(:descricao, :data, :usuario) ");
    $insert->bindValue(":descricao", $descricao);
    $insert->bindValue(":data", $data);
    $insert->bindValue(":usuario", $usuario);
    $insert->execute();

    echo 'sucesso '.$descricao.' '.$data.' '.$usuario;

?>
