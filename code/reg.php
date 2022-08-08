<?php
require "connection.php";

$login = trim($_POST['login']);
$password = $_POST['password'];


$error = '';
if (strlen($login) < 3) $error = "Логін повинен бути не менше ніж 3 символи";
else if (strlen($password) < 6) $error = "Пароль повинен бути не менше ніж 6 символів";

if ($error) {
    echo $error;
    exit();
}

$password = md5($password . PASS_HASH);


$data = [
    'login' => $login,
    'password' => $password,
];

$stmt = $pdo->prepare("INSERT INTO users (login, password) VALUES (:login, :password)");
$stmt->execute($data);

header("location: /auth.php");
