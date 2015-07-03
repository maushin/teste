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
    <form method="post" id="fContato" action="">

        <fieldset  id="Cadusuario"><legend>Cadastro do usuário</legend>
            <label class="espan" for= "cLogin" > Login</label> 
            <input  type= "text" name="txtLogin"    id= "cLogin" size="20" maxlength="50" placeholder= "Login de entrada" > 



            <label class="espan"  for= "cSenha" > Senha</label> 
            <input  type= "password" name="txtSenha"  id= "cSenha" size="8" maxlength="8"  placeholder= "8 digitos" > 


            <label class="espan" for= "ccoSenha" > Confirmação de Senha</label> 
            <input  type= "password"  name="txtcSenha"  id= "ccoSenha" size="8" maxlength="8" placeholder= "" > 



            <label class="espan" for= "cNome" > Nome </label>   
            <input  type= "text" name="txtNome"  id= "cNome"  size="20" maxlength="25" placeholder= "Nome" > 
          
            <label class="espan" for= "cSobrenome" > Sobrenome </label>   
            <input  type= "text" name="txtSobrenome"  id= "cSobrenome"  size="20" maxlength="50" placeholder= "Sobrenome" > 


            <label class="espan" for= "cEmail" > Email </label> 
            <input  type= "email"  name="txtEmail"   id= "cEmail" size="20" maxlength="45" placeholder= "digite o seu email" > 

            <label class="espan" for="cNasc"> Data de Nascimento</label>
            <input type="date" name="txtNasc"  id= "cNasc">


            <label class="espan" for ="cEstado">Estado</label>
            <select name="txtEstado" id="cEstado">

                <optgroup  label="Região Sudeste">
                    <option value="SP"> São Paulo</option>
                    <option value="RJ"> Rio de Janeiro </option>
                    <option value="ES"> Espírito Santo </option>
                    <option value="MG"> Minas Gerais </option>
                </optgroup>
                <!--
      20 - São Paulo (SP) = São Paulo
     21 - Rio de Janeiro (RJ) = Rio de Janeiro
     22 - Espírito Santo (ES) = Vitória
     23 - Minas Gerais (MG) = Belo Horizonte-->
                <optgroup label="Região Sul">
                    <option value="PR"> Paraná  </option>
                    <option value="RS"> Rio Grande do Sul </option>
                    <option value="SC"> Santa Catarina  </option>
                </optgroup>
                <!--  Região Sul – 03 estados
           
           24 - Paraná (PR) = Curitiba  
           25 - Rio Grande do Sul (RS) = Porto Alegre
           26 - Santa Catarina (SC) = Florianópolis-->
                <optgroup label="Região Centro-Oeste">
                    <option value="MT"> Mato Grosso</option>
                    <option value="MS"> Mato Grosso do Sul </option>
                    <option value="GO"> Goiás</option>
                </optgroup>
                <!--    Região Centro-Oeste – 03 estados
         
         17 - Mato Grosso (MT) = Cuiabá
         18 - Mato Grosso do Sul (MS) = Campo Grande
         19 - Goiás (GO) = Goiânia -->
                <optgroup label="Região Nordeste">
                    <option value="MA"> Maranhão </option>
                    <option value="PI"> Piauí </option>
                    <option value="CE"> Ceará </option>
                    <option value="RN"> Rio Grande </option>
                    <option value="PE"> Pernambuco  </option>
                    <option value="PB"> Paraíba</option>
                    <option value="SE"> Sergipe </option>
                    <option value="AL"> Alagoas </option>
                    <option value="BA"> Bahia </option>
                </optgroup>
                <!-- Região Nordeste – 09 estados
          
          8 - Maranhão (MA) = São Luiz
          9 - Piauí (PI) = Teresina
          10 - Ceará (CE) = Fortaleza
          11 - Rio Grande do Norte (RN) = Natal
          12 - Pernambuco (PE) = Recife
          13 - Paraíba (PB) = João Pessoa
          14 - Sergipe (SE) = Aracaju
          15 - Alagoas (AL) = Maceió
          16 - Bahia (BA) = Salvador-->
                <optgroup label="Região Norte">
                    <option value="AM"> Amazonas </option>
                    <option value="RR"> Roraima  </option>
                    <option value="AP"> Amapá </option>
                    <option value="PA"> Pará  </option>
                    <option value="TO"> Tocantins</option>
                    <option value="RO"> Rondônia </option>
                    <option value="AC"> Acre </option>
                </optgroup>
                <!--   Região Norte – 07 estados
     
     1 - Amazonas (AM) = Manaus
     2 - Roraima (RR) = Boa Vista
     3 - Amapá (AP) = Macapá
     4 - Pará (PA) = Belém
     5 - Tocantins (TO) = Palmas
     6 - Rondônia (RO) = Porto Velho
     7 - Acre (AC) = Rio Branco-->
            </select>
            <label class="espan"  for ="cCidade">Cidade</label>
            <input type="text" name="txtCidade" id="cCidade" size="20" maxlength="50" placeholder="">


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
        if((empty($login)) || (empty($senha)) || (empty($nome)) || (empty($email)) || (empty($nascimento)) || (empty($estado)) || (empty($cidade))) {
            echo "Preencha todos os campos!";
        } else {   
            $inserirDados = mysql_query("INSERT INTO usuarios (login, senha, nome, sobrenome, email, nascimento, estado, cidade) "
                    . "VALUES('$login', '$senha', '$nome', '$sobrenome' '$email', '$nascimento', '$estado', '$cidade')");    
            echo 'Enviado com sucesso';
    }    }
    ?>  
     
</body>
</html>