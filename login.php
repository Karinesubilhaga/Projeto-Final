<?php

session_start();

$con = newDbConnection();

$sql = $con->prepare('SELECT nome, email, senha, id , FROM user WHERE email LIKE ?');

$email = $_POST['email'];
$password = sha1($_POST['senha']);

$sql->bind_param('s', $email);
$sql->execute();
$users = $sql->get_result()->fetch_all(MYSQLI_ASSOC);



if (count($users)) {
    if ($users[0]['password'] == $password) {
        $_SESSION['pessoa'] = [
            'id' => $users[0]['id'],
            'nome' => $users[0]['nome'],
            'email' => $users[0]['email'],
        ];
    }
}
header('location:index.php');
