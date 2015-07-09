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
    <?php
    $conexao = mysql_connect('localhost', 'root', '');
    #  mysql_select_db('looktome');
    $banco = mysql_select_db('looktome', $conexao);
//abaixo configura acentuação para bd
    mysql_query('SET character_set_connection=utf8');
    mysql_query('SET character_set_client=utf8');
    mysql_query('SET character_set_results=utf8');
    ?>
    <body>

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
                        <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
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


        <!--LINHA ABAIXO    criação de  login e senha  e botão para visitante-->

        <form class="form-horizontal" method="post" id="fformulario" action="">

            <div class="boxlogin">
                
                <fieldset id="autenticar"> <legend>Indentifique a sua conta</legend>
                    
                    <div class="corpo">
                    <label class="form-control" for="login">
                        <span class="espan">Informe seu email</span>
                        <input type="text" name="txtlogin" id="login" placeholder="seuemail@seuprovedor.com">
                    </label>

                    

                    <div class="editbotao"> 
                    <label>  
                        <input class="form-control" type="hidden" name="acao" value="Enviar"/> 
                        <button type="submit"  class="btn btn-default btn-lg">
                            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Enviar
                        </button>
                    </label>

                    <label> 
                        
                    </div>
                    </div>
                </fieldset>
            </div>
        </form>
    </body>
</html>