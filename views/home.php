<a href="?pagina=insert">inserir</a>
<a href="?pagina=update">atualizar</a>
<a href="?pagina=delete">excluir</a>

<table style="border:1px solid #ccc; width:100%; text-align: center;">
    <tr>
        <th>Id</th>
        <th>Descrição</th>
        <th>Data</th>
        <th>Usuário</th>
    </tr>
    
    <?php
        
        $pdo=conectar();
        $buscarusuarios = $pdo->prepare("SELECT * FROM tarefas");
        $buscarusuarios->execute();

        $dados = $buscarusuarios->fetchAll(PDO::FETCH_OBJ);

        foreach($dados as $item){
            echo '<tr><td>'.$item->id.'</td>';
            echo '<td>'.$item->descricao."</td>";
            echo '<td>'.$item->data."</td>";
            echo '<td>'.$item->usuario."</td></tr>";
        }
        

    ?>
</table>
