<?php
session_start();
include('inc/index.php');

$con = newDbConnection();

$sql = $con->prepare('SELECT id, nome, email, ddd, tel, endereco, cidade, estado, bairro, pais, login, senha, news, sexo, FROM user WHERE email LIKE ?');

$email = $_POST['email'];
$password = sha1($_POST['senha']);

$sql->bind_param('s', $email);
$sql->execute();
$users = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
if (count($users)) {
    if ($users[0]['senha'] == $senha) {
        $_SESSION['user'] = [
            'id' => $users[0]['id'],
            'name' => $users[0]['nome'],
            'email' => $users[0]['email'],
        ];
    }
}
header('location:index.php');
