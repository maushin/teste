<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>aula 23</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="combinações de suas roupas acessando esse site">
    <!-- adicionado o favícon para a página-->
      <link rel="icon"  href="../imagens/logos/fav2">
       <!--A linha abaixo faz a linkagem para estilização do bootstrap-->
    <link href="../bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    
    <!-- linha abaixo faz chamada primeiro para jquery e depois para bootstrap -->
    <script src="../js/jquery.min.js" type="text/javascript"></script>
    <script src="../bootstrap-3.3.4-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="styleaula.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <form name="meu-form">
            <div id="formulario">
            
          
                <h2> Validação de telefone</h2>
                <label for="cPhone">Telefone (formato:xx-xxxxx-xxxx)</label>
                <input  id="cPhone" type="tel" pattern="^\d{4}-\d{3}-\d{4}$" required="requerido">
                <input type="submit" value="Enviar">
                
                    
            
            
            
            </div>
        </form>
      
        
    </body>
</html>