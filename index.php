<?php
    #base de dados
    include 'db.php';

    #cabeçalho
    include 'header.php';

    #conteúdo da página
    if(isset($_GET['pagina'])){
        $pagina = $_GET['pagina'];
    }else{
        $pagina = 'home';
    }
    if($pagina == 'insert'){
        include 'views/insert.php';
    }else if($pagina == 'update'){
        include 'views/update.php';
    }else if($pagina == 'delete'){
        include 'views/delete.php';
    }else{
        include 'views/home.php'; 
    }
    

    #rodapé
    include 'footer.php';
