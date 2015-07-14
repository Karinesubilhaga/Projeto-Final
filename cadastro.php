<html>
    <head>
        <title>Homepage Consultora de Beleza Mary Kay</title>

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
                <div class="col-md-4">
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


            <h3>Preencha seu cadastro</h3>
            <?php if (!empty($_GET['sucesso'])) { ?>
                <h3 style="color:red">Cadastro realizado com sucesso!</h3> 
            <?php } ?>
            <script type="text/javascript">
                function validaCampo()
                {
                    if (document.cadastro.nome.value == "")
                    {
                        alert("O Campo nome é obrigatório!");
                        return false;
                    }
                    else
                    if (document.cadastro.email.value == "")
                    {
                        alert("O Campo email é obrigatório!");
                        return false;
                    }
                    else
                    if (document.cadastro.endereco.value == "")
                    {
                        alert("O Campo endereço é obrigatório!");
                        return false;
                    }

                    else
                    if (document.cadastro.senha.value == "")
                    {
                        alert("Digite uma senha!");
                        return false;
                    }
                    else
                        return true;
                }
            </script>

            <form id="cadastro" name="cadastro" method="post" action="cadastrar.php" onsubmit="return validaCampo();
                    return false;">
                <table width="625" border="0">
                    <tr>
                        <td width="69">Nome:</td>
                        <td width="546"><input name="nome" type="text" id="nome" size="70" maxlength="60" />
                            <span class="style1">*</span></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input name="email" type="text" id="email" size="70" maxlength="60" />
                            <span class="style1">*</span></td>
                    </tr>
                    <tr>
                        <td>Endereço:</td>
                        <td><input name="endereco" type="text" id="endereco" size="70" maxlength="70" />
                            <span class="style1">*</span></td>
                    </tr>
                    <tr>
                        <td>Login:</td>
                        <td><input name="login" type="text" id="login" maxlength="12" />
                            <span class="style1">*</span></td>
                    </tr>
                    <tr>
                        <td>Senha:</td>
                        <td><input name="senha" type="password" id="senha" maxlength="12" />
                            <span class="style1">*</span></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p>
                                <input name="cadastrar" type="submit" id="cadastrar" value="Concluir meu Cadastro!" />


                                <input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />


                                <span class="style1">* Campos com * são obrigatórios!</span></p>
                            <p>  </p></td>
                    </tr>
                </table>
            </form>

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
    </body>
</html>

