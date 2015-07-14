<?php

//abrir conexão
$connect = mysql_connect('127.0.0.1', 'root', '');
$db = mysql_select_db('lp22015');

//limpar variaveis que vem do formulario (via post)
$idProdutos = mysql_real_escape_string($_POST['idProdutos'], $connect);
$produto = mysql_real_escape_string($_POST['produto'], $connect);
$valor = mysql_real_escape_string($_POST['valor'], $connect);
$descricao = mysql_real_escape_string($_POST['descricao'], $connect);


$query = "INSERT INTO produtos (idProdutos, produto, valor, descricao) VALUES ('$idProdutos','$produto','$valor','$descricao')";
$insert = mysql_query($query, $connect);

if ($insert) {
    header('location:produto.php?sucesso=1');

} else {
    echo 'Produto não cadastrado';
}
exit;

