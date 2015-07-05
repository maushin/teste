<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

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
mysql_select_db('looktome');
//abaixo configura acentuação para bd
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

?>
<body id="corpocadastro">

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


    <!-- contrucao de formulario para cadastro =-->
    <!--<div class="quadro"> -->
    <form action="endereço para onde as informações do formulário serão enviadas" method="POST" id="fContato" action="">
       

        <fieldset  id="Cadusuario"><legend>Cadastro do usuário</legend>
            <label class="espan" for= "cLogin" > Login</label> 
            <input  type= "text" name="txtLogin"    id= "cLogin" size="20" maxlength="50" placeholder= "Login de entrada" > 



            <label class="espan"  for= "cSenha" > Senha</label> 
            <input  type= "password" name="txtSenha"  id= "cSenha" size="8" maxlength="35"  placeholder= "8 digitos" > 


            <label class="espan" for= "ccoSenha" > Confirmação de Senha</label> 
            <input  type= "password"  name="txtcSenha"  id= "ccoSenha" size="8" maxlength="50" placeholder= "" > 

            <label class="espan" for= "cNome" > Nome </label>   
            <input  type= "text" name="txtNome"  id= "cNome"  size="20" maxlength="50" placeholder= "Nome completo" > 
            
            <label class="espan" for= "cSobrenome" > Sobrenome </label>   
            <input  type= "text" name="txtSobrenome"  id= "cSobrenome"  size="20" maxlength="50" placeholder= "Sobrenome" > 
 

            <label class="espan" for= "cEmail" > Email </label> 
            <input  type= "email"  name="txtEmail"   id= "cEmail" size="20" maxlength="45" placeholder= "digite o seu email" > 
            

            <label id="btnCadastro"> 
                <input type="hidden" name="acao" value="enviado"/>  
                <button  type= "submit"  value="enviar informações" class="btn btn-default btn-lg">
                    <span class="glyphicon glyphicon-ok" aria-hidden="true" ></span> Enviar dados
                </button>
            </label>  

        </fieldset>

    </form>
    <?php
    //condição para confirmação  do hidden vai ser verdadeiro no envio de dados 
    if (isset($_POST['acao']) && $_POST['acao'] == 'enviado') {  
        //se clicar no botao enviar criará essas variaveis:
        $login = $_POST['txtLogin'];
        $senha=md5($_POST['txtSenha']);
        $nome = $_POST['txtNome'];
        $sobrenome = $_POST['txtSobrenome'];
        $email = $_POST['txtEmail'];
        $nascimento = $_POST['txtNasc'];
        $estado = $_POST['txtEstado'];
        $cidade = $_POST['txtCidade'];
        if((empty($login)) || (empty($senha)) || (empty($nome)) || (empty($sobrenome)) || (empty($email)) || (empty($nascimento)) || (empty($estado)) || (empty($cidade))) {
            echo "Preencha todos os campos!";
        } else {   
            $inserirDados = mysql_query("INSERT INTO usuarios (login, senha, nome, sobrenome, email, nascimento, estado, cidade) "
                    . "VALUES('$login', '$senha', '$nome', '$sobrenome', '$email', '$nascimento', '$estado', '$cidade')");    
            echo 'Enviado com sucesso';
    }    }
    ?>  
     
</body>
</html>