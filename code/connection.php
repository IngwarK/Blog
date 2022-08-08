<?php

define('PASS_HASH', 'BNksda87TG@Hkhdbsak73fgdah');

$pdo = new PDO('mysql:host=localhost;dbname=myblog', 'root');

if (!$pdo) {
    echo "Помилка";
    exit();
}
