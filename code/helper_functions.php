<?php

include_once 'connection.php';

function get_articles()
{
  global $pdo;
  $query = $pdo->query("SELECT * FROM articles ORDER BY `pubdate` DESC");
  return $query->fetchAll();
}

function get_article($id)
{
  global $pdo;
  $query = $pdo->prepare("SELECT * FROM articles WHERE id = :id LIMIT 1");
  $query->execute(['id' => $id]);
  return $query->fetch();
}

function search_articles($text)
{
  global $pdo;

  $data = [
    'title' => "%{$text}%",
    'intro' => "%{$text}%",
    'text' => "%{$text}%",
  ];

  $query = $pdo->prepare("SELECT * FROM articles WHERE title LIKE :title OR intro LIKE :intro OR text LIKE :text");
  $query->execute($data);
  return $query->fetchAll();
}

function print_article($article, $with_button = FALSE)
{
  $button = $with_button
    ? "<a href='/article.php?id={$article['id']}' class='btn btn-outline-prrimary mt-3'>Перейти</a>"
    : '';

  return "
    <article class='alert alert-primary'>
      <h3>{$article['title']}</h3>
      <p>{$article['intro']}</p>
      <em>Дата публікації: {$article['pubdate']}</em><br>
      <em>Автор: <a href=''>{$article['author']}</a></em><br>
      {$button}
    </article>";
}
