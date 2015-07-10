<?php
//abrir conexão
$connect = mysql_connect('127.0.0.1', 'root', '');
$db = mysql_select_db('lp22015');

//limpar variaveis que vem do formulario (via post)
$nome = mysql_real_escape_string($_POST['nome'], $connect);
$email = mysql_real_escape_string($_POST['email'], $connect);
$endereco = mysql_real_escape_string($_POST['endereco'], $connect);
$login = mysql_real_escape_string($_POST['login'], $connect);
$senha = sha1($_POST['senha']); //senha é encriptada via algoritmo sha1

$query = "INSERT INTO pessoa (nome, emaill, endereco, login, senha) VALUES ('$nome','$email','$endereco','$login','$senha')";
$insert = mysql_query($query, $connect);

if ($insert) {
    header('location:cadastro.php?sucesso=1');
//    echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
} else {
    echo   'não';
    var_dump(mysql_error());
//    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
}
exit;
//}
