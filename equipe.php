<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
      <head>
        
        <title>Look to me</title>
        <!-- linha abaixo cria responsive para movel-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <!-- abaixo um meta para ser encontrado pelo google-->
        <meta name="description" content="combinações de suas roupas acessando esse site">
                  <!-- adicionado o ícone para o site -->
            <link rel="icon" href="imagens/logos/fav2.png" >
        <!-- abaixo faz chamada o js e o boot do js para efeito do boot -->
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="bootstrap-3.3.4-dist/js/bootstrap.min.js" type="text/javascript"></script>
     <!-- abaixo lik de estilização -->
     <link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
     <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
     <link href="css/fundo.css" rel="stylesheet" type="text/css"/>
    </head>
    
    <body id="equipe">
        
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="bootstrap-3.3.4-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- menu superior-->
        
      <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <a  href= "index.php" > 
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
          <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="projeto.php">Projeto</a></li>
        <li><a href="equipe.php">Equipe</a></li>
        <li><a href="contato.php">Contato</a></li>
       
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        
          <li><a href="cadastro.php"><span class="glyphicon glyphicon-user"></span> Cadastro</a></li>
          <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="Administrador/restrito.php">Área restrita</a></li>
      </ul>
        
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>   
        <!-- artigo do site -->
        <section class="quadro">
        <p> A equipe é composta por  alunos com os tipos de perfis que são:</p>
       
        <ul type="square">
            <!--
            unordered list
            type=disc - padrão bolinha
            type=circle- bolinha vazia
            type=square- quadrado-->
            
            <li>Gerente de Projeto</li>
            <li>Designer</li>
            <li> Front End</li>
            <li>  Back End</li>
                </ul>
        <p>O gerente de projeto terá as seguintes funcões
        </p>
        
        <ol type="I">
            <!--
            ordered list
            Alguns atributos do type são:
            type="1" - padrão em números
            type="A" - ordem alfabetica em maiúsculo
            type="a" - ordem alfabetica em minúsculo
            type="I" -  Algarismo romano-->
            <li>Criação do <a href="#">Escopo</a> do Projeto</li>
            <li>Acompanamento do <a href="#" >Cronograma</a></li>
            <li>Acompanhamento da Documentação</li>
            <li>Contato com <a href="#"> time</a></li>
             <li>final</li>
            
        </ol>
         
        </section>
           
        
    </body>
</html>
