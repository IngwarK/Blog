<?php
require "connection.php";

$title = $_POST['title'] ?? '';
$intro = $_POST['intro'] ?? '';
$text = $_POST['text'] ?? '';
$author = $_COOKIE['log'] ?? '';

$data = [
  'title' => $title,
  'intro' => $intro,
  'text' => $text,
  'author' => $author,
];

$error = '';
if (strlen($title) < 10) $error = " У заголовку повинно бути не менше ніж 10 символів";
else if (strlen($intro) < 20) $error = " В інтро повинно бути не менше 20 символів";
else if (strlen($text) < 50) $error = " У тексті повинно бути не менше 50 символів";

if ($error) {
  echo $error;
  exit();
} else {
  $stmt = $pdo->prepare("INSERT INTO articles (title, intro, text, author) VALUES (:title, :intro, :text, :author)");
  $stmt->execute($data);
}

header('location: /');
