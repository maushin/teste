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
 $banco=mysql_select_db('looktome',$conexao);
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


        <!--LINHA ABAIXO    criação de  login e senha  e botão para visitante-->
        
        <form method="post" id="fContato" action="">

            <div class="box">
                <fieldset id="autenticar">
                    <label for="login">
                        <span class="espan">Login</span>
                        <input type="text"
                               name="txtlogin"
                               id="login"
                               placeholder="informe seu login ">
                    </label>
                    <label for="senha">
                        <span class="espan">Senha</span>
                        <input type="password"
                               name="txtsenha"
                               id="senha"
                               placeholder="">
                    </label>
                    <div class="editbotao"
                        
                    <label> 
                        <input type="hidden" name="acao" value="login"/> 
                        <button type="submit"  class="btn btn-default btn-lg">
                            <span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span> Look
                        </button>
                    </label>

                    <label> 
                        <a href= "pagcamisa.html"> 
                            <button type="button" class="btn btn-default btn-lg">
                                <span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span>Visitante
                            </button>
                        </a>
                    </label>
                </div>
                </fieldset>

            </div>
        </form>



        <?php
        //condição para confirmação  do hidden vai ser verdadeiro no envio de dados 
        $conexao = mysql_connect('localhost', 'root', '');
        $banco = mysql_select_db('looktome', $conexao);
        if (!$conexao) {
            die('Não foi possível conectar: ' . mysql_error());
        }
        $consulta = mysql_query("SELECT * FROM usuarios");
        while ($resultado = mysql_fetch_array($consulta)) {
            echo $resultado['login']; //ok
            echo $resultado['senha'];
        }
        if (isset($_POST['btn btn-default btn-lg'])) {
            //se clicar no botao login criará essas variaveis:
            $login=$_POST['txtlogin'];
            $senha=md5($_POST['txtsenha']);
            $consulta = mysql_query("SELECT * FROM usuarios WHERE login='$login' AND senha='$senha'");
            $resultado = mysql_num_rows($consulta);
            if ($resultado > 0) {

                header('Location:Administrador/restrito.php');
            } else {
                echo 'usuário ou senha incorreta';
            }
        }
        ?>




    </body>
</html>
