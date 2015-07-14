<?php
session_start();

?>
<html>
    <head>
        <title>Homepage Consultora de Beleza Mary Kay</title>
        <meta charset="ISO-8859-1">
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
                    <?php if (!empty($_SESSION['user']['id'])) { ?>
                        <h4>Bem vindo, <?php echo $_SESSION['user']['name'] ?>!</h4>
                        <a href="./logoff.php">Sair</a>
                    <?php } else { ?>
                        <form action="login.php" method="post">
                            <div class="form-group form-group-sm">
                                <!--<label for="exampleInputEmail1">Digite seu e-mail</label>-->
                                <input type="email" class="form-control " id="exampleInputEmail1" name="email" placeholder="Email">
                            </div>
                            <div class="form-group  form-group-sm">
                                <!--<label for="exampleInputPassword1">Digite sua senha</label>-->
                                <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-default btn-xs">Entrar</button>
                            <a href="cadastro.php"> Não tenho cadastro! Quero me cadastrar!</a>
                        </form>         
                    <?php } ?>
                </div>
            </div>
            <nav id="menu">
                <ul>
                    <li><a href="http://www.marykay.com.br/company.html">Empresa</a></li>
                    <li><a href="produto.php">Produtos</a></li>
                    <li><a href="http://www.marykay.com.br/sellmarykay.html">Quero ser uma consultora</a></li>
                    <li><a href="#">Agende sua sessão de Beleza</a></li>
                </ul>    
            </nav>        

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/make53.png" class="makes" >
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/mk.png" class="base" >
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/pele53.png" class="pele" >
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    ...
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <a href="http://www.marykayintouch.com.br/educacao_de_vendas_2015-v2"> <img src="img/treinamento.PNG" class="treinamento"></a>

                </div>
                <div class="col-md-5">
                    <a href="http://marykay.pciims.com.br/consultora.aspx"> <img src="img/comprar.png" class="compras"></a>                   
                </div>
            </div>
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
