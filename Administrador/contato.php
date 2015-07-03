<!DOCTYPE html>   
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
 $link = mysql_connect('localhost', 'root', '');
 if (!$link)
     { die('Não foi possível conectar: ' . mysql_error()); }
 echo 'Conexão bem sucedida';

 ?>


<html>
  <head>
    <title>Look to me</title>

    <meta charset="UTF-8">
    <!-- abaixo um meta para ser encontrado pelo google-->
    <meta name="description" content="combinações de suas roupas acessando esse site">
    <!-- adicionado o favícon para a página-->
      <link rel="icon"  href="../imagens/logos/fav2">
       <!--A linha abaixo faz a linkagem para estilização do bootstrap-->
    <link href="../bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    
    <!-- linha abaixo faz chamada primeiro para jquery e depois para bootstrap -->
    <script src="../js/jquery.min.js" type="text/javascript"></script>
    <script src="../bootstrap-3.3.4-dist/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- linha abaixo faz linkagem com a estilização de fundo e estilo próprio -->
    <link href="../fundo.css" rel="stylesheet" type="text/css"/>
    <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
    <link href="../bootstrap-3.3.4-dist/css/estilo.css" rel="stylesheet" type="text/css"/>
</head>

    <body id="corpocontato">   
        
  


        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="bootstrap-3.3.4-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- menu superior-->

        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <a  href= "index.html" > 
        <img class="logo" src="imagens/logos/6.png" alt="Look To me"/>
              </a> 
        
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <!-- <a class="navbar-brand" href="#">Look To Me</a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Projeto</a></li>
         <li><a href="equipe.html">Equipe</a></li>
          <li><a href="contato.html">Contato</a></li>
       
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="cadastro.html"><span class="glyphicon glyphicon-user"></span> Cadastro</a></li>
        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="Administrador/restrito.html">Área restrita</a></li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> 
        <!-- criação de formulário de contato -->
        <form>
    
            <div class="box">
                <fieldset  id="Contusuario"><legend>Envie sua opinião/sugestão </legend>
                    <label for="cNome">Nome do usuário:</label>
                    <input type="text" name="txtNome" id="cNome" size="20" maxlength="45" placeholder="Nome completo">

                    <label for="cEmail">Email:</label>
                    <input type="text" name="txtEmail" id="cEmail" size="20" maxlength="55" placeholder="">
                    
                    <label for="cMsg">Mensagem:</label>
                    <textarea name="tMSg" id="cMsg" cols="50" rows="4" placeholder="Deixe aqui sua mengagem">
                         </textarea>

                    <label id="btncontato"> 
                        <button  type= "submit"  class="btn btn-default btn-lg">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true" ></span> Enviar 
                        </button>
                    </label>

                </fieldset>  
            </div>
        </form >    


        <div class="social">                    
            <ul>
                
                <li  class="social-bookmarks"><a target="_blank" href="http://"><img src="imagens/icones/fb8.png" alt="facebook"/></a></li>  
                <li  class="social-bookmarks"><a target="_blank" href="http://"> <img src="imagens/icones/insta.jpg" alt=""/></a></li>
                <li  class="social-bookmarks"><a target="_blank" href="http://"><img src="imagens/icones/twit.png" alt=""/></a></li>
                

                
            </ul><!-- END UL-->
        </div>

    </body>   
</html>
