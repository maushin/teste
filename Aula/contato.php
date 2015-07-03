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
            
            <h1> Entre em contato</h1> <br>
            <p class="nome">
                <input type="text" id="nomeid" placeholder="Digite seu nome" required="required" name="nome"/> 
                       
            <label for="nomeid">Nome </label></p>
                
            <p class="fone">
                <input type="text" id="cfone"
                       placeholder="(xx)xx-xx-xx-xx" name="fone"/>
                <label for="cfone">Fone</label></p>
            
            <p>
                
                    <input type="email" id="cemail"  name="email" placeholder="fulano@email.com"/>
                <label for="cemail">Email</label></p>
            
            
            
            
            </div>
        </form>
      
        
    </body>
</html>
