<!DOCTYPE html>
<html lang="ua">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My blog</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>

<body>
  <?php include_once "./blocks/header.php"; ?>
  <?php include_once './code/helper_functions.php'; ?>


  <main class="container mt-5">
    <?php

    $text = !empty($_GET['text']) ? trim($_GET['text']) : '';

    if (!empty($text)) {
      if (strlen($text) > 3) {
        $articles = search_articles($text);
        if (!empty($articles)) {
          foreach ($articles as $article) {
            print print_article($article, TRUE);
          }
        } else {
          print "<span class='text-muted text-center'>За запитом <em>{$text}</em> не знайдено результатів</span>";
        }
      } else {
        print 'Запит має мати більше ніж 3 символа';
      }
    } else {
      print 'Не коректний запит';
    }

    ?>

  </main>
</body>

</html>