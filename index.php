        <!DOCTYPE html>
<!--
Aplicação BootStrap utilizar o Downloadfornecido do site:
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
    
    <body id="index">
        
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
        
        <!-- inicio do Carrousel -->
        
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
  </ol> -->

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div id="item" class="item active">
      <img class="imgcarro" src="imagens/carrosel/9.png"  alt="logo look">
    </div>

    <div class="item">
     <img class="imgcarro" src="imagens/carrosel/Looklogotipo.png" alt="logo look 3">
    </div>

    <div class="item">
    <img class="imgcarro" src="imagens/carrosel/amareloalvo.png"  alt="logo look 10">
    </div>

    <div class="item">
 <img class="imgcarro" src="imagens/carrosel/branco.png"  alt="logo look 6">
    </div>
      
       <div class="item">
    <img class="imgcarro" src="imagens/carrosel/favicon3.png" alt="logo raposa look">
    </div>
      
       <div class="item">
    <img class="imgcarro" src="imagens/carrosel/favicon3061715-1828.png" alt="favicon look">
    </div>
        <div class="item">
    <img class="imgcarro" src="imagens/carrosel/favicon4.png" alt="favicon look">
    </div>
        <div class="item">
    <img class="imgcarro"  src="imagens/carrosel/favicon5.png" alt="favicon look">
    </div>
   
        <div class="item">
    <img class="imgcarro" src="imagens/carrosel/lo5.png" alt="favicon look">
    </div>
         <div class="item">
    <img class="imgcarro"  src="imagens/carrosel/teste.png" alt="favicon look">
    </div>
         <div class="item">
    <img class="imgcarro"  src="imagens/carrosel/vermelho.png" alt="favicon look">
    </div>
         <div class="item">
    <img class="imgcarro"  src="imagens/carrosel/vermelho0alvo.png" alt="favicon look">
    </div>
  </div><!-- fim do wrapper efeito carrousel-->

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        
     <!-- <footer class="footer">
        <p>&LookTome; Company 2015</p>
      </footer> -->


        
    </body>
</html>
  