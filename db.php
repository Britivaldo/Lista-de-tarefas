<?php
   #função de conexão com o Banco de dados
   function conectar(){
        try{ 
            $pdo = new PDO("mysql:host=localhost;dbname=database", "brito", "brito");
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        return $pdo;
   }
?>
