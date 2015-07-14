<?php

session_start();

$con = new mysqli('127.0.0.1', 'root', '', 'lp22015');
$sql = $con->prepare('SELECT id, nome, emaill as email, senha FROM pessoa WHERE emaill LIKE ?');


$email = $_POST['email'];
$senha = sha1($_POST['senha']);
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
