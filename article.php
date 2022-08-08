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
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    if (!empty($_GET['id'])) {
      $article = get_article($_GET['id']);

      if (!empty($article)) {
        print "<h1 class='text-center mb-5'> Пост {$article['title']}</h1>";
        print print_article($article);
      } else
        print "Article with id:{$_GET['id']} not found";
    } else {
      print 'Page not found';
    }

    ?>

  </main>
</body>

</html>