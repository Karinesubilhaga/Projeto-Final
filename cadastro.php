<?php
include('inc/index.php');

$con = newDbConnection();

$sql = $con->prepare('INSERT INTO user (nome, email, ddd, tel, endereco, cidade, estado, bairro, pais, login, senha, news, sexo) VALUES (?,?,?,?)');

$name = $_POST['nome'];
$email = $_POST['email'];
$senha = sha1($_POST['senha']);
$active = 1;
$sql->bind_param('sssi', $nome, $email, $ddd, $tel, $endereco, $cidade, $estado, $bairro, $pais, $login, $senha, $news, $sexo);

if (!$sql->execute()) {
    dd($sql->error);
}

header('location:index.php?p=user-form&success=1');