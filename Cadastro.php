<html>
    <head>
        <title>Homepage Consultora de Beleza Mary Kay</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta charset="ISO-8859-1">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.11.3.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
                <div  class = "container" >
            <div class="row">  
                <div class="col-md-4">
                    <img src="img/logoMK.png" class="logo">
                </div>
                <div class="col-md-4" al>
                    <section id="wrapper">
                        <h1></h1>
                        <div id="main">
                            <form class="form-inline">
                                <div class="form-group">
                                    <input  class="form-control"  type="text" id="pesquisar">
                                    <input type="submit" class="solid btn btn-default btn" value="Pesquisar">
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
                <div class="col-md-4">
                    <form>
                        <div class="form-group form-group-sm">
                            <!--<label for="exampleInputEmail1">Digite seu e-mail</label>-->
                            <input type="email" class="form-control " id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group  form-group-sm">
                            <!--<label for="exampleInputPassword1">Digite sua senha</label>-->
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-default btn-xs">Entrar</button>
                    </form>         
                </div>
            </div>
            <nav id="menu">
                <ul>
                    <li><a href="http://www.marykay.com.br/company.html">Empresa</a></li>
                    <li><a href="http://www.marykay.com.br/products.html">Produtos</a></li>
                    <li><a href="http://www.marykay.com.br/sellmarykay.html">Quero ser uma consultora</a></li>
                    <li><a href="#">Agende sua sessão de Beleza</a></li>
                </ul>    
            </nav>        

 <?php
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nome= $_POST ["nome"];//atribuição do campo "nome" vindo do formulário para variavel
$email= $_POST ["email"];//atribuição do campo "email" vindo do formulário para variavel
$ddd= $_POST ["ddd"];//atribuição do campo "ddd" vindo do formulário para variavel
$tel= $_POST ["telefone"];//atribuição do campo "telefone" vindo do formulário para variavel
$endereco= $_POST ["endereco"];//atribuição do campo "endereco" vindo do formulário para variavel
$cidade= $_POST ["cidade"];//atribuição do campo "cidade" vindo do formulário para variavel
$estado= $_POST ["estado"];//atribuição do campo "estado" vindo do formulário para variavel
$bairro = $_POST ["bairro"];//atribuição do campo "bairro" vindo do formulário para variavel
$pais= $_POST ["pais"];//atribuição do campo "pais" vindo do formulário para variavel
$login= $_POST ["login"];//atribuição do campo "login" vindo do formulário para variavel
$senha= $_POST ["senha"];//atribuição do campo "senha" vindo do formulário para variavel
$news= $_POST ["news"];//atribuição do campo "news" vindo do formulário para variavel
$sexo= $_POST ["sexo"];//atribuição do campo "sexo" vindo do formulário para variavel
 
//Gravando no banco de dados ! conectando com o localhost - mysql
$conexao = mysql_connect("localhost","root"); //localhost é onde esta o banco de dados.
if (!$conexao)
die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
 
//conectando com a tabela do banco de dados
$banco = mysql_select_db("clientes",$conexao); //nome da tabela que deseja que seja inserida os dados cadastrais
if (!$banco)
die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
 
 
//Query que realiza a inserção dos dados no banco de dados na tabela indicada acima
$query = "INSERT INTO `clientes` ( `nome` , `email` , `sexo` , `ddd` , `telefone` , `endereço` , `cidade` , `estado` , `bairro` , `país` , `login` , `senha` , `news` , `id` )
VALUES ('$nome', '$email', '$sexo', '$ddd', '$tel', '$endereco', '$cidade', '$estado', '$bairro', '$pais', '$login', '$senha', '$news', '')";
mysql_query($query,$conexao);
########## ? Explicação da query ? ##########
#$query = nome da variavel que decidi#
#utilizar para realizar a operação.#
#############################################
#clientes = nome da tabela que será salvo#
#os dados do cadastro do cliente#
#############################################
#nome, email, sexo, ddd, telefone,#
#endereço, cidade, estado, bairro, país,#
#login, senha, news, id.#
##
#São apenas os nomes dos campos que #
#constam na tabela clientes.#
#############################
#VALUES = indica que serão inseridos os#
#seguintes valores.#
#############################################
#$nome, $email, $sexo, $ddd, $telefone,#
#$endereço, $cidade, $estado, $bairro, #
#$país, $login, $senha, $news, $id.#
#############################
#São apenas as variaveis a qual eu#
#atribui os valores digitados no formulá-#
#rio.#
#############################################
echo "Seu cadastro foi realizado com sucesso!Agradecemos a atenção.";
//mensagem que é escrita quando os dados são inseridos normalmente.
?>

</html>

            <div class="row rodape" >
                <div class="col-sm-4">
                    <nav id="menuinfdir">
                        <h5 >
                            PRODUTOS
                        </h5>
                        <ul>                            
                            <li><a href="http://www.marykay.com.br/skincare.html">Cuidados com a pele</a></li>
                            <li><a href="http://www.marykay.com.br/makeup.html">Maquiagem</a></li>
                            <li><a href="http://www.marykay.com.br/fragrance.html">Frangrâncias</a></li>
                        </ul>    
                    </nav> 
                </div>
                <div class="col-sm-4 contato"> 
                    <h5>CONTATO</h5>
                    <h5>CELULAR 9685.7485</h5>
                    <h5>COMERCIAL 3552.1474</h5>
                    <h5>E-MAIL karinesubilhaga@yahoo.com.br</h5>

                </div> 
                <div class="col-sm-4 atend" > 
                    <h5>HORÁRIO DE ATENDIMENTO</h5>
                    <p>Segunda à Sexta, das 8h às 22h<br>Sabado das 08h às 20h</p>
                    <img src="img/logorodape.jpg">   
                </div>        
            </div>          
        </div> 
    </div>
</body>
</html>

