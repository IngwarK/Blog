<?php
require 'connection.php';

$login = trim($_POST['login']);
$password = $_POST['password'];

$password = md5($password . PASS_HASH);

$stmt = $pdo->prepare("SELECT * FROM users WHERE login = :login AND password = :password");
$stmt->execute(['login' => $login, 'password' => $password]);
$user = $stmt->fetch();

if ($user) {
  setcookie('log', $login, time() + 3600, '/');
  header('location: /');
}

print 'Невірний логін, або пароль';
