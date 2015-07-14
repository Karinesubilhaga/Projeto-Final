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
                <div class="col-md-12">
                    <img src="img/logoMK.png" class="logo">
                </div>
               
            </div>
            <!--JavaScript que validará os campos obrigatórios! -->
            <h3>Cadastro de Produtos</h3>
            <?php if (!empty($_GET['sucesso'])) { ?>
                <h3 style="color:red">Cadastro realizado com sucesso!</h3> 
            <?php } ?>
            <script type="text/javascript">
                function validaCampo()
                {
                    if (document.cadastro.idproduto.value == "")
                    {
                        alert("O Campo id do produto é obrigatório!");
                        return false;
                    }
                    else
                    if (document.cadastro.nomeproduto.value == "")
                    {
                        alert("O Campo nome do produto é obrigatório!");
                        return false;
                    }
                    else
                    if (document.cadastro.valor.value == "")
                    {
                        alert("O Campo valor do produto é obrigatório!");
                        return false;
                    }
                    else
                    if (document.cadastro.descricao.value == "")
                    {
                        alert("O Campo descrição do produto é obrigatório!");
                        return false;
                    }

                    else
                    if (document.cadastro.estoque.value == "")
                    {
                        alert("Digite a quantidade de produtos no estoque!");
                        return false;
                    }
                    
                    else
                        return true;
                }
            </script>

            <form id="produto" name="produto" method="post" action="produto.php" onsubmit="return validaCampo();
                    return false;">
                <table width="625" border="0">
                    <tr>
                        <td width="69">Id Produto:</td>
                        <td width="546"><input name="nome" type="number" id="nome" size="70" maxlength="60" />
                            <span class="style1">*</span></td>
                    </tr>
                    <tr>
                        <td>Nome:</td>
                        <td><input name="nome" type="text" id="nome" size="70" maxlength="60" />
                            <span class="style1">*</span></td>
                    </tr>
                    <tr>
                        <td>Valor:</td>
                        <td><input name="valor" type="number" id="valor" size="70" maxlength="70" />
                            <span class="style1">*</span></td>
                    </tr>
                    <tr>
                        <td>Descrição:</td>
                        <td><input name="descricao" type="text" id="descricao" maxlength="12" />
                            <span class="style1">*</span></td>
                    </tr>
                    <tr>
                        <td>Estoque:</td>
                        <td><input name="estoque" type="number" id="estoque" maxlength="12" />
                            <span class="style1">*</span></td>
                    </tr>
                    
                    <tr>
                        <td colspan="2"><p>
                                <input name="cadastrar" type="submit" id="cadastrar" value="Cadastrar Produto!" />


                                <input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />


                                <span class="style1">* Campos com * são obrigatórios!          </span></p>
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


