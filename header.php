<!DOCTYPE html>
<html>
    <head>
        <title>Lista de tarefa</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/estilo.css"/>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript">
            
            jQuery(document).ready(function(){
                jQuery('#form').submit(function(){
                    var dados = jQuery( this ).serialize();

                    jQuery.ajax({
                        type: "POST",
                        url: "model/processa.php",
                        data: dados,
                        success: function( data )
                        {
                            alert( data );
                        }
                    });
                    
                    return false;
                });
            });

            jQuery(document).ready(function(){
                jQuery('#from_update').submit(function(){
                    var dados = jQuery( this ).serialize();

                    jQuery.ajax({
                        type: "POST",
                        url: "model/update.php",
                        data: dados,
                        success: function( data )
                        {
                            alert( data );
                        }
                    });
                    
                    return false;
                });
            });

            jQuery(document).ready(function(){
                jQuery('#from_delete').submit(function(){
                    var dados = jQuery( this ).serialize();

                    jQuery.ajax({
                        type: "POST",
                        url: "model/delete.php",
                        data: dados,
                        success: function( data )
                        {
                            alert( data );
                        }
                    });
                    
                    return false;
                });
            });


        </script>


    </head>
    <body>
        <header>
            <div class="container">
                <h1>Lista de Tarefas</h1>
            </div>
        </header>

        <div id="conteudo" class="container">

